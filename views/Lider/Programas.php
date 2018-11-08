<!-- Contenido Principal -->
<main class="main">
	<!-- Breadcrumb -->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">Inicio</li>
		<li class="breadcrumb-item"><a href="#">Lider</a></li>
		<li class="breadcrumb-item active">Programas</li>
	</ol>
	<div class="container-fluid">
		<!-- Ejemplo de tabla Listado -->
		<div class="card">
			<div class="card-header ">
				<i class="fa fa-align-justify"></i> Administrar Programas de Formacion
				<button type="button" class="btn btn-secondary " data-toggle="modal" data-target="#modalNuevo">
					<i class="icon-plus "></i>&nbsp;Nuevo
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

<div class="col-lg-9 col-md-12 col-12">
	<div class="row justify-content-center ">
		<div class="col-md-12">
			<br>
			<h4 class="text-center mb-1">Administrar programas de formación</h4>
			<hr>
			<div class="row d-flex justify-content-center">
			<div class="table-responsive">
				<table class="table table-hover" id="tableInstructores">
					<thead>
						<tr class="success">
							<th class="">Codigo</th>
							<th class="">Programa</th>
							<th class="">Estado</th>
							<th class="text-center">Actualizar</th>
						</tr>
					</thead>
					<tbody class="">
						<tbody class="">
						<?php
						foreach ($data['data'] as $user) {
    				?>
						<tr>
							<td class="">
								<?php echo $user->nombre . " " . $user->apellido; ?>
							</td>
							<td class="text-center" style="padding-bottom: 0px;padding-top: 10px;">
								<button type"button" id-programa="<?php echo $user->id_usuario; ?>" id-state="<?php echo $user->id_estado_usuario ?>"
								name-state="<?php echo $user->name_estado_usuario ?>" class="statusChange btn  <?php if ($user->name_estado_usuario == 'Activo') {echo "
								btn-success";} else {echo "btn-danger" ;}?>">
									<?php echo $user->name_estado_usuario ?>
								</button>
							</td>
							<td class="text-center">
								<div class="updateDataPrograma" data-toggle="modal" data-target="#Actualizar_Prms" id-programa="<?php echo $user->id_usuario; ?>">
									<i class="far fa-edit fa-lg"></i>
								</div>
							</td>
						</tr>
						<?php
						}
					?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>

<script>
$(document).ready(function() {

	$("#tableProgramas").DataTable({
		"language":{
			"sProcessing":     "Procesando...",
			"sLengthMenu":     "Mostrar _MENU_ registros",
			"sZeroRecords":    "No se encontraron resultados",
			"sEmptyTable":     "Ningún dato disponible en esta tabla",
			"sInfo":           "Registros del _START_ al _END_ de un total de _TOTAL_ registros",
			"sInfoEmpty":      "Registros del 0 al 0 de un total de 0 registros",
			"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
			"sInfoPostFix":    "",
			"sSearch":         "Buscar:",
			"sUrl":            "",
			"sInfoThousands":  ",",
			"sLoadingRecords": "Cargando...",
			"oPaginate": {
						"sFirst":    "Primero",
						"sLast":     "Último",
						"sNext":     "Siguiente",
						"sPrevious": "Anterior"
			},
			"oAria": {
						"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
						"sSortDescending": ": Activar para ordenar la columna de manera descendente"
			}
		},"dom": // Insertar objeto tabla por formato:
			// Encabezado de la tabla -- l->Num registros por pagina, f-> barra de filtro
			"<'row'<'col-sm-6'f><'col-sm-6'l>>" +
			// Cuerpo de la tabla -- t-> tabla, r (no aun entiendo)
			"<'row'<'col-sm-12 table-responsive d-flex justify-content-center'tr>>" +
			// Seccion estado de la tabla -- i-> info de tabla, p-> num Paginas por dividir registros
			"<'row'<'col-sm-3'><'col-sm-9'i><'col-sm-4'><'col-sm-6'p>>" +
			// Pie de la tabla -- B-> Botones de exportar
			"<'row'<'col-sm-12'B>>",
		buttons: [
			'copy',
			'excel',
			'pdf'
    	]
		//buttons: [
		//	'copyHtml5',
		//	'excelHtml5',
		//	'csvHtml5',
		//	'pdfHtml5'
		//]
	});

	$(".statusChange").click(function(){
		var statetext =$(this).attr('name-state');
		var state_id =$(this).attr('id-state');
		var id_programa =$(this).attr('id-programa');
		$.ajax({
			type:'POST',
			url:'?c=Lider&m=changeStatusPrograma',
			data:{
				statetext:statetext,
				state_id:state_id,
				id_programa:id_programa
			},
			success(response){
				location.reload();
			}
		});
	});

	$(".updateDataPrograma").click(function(){
		var id_programa =$(this).attr('id-programa');
		$.ajax({
			type:'POST',
			url:'?c=Lider&m=getDataPrograma',
			dataType:"json",
			data:{
				id_programa:id_programa
			},
			success(response){
				var programa = jQuery.parseJSON(JSON.stringify(response));
				$('#text-dni').val(programa.dni);
				$('#text-nombre').val(programa.nombre);
				$('#text-apellido').val(programa.apellido);
				$('#text-email').val(programa.email);
			}
		});
	});

});
    </script>