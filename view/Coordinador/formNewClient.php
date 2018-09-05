<?php?>
<head>
<title>Registro nuevo cliente - Ambolando Mubeles</title>
</head>
<body>
<div class="container" style="padding-top: 100px;">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <h5 class="card-header">Registro nuevo cliente</h5>
        <div class="card-body">
          <form action="index.php?c=cliente&m=CreateClient" method="post"> 			  
            <div class="form-group">
              <label for="inputNombre" class="col-sm-2 col-form-label">Nombre</label>
              <div class="col-sm-10">
                <input name="nombre" type="text" class="form-control" id="inputNombre" placeholder="Nombre de cliente">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="col-sm-2 col-form-label">Apellido</label>
              <div class="col-sm-10">
                <input name="apellido" type="text" class="form-control" id="inputApellido" placeholder="Apellido de cliente">
              </div>
            </div>
            <div class="form-group">
              <label for="inputCorreo" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input name="correo" type="email" class="form-control" id="inputCorreo" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="col-sm-2 col-form-label">Contraseña</label>
              <div class="col-sm-10">
                <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Contraseña">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-success">Crear cuenta</button>
                <a class="btn btn-danger" href="index.php">Cancelar</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
