<!doctype html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <base href="<?= str_replace('index.php', '', $_SERVER['SCRIPT_NAME']) ?>" />
  <link rel="stylesheet" href="./resources/build/bootstrap.css" />
</head>

<body>
  <?= $page ?>

  <?php Flight::render('components/toasts') ?>
</body>

</html>
