<?php

use Leaf\Flash;

$errors = (array) Flash::display('errors') ?: [];

?>

<?php if ($errors) : ?>
  <script>
    <?php foreach ($errors as $error) : ?>
      alert('<?= $error ?>');
    <?php endforeach ?>
  </script>
<?php endif ?>
