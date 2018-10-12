<!-- NAVBAR -->
<nav class="navbar sticky-top navbar-expand-lg navbar-light" style="background-color:#EC7C38;">
  <div class="container">
    <h1>
      <a class="navbar-brand" href="#">
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
          <a class="btn btn-outline-light my-2 my-sm-0" href="index.php">Inicio</a>
        </li>
      </ul>
      <ul class="nav navbar-nav ml-auto">
        <li>
          <a class="btn btn-outline-light my-2 my-sm-0" href="#" data-toggle="modal" data-target="#exampleModalCenter">Iniciar
            sesion</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- END NAVBAR -->

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
            <input type="number" class="adsi-css my-3" style="width:80%; height:30px" name="dni" placeholder="Documento"
              required />
            <h5>Contraseña</h5>
            <input type="password" class="adsi-css mb-3" style="width:80%; height:30px" name="password" placeholder="Contraseña"
              required>
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

<!-- END HEADER -->