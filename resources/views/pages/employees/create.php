<?php

use flight\Container;
use Leaf\Auth;

$auth = Container::getInstance()->get(Auth::class);

?>
<form action="./employees" method="post">
  <select name="<?= $auth->config('roles.key') ?>">
    <option value="administrative">Administrativo</option>
    <option value="teacher">Docente</option>
    <option value="worker">Obrero</option>
  </select>
  <input type="email" name="email" />
  <input
    type="password"
    name="<?= $auth->config('password.key') ?>" />
  <input type="submit" />
</form>
