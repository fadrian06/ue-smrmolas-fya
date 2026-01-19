<?php

use flight\Container;
use Leaf\Auth;

?>

<form method="post">
  <input
    type="password"
    name="<?= Container::getInstance()->get(Auth::class)->config('password.key') ?>" />
  <input type="submit" />
</form>
