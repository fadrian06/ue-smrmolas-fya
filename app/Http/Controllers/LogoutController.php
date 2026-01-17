<?php

namespace App\Http\Controllers;

use Leaf\Auth;

final readonly class LogoutController
{
  function __construct(private Auth $auth)
  {
    //
  }

  function index()
  {
    $this->auth->logout('login');
  }
}
