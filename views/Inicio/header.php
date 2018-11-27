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
                        <form method="post" action="<?php echo APP_URL ?>Inicio/validarUsuario" class="form-signin">
                            <div class="form-group">
                                <h6>Documento</h6>
                                <input type="number" class="adsi-css my-3" name="dni" placeholder="Documento" required>
                            </div>
                            <div class="form-group">
                                <h6>Contraseña</h6>
                                <input type="password" class="adsi-css mb-3" name="password" placeholder="Contraseña" required>
                            </div>
                            <div class="form-group">
                                <button class="btn-rounded" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#modalRecuperarContrasena">¿Olvidó la contraseña?</a>
                </li>
            </ul>
        </li>
    </ul>
</header>

<!-- Modal -->
<div class="modal fade" id="modalRecuperarContrasena" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="col-11 modal-title text-center">Recuperar contraseña</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-center text-center">
                    <form method="POST" action="?c=inicio&m=sendMailRecoveryPassword" class="form-signin">
                        <div class="form-group">
                            <h5>Correo electronico</h5>
                            <input type="email" class="form-control adsi-css" name="emailRecovery" placeholder="ejemplo@e-mail.com" required/>
                        </div>
                        <div class="form-group">
                            <button class="btn-rounded" type="submit">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- END MODAL -->
<div class="app-body">