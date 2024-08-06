<div class="container mt-5">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Usuario</th>
      <th scope="col">Email</th>
      <th scope="col">Baja</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <?php foreach($datos as $key): ?>
    <tbody>
    <tr>
      <td><?php echo $key->id_usuario ?></td>
      <td><?php echo $key->nombre ?></td>
      <td><?php echo $key->apellido ?></td>
      <td><?php echo $key->usuario?></td>
      <td><?php echo $key->email?></td>
      <td><?php echo $key->baja?></td>
      <td>
        <a href="<?php echo base_url().'obtenerUsuario/'.$key->id_usuario ?>" class="btn btn-warning btn-sm" >Editar</a>
        <a href="<?php echo base_url().'eliminarUsuario/'.$key->id_usuario ?>" class="btn btn-danger btn-sm" >Eliminar</a>
      </td>
    </tr>
  </tbody>
  <?php endforeach; ?>
  
</table>
</div>