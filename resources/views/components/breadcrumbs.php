<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
  <h3><?= $title ?? '' ?></h3>
  <ul>
    <li>
      <a href="./">Inicio</a>
    </li>
    <?php foreach ($breadcrumbs ?? [] as $breadcrumb) : ?>
      <li><?= $breadcrumb ?></li>
    <?php endforeach ?>
  </ul>
</div>
<!-- Breadcubs Area End Here -->
