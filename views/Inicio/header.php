<header class="app-header navbar">
    <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="<?php echo APP_URL?>assets/images/Logo_SCHEDUS.svg" width="200" height="50" alt="LOGO SENA - SCHEDUS">
        <img class="navbar-brand-minimized" src="<?php echo APP_URL?>assets/images/Sena_Colombia_logo.svg" width="100" height="100" alt="LOGO SENA">
    </a>
    <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
        <li class="dropdown order-1">
            <a class="nav-link dropdown-toggle nav-link mr-3 " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-sign-in-alt"></i> Login <span class="caret"></span></a>
            <ul class="dropdown-menu dropdown-menu-right mt-2">
                <li class="p-4" style="width: 320px;">
                    <div class="d-flex justify-content-center text-center">
                        <form method="post" action="<?php echo APP_URL ?>Inicio/validarUsuario"class="form-signin form-modal">
                            <div class="container-fluid">
                                    <div class="row pt-2">
                                            <div class="col-12">
                                                <h4>Login</h4>
                                            </div>
                                        </div>
                                <div class="row pt-4">
                                    <div class="col-lg-4  col-12 ">
                                        <h6>Documento</h6>
                                    </div>
                                    <div class="col-lg-8 col-12">
                                        <input type="number" class="form-control" name="dni" placeholder="Documento"
                                            required>
                                    </div>
                                </div>
                                <div class="row pt-4">
                                    <div class="col-lg-4  col-12 ">
                                        <h6>Contraseña</h6>
                                    </div>
                                    <div class="col-lg-8 col-12">
                                        <input type="password" class="form-control" name="password" placeholder="Contraseña"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center pt-5">
                                <button class="btn-rounded" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                    <hr>
                    <div class="text-center pt-2">
                    <a href="#" data-toggle="modal" data-target="#RecuperarContrasena" class="forgot-password">
                        ¿Olvidó la contraseña?
                    </a></div>
                </li>
            </ul>
        </li>
    </ul>
</header>

<!-- Modal -->
<div class="modal fade" id="RecuperarContrasena" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="col-11 modal-title text-center">Recuperar contraseña</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-center text-center">
                    <form method="POST" action="?c=inicio&m=sendMailRecoveryPassword"class="form-signin form-modal">
                        <div class="container-fluid">
                            <div class="row pt-4">
                                <div class="col-lg-4  col-12 ">
                                    <h4>Correo electronico</h4>
                                    <small id="" class="text-muted">Escriba Correo Electronico
                                    </small>
                                </div>
                                <div class="col-lg-8 col-12">
                                    <input type="email" class="form-control" name="emailRecovery" placeholder="ejemplo@e-mail.com"
                                        required />
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="text-center pt-2">
                            <button class="btn-rounded" type="submit">Recuperar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- END MODAL -->
<div class="app-body">