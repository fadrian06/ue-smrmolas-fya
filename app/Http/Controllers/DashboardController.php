<?php

namespace App\Http\Controllers;

use App\Enums\Role;
use Flight;
use Leaf\Auth;

final readonly class DashboardController
{
  function __construct(private Auth $auth)
  {
    //
  }

  function index()
  {
    $dashboard = match (false) {
      $this->auth->user()?->is(Role::PRINCIPAL->name) => 'admin',
      $this->auth->user()?->is(Role::TEACHER->name) => 'teacher',
    };

    Flight::render("pages/dashboards/$dashboard", key: 'page');
    Flight::render('layouts/auth');
  }
}
