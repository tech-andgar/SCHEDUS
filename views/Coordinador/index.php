<!-- Contenido Principal -->
<main class="main">
	<!-- Breadcrumb -->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">Inicio</li>
		<li class="breadcrumb-item"><a href="?c=lider">Coordinador</a></li>
		<li class="breadcrumb-item active">Escritorio</li>
	</ol>
	<div class="container-fluid">
		<!-- Ejemplo de tabla Listado -->
		<div class="card">
			<div class="card-body">

				<div class="row justify-content-center text-center">
					<div class="col-md-12">
						<h2 class="text-center"> BIENVENIDO COORDINADOR</h2>
					</div>
					<div class="col-md-12">
						<img src="././assets/images/avatar-default-icon.png" width="300rem" >
					</div>
					<div class="col-md-12">
						<h2 class="text-center"> <?php echo $_SESSION['user']->nombre . ' '. $_SESSION['user']->apellido;?> </h2>
					</div>
				</div>

			</div>
		</div>
		<!-- Fin ejemplo de tabla Listado -->
	</div>
</main>
<!-- /Fin del contenido principal -->
</div>
