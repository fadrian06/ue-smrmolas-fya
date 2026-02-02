<!doctype html>
<html class="no-js">

<head>
  <meta charset="utf-8">
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
  <link rel="stylesheet" href="./resources/fonts/flaticon.css" />
  <!-- Full Calender CSS -->
  <link rel="stylesheet" href="https://www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/css/fullcalendar.min.css" />
  <!-- Animate CSS -->
  <link rel="stylesheet" href="https://www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/css/animate.min.css" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="https://www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/style.css" />
  <!-- Modernize js -->
  <script src="https://www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/js/modernizr-3.6.0.min.js"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
  <!-- Preloader Start Here -->
  <div id="preloader"></div>
  <!-- Preloader End Here -->
  <div id="wrapper" class="wrapper bg-ash">
    <?php Flight::render('components/navbar-menu') ?>
    <!-- Page Area Start Here -->
    <div class="dashboard-page-one">
      <?php Flight::render('components/sidebar') ?>

      <div class="dashboard-content-one">
        <?= $page ?? '' ?>

        <?php # Flight::render('components/footer')
        ?>
      </div>
    </div>
    <!-- Page Area End Here -->
  </div>

  <?php Flight::render('components/toasts') ?>

  <!-- jquery-->
  <script src="https://www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/js/jquery-3.3.1.min.js"></script>
  <!-- Plugins js -->
  <script src="https://www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/js/plugins.js"></script>
  <!-- Popper js -->
  <script src="https://www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/js/popper.min.js"></script>
  <!-- Bootstrap js -->
  <script src="https://www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/js/bootstrap.min.js"></script>
  <!-- Counterup Js -->
  <script src="https://www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/js/jquery.counterup.min.js"></script>
  <!-- Moment Js -->
  <script src="https://www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/js/moment.min.js"></script>
  <!-- Waypoints Js -->
  <script src="https://www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/js/jquery.waypoints.min.js"></script>
  <!-- Scroll Up Js -->
  <script src="https://www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/js/jquery.scrollUp.min.js"></script>
  <!-- Full Calender Js -->
  <script src="https://www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/js/fullcalendar.min.js"></script>
  <!-- Chart Js -->
  <script src="https://www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/js/Chart.min.js"></script>
  <!-- Custom Js -->
  <script src="https://www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/js/main.js"></script>
</body>

</html>
