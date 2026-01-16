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
Container::getInstance()->get(Auth::class)->autoConnect();
Flight::registerContainerHandler(Container::getInstance());

Flight::start();
