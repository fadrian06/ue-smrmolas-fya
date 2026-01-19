<?php

namespace App\Http\Controllers;

use Flight;
use Leaf\Auth;
use Leaf\Helpers\Password;

final readonly class AccountSettingsController
{
  function __construct(private Auth $auth)
  {
    //
  }

  function index()
  {
    Flight::render('pages/account-settings', key: 'page');
    Flight::render('layouts/auth');
  }

  function update()
  {
    $password = Flight::request()->data->{$this->auth->config('password.key')};

    $this->auth->update([
      $this->auth->config('password.key') => Password::hash((string) $password, Password::DEFAULT),
    ]);

    Flight::redirect('/account-settings');

    exit;
  }
}
