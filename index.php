<?php

use flight\Container;
use Leaf\Auth;
use Symfony\Component\Dotenv\Dotenv;

require __DIR__ . '/vendor/autoload.php';

if (!file_exists('.env')) {
  copy('.env.example', '.env');
}

(new Dotenv)->load('.env.example', '.env');

Container::getInstance()->singleton(Auth::class);
$auth = Container::getInstance()->get(Auth::class);
$auth->config('session', true);

$auth
  ->autoConnect()
  ->db()
  ->query(<<<sql
    create table if not exists users (
      {$auth->config('id.key')} integer primary key autoincrement,
      email varchar(255) not null unique check (email like '%@%'),
      {$auth->config('password.key')} varchar(255),
      created_at datetime default current_timestamp,
      updated_at datetime default current_timestamp
    );
  sql)
  ->execute();

$httpClient = (object) $auth->client('google')?->getHttpClient();
$configProperty = new ReflectionProperty($httpClient, 'config');
$configValue = $configProperty->getValue($httpClient);
$configValue['verify'] = false;
$configProperty->setValue($httpClient, $configValue);

$auth->createRoles([
  'administrative' => [],
]);

Flight::registerContainerHandler(Container::getInstance());

Flight::set('flight.views.path', 'resources/views');

foreach (glob('routes/*.php') ?: [] as $routes) {
  require $routes;
}

Flight::start();
