<?php

namespace App\Http\Middleware;

use Flight;
use Leaf\Auth;

final readonly class Authenticate
{
  function __construct(private Auth $auth)
  {
    //
  }

  function before()
  {
    if ($this->auth->id() === null || $this->auth->user()?->email === null) {
      Flight::redirect('/logout');

      exit;
    }
  }
}
