<?php

namespace App\Http\Controllers;

use Flight;

final readonly class DashboardController
{
  function index()
  {
    Flight::render('pages/dashboard', key: 'page');
    Flight::render('layouts/auth');
  }
}
