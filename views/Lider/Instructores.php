<!-- Contenido Principal -->
<main class="main">
	<!-- Breadcrumb -->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">Inicio</li>
		<li class="breadcrumb-item"><a href="#">Lider</a></li>
		<li class="breadcrumb-item active">Instructor</li>
	</ol>
	<div class="container-fluid">
		<!-- Ejemplo de tabla Listado -->
		<div class="card">
			<div class="card-header">
				<i class="fa fa-align-justify"></i> Categorías
				<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalNuevo">
					<i class="icon-plus"></i>&nbsp;Nuevo
				</button>
			</div>
			<div class="card-body">
				<div class="form-group row">
					<div class="col-md-6">
						<div class="input-group">
							<select class="form-control col-md-3" id="opcion" name="opcion">
								<option value="nombre">Nombre</option>
								<option value="descripcion">Descripción</option>
							</select>
							<input type="text" id="texto" name="texto" class="form-control" placeholder="Texto a buscar">
							<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
						</div>
					</div>
				</div>
				<table class="table table-bordered table-striped table-sm">
					<thead>
						<tr>
							<th>Opciones</th>
							<th>Nombre</th>
							<th>Descripción</th>
							<th>Estado</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo">
									<i class="icon-pencil"></i>
								</button> &nbsp;
								<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar">
									<i class="icon-trash"></i>
								</button>
							</td>
							<td>Equipos</td>
							<td>Dispositivos electrónicos</td>
							<td>
								<span class="badge badge-success">Activo</span>
							</td>
						</tr>
						<tr>
							<td>
								<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo">
									<i class="icon-pencil"></i>
								</button> &nbsp;
								<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar">
									<i class="icon-trash"></i>
								</button>
							</td>
							<td>Equipos</td>
							<td>Dispositivos electrónicos</td>
							<td>
								<span class="badge badge-success">Activo</span>
							</td>
						</tr>
						<tr>
							<td>
								<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo">
									<i class="icon-pencil"></i>
								</button> &nbsp;
								<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar">
									<i class="icon-trash"></i>
								</button>
							</td>
							<td>Equipos</td>
							<td>Dispositivos electrónicos</td>
							<td>
								<span class="badge badge-secondary">Inactivo</span>
							</td>
						</tr>
						<tr>
							<td>
								<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo">
									<i class="icon-pencil"></i>
								</button> &nbsp;
								<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar">
									<i class="icon-trash"></i>
								</button>
							</td>
							<td>Equipos</td>
							<td>Dispositivos electrónicos</td>
							<td>
								<span class="badge badge-secondary">Inactivo</span>
							</td>
						</tr>
						<tr>
							<td>
								<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo">
									<i class="icon-pencil"></i>
								</button>&nbsp;
								<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar">
									<i class="icon-trash"></i>
								</button>
							</td>
							<td>Equipos</td>
							<td>Dispositivos electrónicos</td>
							<td>
								<span class="badge badge-success">Activo</span>
							</td>
						</tr>
					</tbody>
				</table>
				<nav>
					<ul class="pagination">
						<li class="page-item">
							<a class="page-link" href="#">Ant</a>
						</li>
						<li class="page-item active">
							<a class="page-link" href="#">1</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">2</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">3</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">4</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">Sig</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- Fin ejemplo de tabla Listado -->
	</div>
	<!--Inicio del modal agregar/actualizar-->
	<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;"
	 aria-hidden="true">
		<div class="modal-dialog modal-primary modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Agregar categoría</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
						<div class="form-group row">
							<label class="col-md-3 form-control-label" for="text-input">Nombre</label>
							<div class="col-md-9">
								<input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre de categoría">
								<span class="help-block">(*) Ingrese el nombre de la categoría</span>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-3 form-control-label" for="email-input">Descripción</label>
							<div class="col-md-9">
								<input type="email" id="descripcion" name="descripcion" class="form-control" placeholder="Enter Email">
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<button type="button" class="btn btn-primary">Guardar</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!--Fin del modal-->
	<!-- Inicio del modal Eliminar -->
	<div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;"
	 aria-hidden="true">
		<div class="modal-dialog modal-danger" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Eliminar Categoría</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Estas seguro de eliminar la categoría?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<button type="button" class="btn btn-danger">Eliminar</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- Fin del modal Eliminar -->
