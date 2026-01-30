<?php

use App\Http\Controllers\AccountSettingsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\Authorize;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Middleware\RedirectToAccountSettings;

Flight::route('GET /logout', [LogoutController::class, 'index']);

Flight::group('/', function () {
  Flight::group('/login', function () {
    Flight::route('GET /', [LoginController::class, 'index']);
    Flight::route('POST /', [LoginController::class, 'authenticate']);
  });
}, [RedirectIfAuthenticated::class]);

Flight::group('/', function () {
  Flight::route('/', [DashboardController::class, 'index']);

  Flight::group('/employees', function () {
    Flight::route('GET /', [EmployeeController::class, 'index']);

    Flight::group('/@id:[0-9]+', function () {
      Flight::route('GET /', [EmployeeController::class, 'show']);

      Flight::route('/destroy', [EmployeeController::class, 'destroy'])
        ->addMiddleware(new Authorize('destroy employee'));

      Flight::group('/', function () {
        Flight::route('GET /edit', [EmployeeController::class, 'edit']);
        Flight::route('POST /', [EmployeeController::class, 'update']);
      }, [new Authorize('edit employee')]);
    }, [RedirectToAccountSettings::class]);

    Flight::group('/', function (): void {
      Flight::route('GET /create', [EmployeeController::class, 'create']);
      Flight::route('POST /', [EmployeeController::class, 'store']);
    }, [new Authorize('create employee')]);
  });

  Flight::group('/account-settings', function () {
    Flight::route('GET /', [AccountSettingsController::class, 'index']);
    Flight::route('POST /', [AccountSettingsController::class, 'update']);
  });
}, [Authenticate::class]);
