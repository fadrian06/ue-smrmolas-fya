<?php

use flight\Container;
use Leaf\Auth;

?>

<!doctype html>
<html class="no-js">

<head>
  <meta charset="utf-8" />
  <title>AKKHOR | Login</title>
  <meta name="viewport" content="width=device-width" />
  <meta name="color-scheme" content="light dark" />
  <base href="<?= str_replace('index.php', '', $_SERVER['SCRIPT_NAME']) ?>" />
  <!-- Favicon -->
  <link rel="icon" href="./resources/images/MolasRosa.jpg" />
  <!-- Normalize CSS -->
  <link rel="stylesheet" href="./resources/build/normalize.css" />
  <!-- Main CSS -->
  <link rel="stylesheet" href="./resources/build/main.css" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./resources/build/bootstrap.css" />
  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="./resources/build/all.css" />
  <!-- Flaticon CSS -->
  <link rel="stylesheet" href="./resources/build/flaticon.css">
  <!-- Animate CSS -->
  <link rel="stylesheet" href="./resources/build/animate.css" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="./resources/build/style.css" />
  <!-- Modernize js -->
  <script src="./resources/build/modernizr.js"></script>
</head>

<body>
  <!-- Preloader Start Here -->
  <div id="preloader"></div>
  <!-- Preloader End Here -->

  <!-- Login Page Start Here -->
  <div class="login-page-wrap">
    <div class="login-page-content">
      <div class="login-box">
        <div class="item-logo">
          <img src="./resources/img/logo2.png" />
        </div>

        <form method="post" class="login-form">
          <div class="form-group">
            <label>Correo</label>
            <input type="email" placeholder="Ingresa tu correo" class="form-control" />
            <i class="far fa-envelope"></i>
          </div>
          <div class="form-group">
            <label>Contraseña</label>
            <input
              type="password"
              placeholder="Enter password"
              class="form-control"
              name="<?= Container::getInstance()->get(Auth::class)->config('password.key') ?>" />
            <i class="fas fa-lock"></i>
          </div>
          <div class="form-group d-flex align-items-center justify-content-between">
            <!-- <div class="form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id="remember-me"
                name="remember-me" />
              <label for="remember-me" class="form-check-label">Recuerdame</label>
            </div> -->
            <!-- <a href="#" class="forgot-btn">¿Olvidó la contraseña?</a> -->
          </div>
          <div class="form-group">
            <button type="submit" class="login-btn">Ingresar</button>
          </div>
        </form>

        <div class="login-social">
          <p>o ingresa con</p>
          <ul>
            <!-- <li>
              <a href="#" class="bg-fb">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li> -->
            <!-- <li>
              <a href="#" class="bg-twitter">
                <i class="fab fa-twitter"></i>
              </a>
            </li> -->
            <li>
              <a
                href=".<?= Flight::getUrl('oauth2.google.callback') ?>"
                class="bg-gplus">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </li>
            <!-- <li>
              <a href="#" class="bg-git">
                <i class="fab fa-github"></i>
              </a>
            </li> -->
          </ul>
        </div>
      </div>
      <!-- <div class="sign-up">
        Don't have an account?
        <a href="#">Signup now!</a>
      </div> -->
    </div>
  </div>
  <!-- Login Page End Here -->

  <!-- Plugins js -->
  <script src="./resources/build/plugins.js"></script>
  <!-- Bootstrap js -->
  <script src="./resources/build/bootstrap.bundle.js"></script>
  <!-- Custom Js -->
  <script src="./resources/build/main.js"></script>

</body>

</html>
