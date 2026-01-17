<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\RedirectIfAuthenticated;

Flight::route('GET /logout', [LogoutController::class, 'index']);

Flight::group('/', function () {
  Flight::group('/login', function () {
    Flight::route('GET /', [LoginController::class, 'index']);
    Flight::route('POST /', [LoginController::class, 'authenticate']);
  });
}, [RedirectIfAuthenticated::class]);

Flight::group('/', function () {
  Flight::route('/', [DashboardController::class, 'index']);
}, [Authenticate::class]);
