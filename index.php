<?php

use flight\Container;
use Leaf\Auth;
use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\CliDumper;
use Symfony\Component\VarDumper\Dumper\ContextProvider\CliContextProvider;
use Symfony\Component\VarDumper\Dumper\ContextProvider\SourceContextProvider;
use Symfony\Component\VarDumper\Dumper\HtmlDumper;
use Symfony\Component\VarDumper\Dumper\ServerDumper;
use Symfony\Component\VarDumper\VarDumper;

use function Leaf\_env;

require __DIR__ . '/vendor/autoload.php';

if (!file_exists('.env')) {
  copy('.env.example', '.env');
}

(new Dotenv)->load('.env.example', '.env');

if (_env('APP_ENV') === 'local') {
  $cloner = new VarCloner;
  $fallbackDumper = in_array(PHP_SAPI, ['cli', 'phpdbg']) ? new CliDumper : new HtmlDumper;

  $dumper = new ServerDumper('tcp://127.0.0.1:9912', $fallbackDumper, [
    'cli' => new CliContextProvider,
    'source' => new SourceContextProvider,
  ]);

  VarDumper::setHandler(fn(mixed $var): ?string => $dumper->dump($cloner->cloneVar($var)));
}

Container::getInstance()->singleton(Auth::class);
$auth = Container::getInstance()->get(Auth::class);
$auth->config('session', true);
$auth->autoConnect();
$pdo = $auth->db()->connection();

if ($pdo instanceof PDO) {
  $auth->dbConnection($pdo);
}

$auth
  ->db()
  ->query(<<<sql
    create table if not exists users (
      {$auth->config('id.key')} integer primary key autoincrement,
      email varchar(255) not null unique check (email like '%@%'),
      {$auth->config('password.key')} varchar(255),
      created_at datetime default current_timestamp,
      updated_at datetime default current_timestamp,
      {$auth->config('roles.key')}
        varchar(255)
        not null
        check ({$auth->config('roles.key')} like '["%"]')
    );
  sql)
  ->execute();

$httpClient = (object) $auth->client('google')?->getHttpClient();
$configProperty = new ReflectionProperty($httpClient, 'config');
$configValue = $configProperty->getValue($httpClient);
$configValue['verify'] = false;
$configProperty->setValue($httpClient, $configValue);

$auth->createRoles([
  'administrative' => [
    'create employee',
    'edit employee',
    'destroy employee',
  ],
]);

Flight::registerContainerHandler(Container::getInstance());

Flight::set('flight.views.path', 'resources/views');
Flight::view()->preserveVars = false;

foreach (glob('routes/*.php') ?: [] as $routes) {
  require $routes;
}

Flight::start();