</main>
<!-- /Fin del contenido principal -->
</div>

<!-- 

<div class="col-lg-9 col-md-12 col-12">
	<div class="row justify-content-center text-center">
		<div class="col-md-12">
			<br>
			<h4 class=" mb-1">Asignar Horarios</h4>
			<hr>
			<h4>Instructor :
				<select id="tipos" name="tipos" onchange="tipo(this.value);" class="adsi-css" required style="width: 31%;">
					<option value="">Seleccione un Intructor</option>
					<option value="tab">SANDRA MILENA PEÑARANDA SALAZAR</option>
					<option value="tab">DANIEL MORA DIAZ</option>
					<option value="tab">YULIETT CONSUELO PULIDO MONCADA</option>
				</select>
			</h4>
			<div class="mx-auto" id="tab" style="display: none;">
				<table class="table table-responsive table-hover table-condensed" id="tabla_horario">
					<thead>
						<tr class="success">
							<th class="col-sm-1 text-center">Hora</th>
							<th class="text-center">Lunes</th>
							<th class="text-center">Martes</th>
							<th class="text-center">Miercoles</th>
							<th class="text-center">Jueves</th>
							<th class="text-center">Viernes</th>
							<th class="text-center">Sabado</th>
							<th class="text-center">Domingo</th>
						</tr>
					</thead>
					<tbody class="text-center">
						<tr>
							<td class="">6:00 a 10:00</td>
							<td>
								<div class="control-group ">
								</div>
							</td>
							<td>
								<div class="control-group">
								</div>
							</td>
							<td>
								<div class="control-group ">
								</div>
							</td>
							<td>
								<div class="control-group">
								</div>
							</td>
							<td>
								<div class="control-group">
								</div>
							</td>
							<td>
								<div class="control-group">
								</div>
							</td>
							<td>
								<div class="control-group">
								</div>
							</td>
						</tr>
						<tr>
							<td class="">10:00 a 14:00</td>
							<td>
								<div class="control-group ">
								</div>
							</td>
							<td>
								<div class="control-group">
								</div>
							</td>
							<td>
								<div class="control-group ">
								</div>
							</td>
							<td>
								<div class="control-group">
								</div>
							</td>
							<td>
								<div class="control-group">
								</div>
							</td>
							<td>
								<div class="control-group">
								</div>
							</td>
							<td>
								<div class="control-group">
								</div>
							</td>
						</tr>
						<tr>
							<td class="">14:00 a 18:00</td>
							<td>
								<div class="control-group ">
								</div>
							</td>
							<td>
								<div class="control-group">
								</div>
							</td>
							<td>
								<div class="control-group ">
								</div>
							</td>
							<td>
								<div class="control-group">
								</div>
							</td>
							<td>
								<div class="control-group">
								</div>
							</td>
							<td>
								<div class="control-group">
								</div>
							</td>
							<td>
								<div class="control-group">
								</div>
							</td>
						</tr>
						<tr>
							<td class="">22:00 a 6:00</td>
							<td>
								<div class="control-group ">
								</div>
							</td>
							<td>
								<div class="control-group">
								</div>
							</td>
							<td>
								<div class="control-group ">
								</div>
							</td>
							<td>
								<div class="control-group">
								</div>
							</td>
							<td>
								<div class="control-group">
								</div>
							</td>
							<td>
								<div class="control-group">
								</div>
							</td>
							<td>
								<div class="control-group">
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="m-3">
</div>
</div>
</div> -->