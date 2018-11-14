<!-- MODAL -->
<div class="modal fade" id="Perfil" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="col-11 modal-title text-center">Perfil</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-center text-center">
                    <form method="POST" action="../controlador/validar.php" class="form-signin">
                        <table>
                            <tr>
                                <td>
                                    <h5>Numero de Documento</h5>
                                </td>
                                <td><input type="number" class="adsi-css" name="Documento" placeholder="Documento"
                                        readonly /></td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Nombre</h5>
                                </td>
                                <td><input type="text" class="adsi-css" name="text" placeholder="Nombre" required /></td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Correo</h5>
                                </td>
                                <td><input type="email" class="adsi-css" name="email" placeholder="Correo" required /></td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Contraseña</h5>
                                </td>
                                <td><input type="password" class="adsi-css" name="password" placeholder="Contraseña"
                                        required /></td>
                            </tr>
                        </table>
                        <div class="modal-body">
                            <button class="btn-rounded" type="submit" style="width:180px">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MODAL -->
<!-- HEADER -->
<header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="./assets/images/logoSena.png" width="89" height="25" alt="CoreUI Logo">
        <img class="navbar-brand-minimized" src="./assets/images/Senalogo1.png" width="30" height="30" alt="CoreUI Logo">
    </a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle nav-link mr-5" data-toggle="dropdown" href="#" role="button"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-home"></i><span class="d-md-down-none"> Coordinador </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right text-center">
                <div class="dropdown-header">
                    <strong><i class="fas fa-cog"></i></strong>
                </div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#Perfil"><i class="fas fa-home"></i>Cuenta</a>
                <a class="dropdown-item" href="?c=security&m=logOut"><i class="fas fa-sign-in-alt"></i>Cerrar sesión</a>
            </div>
        </li>
    </ul>
</header>
<!-- END HEADER -->
