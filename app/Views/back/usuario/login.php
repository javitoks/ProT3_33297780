<div class="container mt-0 mb-0">
  <div class="card-header text-justify">
    <div class="row d-flex justify-content-center">
      <div class="card col-lg-3" style="width: 50%;">
        <h4>Inicio de Sesión</h4>

        <!-- MENSAJE DE ERROR -->
        <?php if (session()->getFlashdata('msg')) : ?>
          <div class="alert alert-warning">
            <?= session()->getFlashdata('msg') ?>
          </div>
        <?php endif; ?>

        <!-- Inicio del formulario de login -->
        <form method="post" action="<?php echo base_url('/enviarlogin') ?>">
          <div class="card-body" media="(max-width:768px)">
            <label for="exampleFormControlInput1" class="form-label">Correo</label>
            <input type="text" class="form-control" placeholder="correo" name="email">
          </div>
          <div class="card-body">
            <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input type="password" class="form-control" placeholder="contraseña" name="pass">
          </div>
          <input type="submit" class="btn btn-success" value="Ingresar">
          <a href="<?php echo base_url('/'); ?>" class="btn btn-danger">Cancelar</a>
          <br> <span> ¿Aun no se registro? <a href="<?php echo base_url('/registro'); ?>">Registrarse aqui</a>
      </div>
      </form>
    </div>
  </div>

</div> 
  <!-- Fin del formulario de login -->