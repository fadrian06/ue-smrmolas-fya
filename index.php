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
Container::getInstance()->get(Auth::class)->config('session', true);
Container::getInstance()
  ->get(Auth::class)
  ->autoConnect()
  ->db()
  ->query(<<<'sql'
    create table if not exists users (
      id integer,
      email varchar(255),
      password varchar(255)
    );
  sql)
  ->execute();
Flight::registerContainerHandler(Container::getInstance());

Flight::set('flight.views.path', 'resources/views');

Flight::start();
