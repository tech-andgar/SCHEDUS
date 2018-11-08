<!-- NAVBAR -->
<header class="app-header navbar">
    <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
        <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle nav-link mr-5" data-toggle="dropdown" href="#" role="button"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-home"></i><span class="d-md-down-none"> Lider </span>
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
<div class="app-body">
    <div class="sidebar">
        <nav class="sidebar-nav">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="main.html"><i class="icon-speedometer"></i> Escritorio</a>
                </li>
                <li class="nav-title">
                    Mantenimiento
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-bag"></i> Almacén</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="icon-bag"></i> Categorías</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="icon-bag"></i> Artículos</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-wallet"></i> Compras</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="i#"><i class="icon-wallet"></i> Ingresos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="icon-notebook"></i> Proveedores</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-basket"></i> Ventas</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="i#"><i class="icon-basket-loaded"></i> Ventas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="icon-notebook"></i> Clientes</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-people"></i> Acceso</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="i#"><i class="icon-user"></i> Usuarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="icon-user-following"></i> Roles</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-pie-chart"></i> Reportes</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="i#"><i class="icon-chart"></i> Reporte Ingresos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="icon-chart"></i> Reporte Ventas</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="main.html"><i class="icon-book-open"></i> Ayuda <span class="badge badge-danger">PDF</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="main.html"><i class="icon-info"></i> Acerca de...<span class="badge badge-info">IT</span></a>
                </li>
            </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>

    <!-- END NAVBAR -->

    <!-- END HEADER -->

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