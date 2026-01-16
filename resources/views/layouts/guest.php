<?php

use Leaf\Flash;

$errors = (array) Flash::display('errors') ?: [];

?>

<!doctype html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <meta name="color-scheme" content="light dark" />
</head>

<body>
  <?= $page ?>

  <?php if ($errors) : ?>
    <script>
      <?php foreach ($errors as $error) : ?>
        alert('<?= $error ?>');
      <?php endforeach ?>
    </script>
  <?php endif ?>
</body>

</html>
