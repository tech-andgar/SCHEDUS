<div class="modal fade" id="modalPerfil" tabindex="-1" role="dialog" aria-hidden="true">
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
                    <form method="POST" action="<?php echo APP_URL . 'Usuario/updateDataUser';?>" class="form-signin form-modal">
						<div class="container-fluid">
							<div class="row pt-4">
								<div class="col-lg-4  col-12 ">
									<h5>Número de Documento</h5>
								</div>
								<div class="col-lg-8 col-12">
									<input type="number" class="form-control" name="dni" placeholder="Documento"  min="1" max="999999999999999" value="<?php echo $_SESSION['user']->dni;?>" readonly >
									<small id="" class="text-muted">Escriba Número de Documento del usuario
									</small>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-4  col-12 ">
									<h5>Nombre</h5>
								</div>
								<div class="col-lg-8 col-12">
									<input type="text" class="form-control" name="txt_upd_nombre_usuario" placeholder="Nombre" value="<?php echo $_SESSION['user']->nombre;?>" required />
									<small id="" class="text-muted">Escriba nombre del usuario
									</small>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-4  col-12 ">
									<h5>Apellido</h5>
								</div>
								<div class="col-lg-8 col-12">
									<input type="text" class="form-control" name="txt_upd_apellido_usuario" placeholder="Apellido" value="<?php echo $_SESSION['user']->apellido;?>" required />
									<small id="" class="text-muted">Escriba apellido del usuario
									</small>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-4  col-12 ">
									<h5>Correo</h5>
								</div>
								<div class="col-lg-8 col-12">
									<input type="email" class="form-control" name="txt_upd_email" placeholder="Correo" value="<?php echo $_SESSION['user']->email;?>" required />
									<small id="" class="text-muted">Escriba correo del usuario
									</small>
								</div>
							</div>
							<hr>
							<div class="text-center pt-2">
								<button class="btn-rounded" type="submit">Actualizar datos</button>
							</div>
						</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal change password -->
<div class="modal fade" id="modalChangePassword" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-center col-11 ">Cambiar contraseña</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="justify-content-center">
                    <form method="POST" action="<?php echo APP_URL . 'Usuario/changePassword';?>" class="form-signin form-modal">
						<div class="container-fluid">
							<div class="row pt-4">
								<div class="col-lg-4  col-12 ">
									<h5>Antigua contraseña</h5>
								</div>
								<div class="col-lg-8 col-12">
									<input type="password" class="form-control" name="txt_old_password" placeholder="Contraseña" required />
									<small id="" class="text-muted">Escriba antigua contraseña del usuario
									</small>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-4  col-12 ">
									<h5>Nueva contraseña</h5>
								</div>
								<div class="col-lg-8 col-12">
									<input type="password" class="form-control" name="txt_upd_password" placeholder="Contraseña" required />
									<small id="" class="text-muted">Escriba nueva contraseña del usuario
									</small>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-4  col-12 ">
									<h5>Confirmación contraseña</h5>
								</div>
								<div class="col-lg-8 col-12">
									<input type="password" class="form-control" name="txt_upd_password_confirm" placeholder="Confirmación contraseña"  required />
									<small id="" class="text-muted">Escriba confirmación nuevo contraseña del usuario
									</small>
								</div>
							</div>
							<hr>
							<div class="text-center pt-2">
								<button class="btn-rounded" type="submit">Actualizar contraseña</button>
							</div>
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
            <a class="nav-link dropdown-toggle nav-link mr-5" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-cog"></i><span class="d-md-down-none">
                    <?php echo $_SESSION['user']->name_rol;?> </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right text-center">
                <div class="dropdown-header">
                    <strong></strong>
				</div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalPerfil"><i class="fas fa-user"></i>Cuenta</a>
				<a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalChangePassword"><<i class="fas fa-key"></i>Cambiar Contraseña</a>
				<h6 class="dropdown-header"></h6>
                <a class="dropdown-item" href="<?php echo APP_URL?>security/logOut"><i class="fas fa-sign-in-alt"></i>Cerrar sesión</a>
            </div>
        </li>
    </ul>
</header>
<!-- END HEADER -->


<script>

function testAnim() {
    $('.modal .modal-dialog').attr('class', 'modal-dialog  fadeInDown  animated');
};

$('.modal').on('show.bs.modal', function (e) {
      testAnim();
})

$('.modal').on('hide.bs.modal', function (e) {
      testAnim();
})

</script>