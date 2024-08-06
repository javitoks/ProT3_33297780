<!-- Navbar -->
<?php
$session = session();
$nombre = $session->get('nombre');
$perfil = $session->get('perfil_id');
?>

<nav class="navbar navbar-expand-lg bg-body-green">
    <div class="container-fluid">
        <a class="navbar-brand me-auto barra" href="principal">
            <img src="assets/img/limon.png" width="30" height="30" class="d-inline-block align-top" alt="Logotipo" />
            Limones "Don Tani"
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="quienes_somos">¿Quienes somos?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="acerca_de">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactanos">Contactanos</a>
                </li>

                <!-- MENU PARA LOGUEADOS COMO ADMIN -->
                <?php if (session()->perfil_id == 1) : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <?php echo session('nombre'); ?> (ADMIN)</a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo base_url('/crearUsuario'); ?>">Crear Nuevo Usuario</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('/listado'); ?>">Listar Usuarios</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('/logout'); ?>">Cerrar Sesión</a></li>
                        </ul>
                    </li>


                    <!-- MENU PARA LOGUEADOS COMO CLIENTE -->
                <?php elseif (session()->perfil_id == 2) : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo session('nombre') ?> (CLIENTE)</a>
                        <ul class="dropdown-menu">
                            
                        <li><a class="dropdown-item" href="<?php echo base_url('/logout'); ?>">Cerrar Sesión</a></li>
                        </ul>
                    </li>
                <?php else : ?>
                    <!-- MENU PARA NO LOGUEADOS -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Ingresar</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="login">Login</a></li>
                            <li><a class="dropdown-item" href="registro">¿No estás registrado?</a></li>
                        </ul>
                    </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Ingrese su búsqueda" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        <?php endif; ?>
        </div>
    </div>
</nav>