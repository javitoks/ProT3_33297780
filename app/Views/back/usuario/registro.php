<div class="container mt-0 mb-0">
  <div class="card-header text-justify">
    <div class="row d-flex justify-content-center">
      <div class="card col-lg-3" style="width: 50%;">
        <h4>Registrarse</h4>

        <?php $validation = \Config\Services::validation(); ?>

        <form method="post" action="<?php echo base_url('/enviar_form') ?>">
          <?= csrf_field(); ?>
          <?= csrf_field(); ?>
          <?php if (!empty(session()->getFlashdata('fail'))) : ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
          <?php endif ?>
          <?php if (!empty(session()->getFlashdata('success'))) : ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('success'); ?></div>
          <?php endif ?>
          <div class="card-body justify-content-center" media="(max-width:768px)">
            <div class="form">
              <label for="exampleFormControlInput1" class="form-label">Nombre</label>
              <input name="nombre" type="text" class="form-control" placeholder="Ingrese su nombre">
              <?php if ($validation->getError('nombre')) { ?>
                <div class="alert alert-danger mt-2">
                  <?= $error = $validation->getError('nombre'); ?>
                </div>
              <?php } ?>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Apellido</label>
              <input type="text" name="apellido" class="form-control" placeholder="Ingrese su apellido">
              <?php if ($validation->getError('apellido')) { ?>
                <div class="alert alert-danger mt-2">
                  <?= $error = $validation->getError('apellido'); ?>
                </div>
              <?php } ?>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Email</label>
              <input type="femail" name="email" class="form-control" placeholder="correo@algo.com.ar">
              <?php if ($validation->getError('email')) { ?>
                <div class="alert alert-danger mt-2">
                  <?= $error = $validation->getError('email'); ?>
                </div>
              <?php } ?>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Usuario</label>
              <input type="text" name="usuario" class="form-control" placeholder="Elija su usuario">
              <?php if ($validation->getError('usuario')) { ?>
                <div class="alert alert-danger mt-2">
                  <?= $error = $validation->getError('usuario'); ?>
                </div>
              <?php } ?>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Password</label>
              <input type="password" name="pass" class="form-control" placeholder="Escriba su password (minimo 3 y maximo 10 caracteres)">
              <?php if ($validation->getError('pass')) { ?>
                <div class="alert alert-danger mt-2">
                  <?= $error = $validation->getError('pass'); ?>
                </div>
              <?php } ?>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Confirmar Password</label>
              <input type="password" name="confirmar_pass" class="form-control" placeholder="Vuelva a escribir su password">
              <?php if ($validation->getError('confirmar_pass')) { ?>
                <div class="alert alert-danger mt-2">
                  <?= $error = $validation->getError('confirmar_pass'); ?>
                </div>
              <?php } ?>

            </div>
            <input type="submit" value="Registrarse" class="btn btn-success">
            <input type="reset" value="Cancelar" class="btn btn-danger">
          </div>
        </form>

      </div>
    </div>
  </div>
</div>