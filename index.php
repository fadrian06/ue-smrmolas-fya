<?php

use App\Enums\Role;
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
  ->createTableIfNotExists((string) $auth->config('db.table'), [
    $auth->config('id.key') => 'integer primary key autoincrement',
    'email' => "varchar(255) not null unique check (email like '%@%')",
    $auth->config('password.key') => 'varchar(255)',
    'created_at' => 'datetime default current_timestamp',
    'updated_at' => 'datetime default current_timestamp',
    $auth->config('roles.key') => "varchar(255) not null check ({$auth->config('roles.key')} like '[\"%\"]')",
  ])
  ->execute();

$auth
  ->db()
  ->createTableIfNotExists('students', [
    'id' => 'integer primary key autoincrement',
    'first_name' => 'varchar(255) not null',
    'second_name' => 'varchar(255)',
    'first_last_name' => 'varchar(255) not null',
    'second_last_name' => 'varchar(255)',
    'nationality' => 'varchar(1) not null check (nationality in ("v", "e"))',
    'id_card' => 'integer unique',
    'birth_type' => 'integer not null check (birth_type in (1, 2, 3))',
    'birth_date' => 'datetime not null, unique (first_name, second_name, first_last_name, second_last_name)',
  ])
  ->execute();

$auth
  ->db()
  ->createTableIfNotExists('representatives', [
    'id_card' => 'integer primary key autoincrement',
    'nationality' => 'varchar(1) not null check (nationality in ("v", "e"))',
  ])
  ->execute();

$auth
  ->db()
  ->createTableIfNotExists('representative_student', [
    'representative_id_card' => 'integer not null',
    'student_id' => 'integer not null, foreign key (representative_id_card) references representatives(id_card), foreign key (student_id) references students(id)',
  ])
  ->execute();

$httpClient = (object) $auth->client('google')?->getHttpClient();
$configProperty = new ReflectionProperty($httpClient, 'config');
$configValue = $configProperty->getValue($httpClient);
$configValue['verify'] = false;
$configProperty->setValue($httpClient, $configValue);

$auth->createRoles([
  Role::PRINCIPAL->name => [
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
