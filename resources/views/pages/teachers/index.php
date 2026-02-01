<?php

use Leaf\Auth\User;

 Flight::render('components/breadcrumbs', [
  'breadcrumbs' => ['Todos los docentes'],
  'title' => 'Docentes',
]) ?>

<!-- Teacher Table Area Start Here -->
<div class="card height-auto">
  <div class="card-body">
    <div class="heading-layout1">
      <div class="item-title">
        <h3>Datos de Todos los Docentes</h3>
      </div>
      <!-- <div class="dropdown">
        <a class="dropdown-toggle" href="#" data-toggle="dropdown">...</a>

        <div class="dropdown-menu dropdown-menu-right">
          <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
          <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
          <a class="dropdown-item" href="#">
            <i class="fas fa-redo-alt text-orange-peel"></i>
            Refresh
          </a>
        </div>
      </div> -->
    </div>
    <form class="mg-b-20">
      <div class="row gutters-8">
        <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
          <input type="search" placeholder="Buscar por ID ..." class="form-control" />
        </div>
        <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
          <input type="search" placeholder="Buscar por Nombre ..." class="form-control" />
        </div>
        <!-- <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
          <input type="search" placeholder="Buscar por Teléfono ..." class="form-control" />
        </div> -->
        <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
          <button type="submit" class="fw-btn-fill btn-gradient-yellow">BUSCAR</button>
        </div>
      </div>
    </form>
    <div class="table-responsive">
      <table class="table display data-table text-nowrap">
        <thead>
          <tr>
            <th>
              <!-- <div class="form-check">
                <input type="checkbox" class="form-check-input checkAll" />
                <label class="form-check-label"> -->ID<!-- </label>
              </div> -->
            </th>
            <th>Foto</th>
            <th>Nombre</th>
            <!-- <th>Género</th> -->
            <!-- <th>Clase</th> -->
            <!-- <th>Eje</th> -->
            <!-- <th>Sección</th> -->
            <!-- <th>Dirección</th> -->
            <!-- <th>Teléfono</th> -->
            <th>Correo</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($teachers as $teacher) : ?>
            <?php if (!$teacher instanceof User) continue ?>
            <tr>
              <td>
                <!-- <div class="form-check">
                  <input type="checkbox" class="form-check-input">
                  <label class="form-check-label"> -->
                    #<?= str_pad($teacher->id(), 4, 0, STR_PAD_LEFT) ?>
                  <!-- </label>
                </div> -->
              </td>
              <td class="text-center">
                <img src="<?= $teacher->avatar_url ?>" width="30" />
              </td>
              <td>
                <?= "$teacher->first_name $teacher->second_name $teacher->first_last_name $teacher->second_last_name" ?>
              </td>
              <!-- <td>Male</td> -->
              <!-- <td>2</td> -->
              <!-- <td>English</td> -->
              <!-- <td>A</td> -->
              <!-- <td>TA-107 Newyork</td> -->
              <!-- <td>+ 123 9988568</td> -->
              <td><?= $teacher->email ?></td>
              <td>
                <div class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="flaticon-more-button-of-three-dots"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <!-- <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a> -->
                    <a class="dropdown-item" href="./teachers/<?= $teacher->id() ?>/edit">
                      <i class="fas fa-cogs text-dark-pastel-green"></i>
                      Editar
                    </a>
                    <!-- <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a> -->
                  </div>
                </div>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- Teacher Table Area End Here -->
