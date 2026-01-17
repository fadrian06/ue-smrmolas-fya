<?php

namespace App\Http\Middleware;

use Flight;
use flight\Container;
use Leaf\Auth;
use Leaf\Flash;

final readonly class Authorize
{
  private array $permissions;

  function __construct(string $permission, string ...$permissions)
  {
    $this->permissions = array_merge([$permission], $permissions);
  }

  function before()
  {
    if (Container::getInstance()->get(Auth::class)->user()?->cannot($this->permissions)) {
      Flash::set(['You do not have permission to access that resource.'], 'errors');
      Flight::redirect(Flight::request()->referrer ?: '/');

      exit;
    }
  }
}
