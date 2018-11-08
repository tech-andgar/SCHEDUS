<header class="app-header navbar">
        <a class="navbar-brand" href="?c=Inicio"></a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle nav-link mr-5" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-home"></i><span class="d-md-down-none"> Inicio </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right text-center">
                    <div class="dropdown-header">
                        <strong><i class="fas fa-cog"></i></strong>
                    </div>
                    <a  class="dropdown-item" href="?c=Inicio"><i class="fas fa-home"></i> Inicio</a>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-sign-in-alt"></i> Iniciar sesión</a>
                </div>
            </li>
        </ul>
    </header>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="col-11 modal-title text-center">Iniciar sesion</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-center text-center">
                    <form method="post" action="?c=Inicio&m=ValidarUsuario" class="form-signin">
                        <h5>Numero de Documento</h5>
                        <input type="number" class="adsi-css my-3" style="width:80%; height:30px" name="dni"
                            placeholder="Documento" required />
                        <h5>Contraseña</h5>
                        <input type="password" class="adsi-css mb-3" style="width:80%; height:30px" name="password"
                            placeholder="Contraseña" required>
                        <button class="btn-rounded" type="submit">Ingresar</button>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-center text-center">
                    <a href="index.php?c=inicio&m=RecuperarContrasena" class="forgot-password">
                        ¿Olvidó la contraseña?
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MODAL -->
<div class="app-body">