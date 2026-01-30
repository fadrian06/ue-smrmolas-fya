<?php

namespace App\Http\Middleware;

use Flight;
use Leaf\Auth;

final readonly class RedirectToAccountSettings
{
  function __construct(private Auth $auth)
  {
    //
  }

  function before(array $query = [])
  {
    if ($query['id'] ?? '' === $this->auth->id()) {
      Flight::redirect('/account-settings');

      exit;
    }
  }
}
