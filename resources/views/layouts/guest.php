<!doctype html>
<html class="no-js">

<head>
  <meta charset="utf-8" />
  <title>U.E. SMRMolas FyA | <?= $title ?? '' ?></title>
  <meta name="viewport" content="width=device-width" />
  <meta name="color-scheme" content="light dark" />
  <base href="<?= str_replace('index.php', '', $_SERVER['SCRIPT_NAME']) ?>" />
  <!-- Favicon -->
  <link rel="icon" href="https://www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/img/favicon.png" />
  <!-- Normalize CSS -->
  <link rel="stylesheet" href="https://www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/css/normalize.css" />
  <!-- Main CSS -->
  <link rel="stylesheet" href="https://www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/css/main.css" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/css/bootstrap.min.css" />
  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="./node_modules/@fortawesome/fontawesome-free/css/all.min.css" />
  <!-- Flaticon CSS -->
  <link rel="stylesheet" href="https://www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/fonts/flaticon.css" />
  <!-- Animate CSS -->
  <link rel="stylesheet" href="https://www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/css/animate.min.css" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="https://www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/style.css" />
  <!-- Modernize js -->
  <script src="https://www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/js/modernizr-3.6.0.min.js"></script>
</head>

<body>
  <!-- Preloader Start Here -->
  <div id="preloader"></div>
  <!-- Preloader End Here -->

  <?= $page ?? '' ?>

  <?php Flight::render('components/toasts') ?>

  <!-- jquery-->
  <script src="https://www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/js/jquery-3.3.1.min.js"></script>
  <!-- Plugins js -->
  <script src="https://www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/js/plugins.js"></script>
  <!-- Popper js -->
  <script src="https://www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/js/popper.min.js"></script>
  <!-- Bootstrap js -->
  <script src="https://www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/js/bootstrap.min.js"></script>
  <!-- Scroll Up Js -->
  <script src="https://www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/js/jquery.scrollUp.min.js"></script>
  <!-- Custom Js -->
  <script src="https://www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/js/main.js"></script>

</body>

</html>
