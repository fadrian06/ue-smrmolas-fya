<?php

namespace App\Http\Controllers;

use App\Enums\Role;
use Flight;
use Leaf\Auth;
use Leaf\Auth\User;

final readonly class TeacherController
{
  function __construct(private Auth $auth)
  {
    //
  }

  function index()
  {
    $teachers = array_map(
      fn(array $data): User => new User($data, false),
      (array) $this
        ->auth
        ->db()
        ->select((string) $this->auth->config('db.table'))
        ->where($this->auth->config('roles.key'), 'LIKE', '%' . Role::TEACHER->name . '%')
        ->all()
    );

    Flight::render('pages/teachers/index', compact('teachers'), 'page');
    Flight::render('layouts/auth', ['title' => 'Docentes']);
  }

  function create()
  {
    Flight::render('pages/teachers/create', key: 'page');
    Flight::render('layouts/auth', ['title' => 'Añadir docente']);
  }
}
