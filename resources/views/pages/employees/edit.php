<?php

use App\Enums\Role;
use flight\Container;
use Leaf\Auth;
use Leaf\Auth\User;

/** @var User $employee */

$auth = Container::getInstance()->get(Auth::class);

?>

<form method="post">
  <input
    type="email"
    name="email"
    value="<?= $employee->email ?>" />
  <input
    type="password"
    name="<?= $auth->config('password.key') ?>" />
  <select name="<?= $auth->config('roles.key') ?>">
    <?php foreach (Role::employees() as $role) : ?>
      <?php if ($role instanceof Role) : ?>
        <option <?= $employee->isNot($role->name) ?: 'selected' ?>>
          <?= $role->value ?>
        </option>
      <?php endif ?>
    <?php endforeach ?>
  </select>
</form>
