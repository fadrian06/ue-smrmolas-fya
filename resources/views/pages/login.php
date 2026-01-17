<?php

use flight\Container;
use Leaf\Auth;

?>

<form method="post">
  <input type="email" name="email" />
  <input
    type="password"
    name="<?= Container::getInstance()->get(Auth::class)->config('password.key') ?>" />
  <input type="submit" />
  <a href=".<?= Flight::getUrl('oauth2.google.callback') ?>">Google</a>
</form>
