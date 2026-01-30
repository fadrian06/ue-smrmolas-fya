<?php

use App\Http\Controllers\GoogleController;
use flight\Container;
use Leaf\Auth;
use League\OAuth2\Client\Provider\Google;

use function Leaf\_env;

$google = Container::getInstance()->get(Auth::class)->client('google');

if ($google instanceof Google) {
  $redirectUri = (new ReflectionProperty($google, 'redirectUri'))->getValue($google);

  Flight::route(
    'GET ' . str_replace((string) _env('APP_URL'), '', (string) $redirectUri),
    [GoogleController::class, 'handleCallback'],
    alias: 'oauth2.google.callback',
  );
}
