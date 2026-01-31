<!doctype html>
<html class="no-js">

<head>
  <meta charset="utf-8">
  <title>U.E. SMRMolas FyA | <?= $title ?? '' ?></title>
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
  <!-- Full Calender CSS -->
  <link rel="stylesheet" href="./resources/build/fullcalendar.css">
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

  <?= $page ?? '' ?>

  <?php Flight::render('components/toasts') ?>

  <!-- Plugins js -->
  <script src="./resources/build/plugins.js"></script>
  <!-- Bootstrap js -->
  <script src="./resources/build/bootstrap.bundle.js"></script>
  <!-- Moment Js -->
  <script src="./resources/build/moment.js"></script>
  <!-- Full Calender Js -->
  <script src="./resources/build/fullcalendar.js"></script>
  <!-- Custom Js -->
  <script src="./resources/build/main.js"></script>

</body>

</html>
