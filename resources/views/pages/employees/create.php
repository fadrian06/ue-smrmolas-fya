<?php

use App\Enums\Role;
use flight\Container;
use Leaf\Auth;

$auth = Container::getInstance()->get(Auth::class);

?>

<form action="./employees" method="post">
  <input type="email" name="email" />
  <input
    type="password"
    name="<?= $auth->config('password.key') ?>" />
  <select name="<?= $auth->config('roles.key') ?>">
    <?php foreach (Role::employees() as $role) : ?>
      <?php if ($role instanceof Role) : ?>
        <option><?= $role->value ?></option>
      <?php endif ?>
    <?php endforeach ?>
  </select>
  <input type="submit" />
</form>
