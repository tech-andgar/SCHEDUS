<!-- NAVBAR -->
<nav class="navbar sticky-top navbar-expand-lg navbar-light" style="background-color:#EC7C38;">
    <div class="container">
        <h1>
            <a class="navbar-brand" href="?c=instructor">
                SCHEDUS
            </a>
        </h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse col-12 col-md-10" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="btn btn-outline-light my-2 my-sm-0" href="index.php?c=instructor">Diponibilidad</a>
                </li>
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <li>
                    <a class="btn btn-outline-light my-2 mr-3  my-sm-0" href="#" data-toggle="modal" data-target="#Perfil">Instructor</a>
                </li>
                <li>
                    <a class="btn btn-outline-light my-2 my-sm-0" href="?c=security&m=logOut">Cerrar sesion</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END NAVBAR -->

<!-- Modal -->
<div class="modal fade" id="Perfil" tabindex="-1" role="dialog" aria-labelledby="Perfil" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="modal-title text-center" >Perfil</h3>
                </div>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-center text-center">
                    <form method="post" action="#" class="form-signin">
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
                        <hr>
                        <div class="modal-body">
                            <button class="btn-rounded" type="submit" style="width:180px">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->