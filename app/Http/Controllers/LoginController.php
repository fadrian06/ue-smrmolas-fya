<?php

namespace App\Http\Controllers;

use Flight;
use Leaf\Auth;
use Leaf\Flash;

final readonly class LoginController
{
  function __construct(private Auth $auth)
  {
    //
  }

  function index()
  {
    Flight::render('pages/login', key: 'page');
    Flight::render('layouts/guest');
  }

  function authenticate()
  {
    if (!$this->auth->login([
      $this->auth->config('password.key') => Flight::request()->data->{$this->auth->config('password.key')},
      'email' => Flight::request()->data->email,
    ])) {
      Flash::set($this->auth->errors(), 'errors');
      Flight::redirect('/login');

      exit;
    }

    Flight::redirect('/');
    exit;
  }
}
