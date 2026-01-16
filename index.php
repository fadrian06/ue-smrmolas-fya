<?php

use flight\Container;
use Leaf\Auth;

require __DIR__ . '/vendor/autoload.php';

Container::getInstance()->singleton(Auth::class);
Flight::registerContainerHandler(Container::getInstance());

Flight::start();
