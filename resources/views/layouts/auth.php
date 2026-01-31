<!doctype html>
<html class="no-js">

<head>
  <meta charset="utf-8">
  <title>U.E. SMRMolas FyA | <?= $title ?? '' ?></title>
  <meta name="viewport" content="width=device-width" />
  <meta name="color-scheme" content="light dark" />
  <base href="<?= str_replace('index.php', '', $_SERVER['SCRIPT_NAME']) ?>" />
  <!-- Favicon -->
  <link rel="icon" href="./resources/img/favicon.png" />
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
  <!-- Data Table CSS -->
  <link rel="stylesheet" href="./resources/build/dataTables.dataTables.css" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="./resources/build/style.css" />
  <!-- Modernize js -->
  <script src="./resources/build/modernizr.js"></script>
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
        <?php Flight::render('components/breadcrumbs') ?>

        <?= $page ?? '' ?>

        <?php Flight::render('components/footer') ?>
      </div>
    </div>
    <!-- Page Area End Here -->
  </div>

  <?php Flight::render('components/toasts') ?>

  <!-- Plugins js -->
  <script src="./resources/build/plugins.js"></script>
  <!-- Moment Js -->
  <script src="./resources/build/moment.js"></script>
  <!-- Custom Js -->
  <script src="./resources/build/main.js"></script>

</body>

</html>
