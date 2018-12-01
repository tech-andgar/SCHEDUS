<div class="modal fade" id="Perfil" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-center col-11 ">Perfil</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="justify-content-center">
                    <form method="POST" action="../controlador/validar.php" class="form-signin">
                        <div class="container-fluid">
                            <div class="row pt-2">
                                <div class="col-lg-4 offset-lg-2 col-6 offset-md-1">
                                    <h5>Numero de Documento</h5>
                                </div>
                                <div class="col-lg-5 col-12">
                                    <input type="number" class="form-control" name="Documento" placeholder="Documento"
                                        readonly />
                                </div>
                            </div>
                            <div class="row pt-2">
                                <div class="col-lg-4 offset-lg-2 col-6 offset-md-1">
                                    <h5>Nombre</h5>
                                </div>
                                <div class="col-lg-5 col-12">
                                    <input type="text" class="form-control" name="text" placeholder="Nombre" required />
                                </div>
                            </div>
                            <div class="row pt-2">
                                <div class="col-lg-4 offset-lg-2 col-6 offset-md-1">
                                    <h5>Correo</h5>
                                </div>
                                <div class="col-lg-5 col-12">
                                    <input type="email" class="form-control" name="email" placeholder="Correo" required />
                                </div>
                            </div>
                            <div class="row  pt-2">
                                <div class="col-lg-4 offset-lg-2 col-6 offset-md-1">
                                    <h5>Contraseña</h5>
                                </div>
                                <div class="col-lg-5 col-12">
                                    <input type="password" class="form-control" name="password" placeholder="Contraseña"
                                        required />
                                </div>
                            </div>
                        </div>
                        <div class="modal-body text-center">
                            <button class="btn-rounded" type="submit">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- HEADER -->
<header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="<?php echo APP_URL?>assets/images/Logo_SCHEDUS.svg" width="200" height="50" alt="LOGO SENA - SCHEDUS">
        <img class="navbar-brand-minimized" src="<?php echo APP_URL?>assets/images/Sena_Colombia_logo.svg" width="100%" height="100%" alt="LOGO SENA">
    </a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle nav-link mr-5" data-toggle="dropdown" href="#" role="button"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-home"></i><span class="d-md-down-none">
                    <?php echo $_SESSION['user']->name_rol;?> </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right text-center">
                <div class="dropdown-header">
                    <strong><i class="fas fa-cog"></i></strong>
                </div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#Perfil"><i class="fas fa-home"></i>Cuenta</a>
                <a class="dropdown-item" href="<?php echo APP_URL?>security/logOut"><i class="fas fa-sign-in-alt"></i>Cerrar
                    sesión</a>
            </div>
        </li>
    </ul>
</header>
<!-- END HEADER -->