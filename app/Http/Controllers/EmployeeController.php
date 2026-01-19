<?php

namespace App\Http\Controllers;

use App\Enums\Role;
use Flight;
use Leaf\Auth;
use Leaf\Auth\User;
use Leaf\Helpers\Password;

final readonly class EmployeeController
{
  function __construct(private Auth $auth)
  {
    //
  }

  function index()
  {
    $employees = array_map(
      fn(array $data): User => new User($data, false),
      (array) $this
        ->auth
        ->db()
        ->select((string) $this->auth->config('db.table'))
        ->all()
    );

    Flight::render('pages/employees/index', compact('employees'), 'page');
    Flight::render('layouts/auth');
  }

  function show(int $id)
  {
    $employee = $this->getUserById($id);

    Flight::render('pages/employees/show', compact('employee'), 'page');
    Flight::render('layouts/auth');
  }

  function create()
  {
    Flight::render('pages/employees/create', key: 'page');
    Flight::render('layouts/auth');
  }

  function store()
  {
    $role = Role::from((string) Flight::request()->data->{$this->auth->config('roles.key')});
    $email = Flight::request()->data->email;
    $password = Flight::request()->data->{$this->auth->config('password.key')};

    $this
      ->auth
      ->db()
      ->insert((string) $this->auth->config('db.table'))
      ->params(compact('email') + [
        $this->auth->config('password.key') => Password::hash((string) $password, Password::DEFAULT),
        $this->auth->config('roles.key') => json_encode([$role->name]),
      ])
      ->execute();

    Flight::redirect('/employees');

    exit;
  }

  function edit(int $id)
  {
    if ($id === $this->auth->id()) {
      Flight::redirect('/account-settings');

      exit;
    }

    $employee = $this->getUserById($id);

    Flight::render('pages/employees/edit', compact('employee'), 'page');
    Flight::render('layouts/auth');
  }

  function update(int $id)
  {
    $params = [];

    $this
      ->auth
      ->db()
      ->update((string) $this->auth->config('db.table'))
      ->params($params)
      ->where((string) $this->auth->config('id.key'), $id)
      ->execute();
  }

  function destroy(int $id)
  {
    $this
      ->auth
      ->db()
      ->delete((string) $this->auth->config('db.table'))
      ->where((string) $this->auth->config('id.key'), $id)
      ->execute();

    Flight::redirect('/employees');

    exit;
  }

  private function getUserById(int $id): User
  {
    $data = $this
      ->auth
      ->db()
      ->select((string) $this->auth->config('db.table'))
      ->where((string) $this->auth->config('id.key'), $id)
      ->first() ?: [];

    if (!$data) {
      Flight::notFound();

      exit;
    }

    return new User($data, false);
  }
}
