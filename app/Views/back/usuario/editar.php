
<?php
    $idUsuario = $datos[0]['id_usuario'];
    $nombre = $datos[0]['nombre'];
    $apellido = $datos[0]['apellido'];
    $usuario = $datos[0]['usuario'];
    $email = $datos[0]['email'];
    $baja = $datos[0]['baja'];
    ?>



<div class="container mt-0 mb-0">
    <div class="card-header text-justify">
        <div class="row d-flex justify-content-center">
            <div class="card col-lg-3" style="width: 50%;">
                <h4>Editar Usuario</h4>

                <!-- Inicio del formulario de editar usuarios -->
                <form method="post" action="<?php echo base_url().'/editarUsuario' ?>">

                <input type="text" name="id_usuario" id="id_usuario" hidden="" value=" <?php echo $idUsuario ?>">

                    <div class="card-body" media="(max-width:768px)">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" value=" <?php echo $nombre ?>">
                    </div>

                    <div class="card-body" media="(max-width:768px)">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" name="apellido" id="apellido" value=" <?php echo $apellido ?>">
                    </div>
                    
                    <div class="card-body" media="(max-width:768px)">
                        <label for="usuario" class="form-label">Usuario</label>
                        <input type="text" class="form-control" name="usuario" id="usuario" value=" <?php echo $usuario ?>">
                    </div>
                
                    <div class="card-body" media="(max-width:768px)">
                        <label for="email" class="form-label">Correo</label>
                        <input type="text" class="form-control" id='email' name="email" value=" <?php echo $email ?>">
                    </div>

                    <div class="card-body" media="(max-width:768px)">
                        <label for="baja" class="form-label">Baja</label>
                        <input type="text" class="form-control" name="baja" id="baja" value=" <?php echo $baja ?>">
                    </div>
                    
                    <input type="submit" class="btn btn-success" value="Actualizar">
                    <a href="<?php echo base_url('/'); ?>" class="btn btn-danger">Cancelar</a>
            </div>
            </form>
        </div>
    </div>

</div>
<!-- Fin del formulario de edditar usuarios -->