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
				<i class="fa fa-align-justify"></i> Administrar Instructores
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Insertar">
					<i class="icon-plus"></i>&nbsp;Nuevo
				</button>
			</div>
			<div class="card-body">
				<table class="table table-responsive-sm table-striped table-sm mt-5" id="tableInstructores">
					<thead>
						<tr class="success">
							<th>Instructor</th>
							<th>Estado</th>
							<th class="text-center">Actualizar</th>
						</tr>
					</thead>
					</tr>
					</thead>
					<tbody>
						<?php foreach ($data['instructores'] as $instructor) { ?>
						<tr>
							<td>
								<?php echo $instructor->nombre . " " . $instructor->apellido; ?>
							</td>
							<td class="text-center">
								<button type="button"
										id-instructor="<?php echo $instructor->id_usuario; ?>"
										id-state="<?php echo $instructor->id_estado_usuario; ?>"
										name-state="<?php echo $instructor->name_estado_usuario; ?>"
										class="statusChange btn  <?php if ($instructor->name_estado_usuario == 'Activo') {echo "btn-success";} else {echo "btn-danger";}?>"
										data-toggle="tooltip"
										data-placement="right"
										title="Click cambia estado de instructor">
								<?php echo $instructor->name_estado_usuario; ?>
								</button>
							</td>
							<td class="text-center">
								<div class="updateDataInstructor" data-toggle="modal" data-target="#Actualizar_ins" id-instructor="<?php echo $instructor->id_usuario; ?>">
									<i class="far fa-edit fa-lg"></i>
								</div>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		<!-- Fin ejemplo de tabla Listado -->
	</div>
</main>
<!-- /Fin del contenido principal -->
</div>

<!-- Modal Actualizar_Instructores-->
<div class="modal fade" id="Actualizar_ins" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<div class="col-11">
					<h3 class="modal-title text-center">Actualizar Datos</h3>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class=" justify-content-center">
					<form method="POST" action="updateDataInstructor" class="form-signin form-modal">
						<div class="container-fluid">
							<div class="row pt-4">
								<div class="col-lg-4  col-12 ">
									<h5>Numero de Documento</h5>
									<small id="" class="text-muted">Escriba Numero de Documento del Instructor
									</small>
								</div>
								<div class="col-lg-8 col-12">
									<input id="text-dni" type="number" value="" class="form-control" name="dni" placeholder="Documento" readonly />
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-4  col-12 ">
									<h5>Nombre</h5>
									<small id="" class="text-muted">Escriba Nombre del Instructor
									</small>
								</div>
								<div class="col-lg-8 col-12">
									<input id="text-nombre" type="text" value="" class="form-control" name="nombre" placeholder="Nombre" required />
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-4  col-12 ">
									<h5>Apellido</h5>
									<small id="" class="text-muted">Escriba Apellido del Instructor
									</small>
								</div>
								<div class="col-lg-8 col-12">
									<input id="text-apellido" type="text" value="" class="form-control" name="apellido" placeholder="Apellido" required /> 
									</div>
							</div>
							<div class="row  pt-4">
								<div class="col-lg-4  col-12 ">
									<h5>Correo</h5>
									<small id="" class="text-muted">Escriba Correo del Instructor
									</small>
								</div>
								<div class="col-lg-8 col-12">
									<input id="text-email" type="email" value="" class="form-control" name="email" placeholder="Correo" required />
								</div>
							</div>
						</div>
						<hr>
						<div class="text-center pt-2">
							<button class="btn-rounded" type="submit">Actualizar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal Insertar Instructor-->
<div class="modal fade bd-example-modal-lg" id="Insertar" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<div class="col-11">
					<h3 class="modal-title text-center">Insertar Instructor</h3>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="justify-content-center">
					<form method="POST" action="InsertarInstructor" class="form-signin form-modal">
						<div class="container-fluid">
							<div class="row pt-4">
								<div class="col-lg-4  col-12 ">
									<h5>Numero de Documento</h5>
									<small id="" class="text-muted">Escriba Numero de Documento del Instructor
									</small>
								</div>
								<div class="col-lg-8 col-12">
									<input type="number" class="form-control" name="dni" placeholder="Documento" />
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-4  col-12 ">
									<h5>Nombre</h5>
									<small id="" class="text-muted">Escriba Nombre del Instructor
									</small>
								</div>
								<div class="col-lg-8 col-12">
									<input type="text" class="form-control" name="nombre_instructor" placeholder="Nombre" required />
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-4  col-12 ">
									<h5>Apellido</h5>
									<small id="" class="text-muted">Escriba Apellido del Instructor
									</small>
								</div>
								<div class="col-lg-8 col-12">
									<input type="text" class="form-control" name="apellido_instructor" placeholder="Apellido" required />
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-4  col-12 ">
									<h5>Correo</h5>
									<small id="" class="text-muted">Escriba Correo del Instructor
									</small>
								</div>
								<div class="col-lg-8 col-12">
									<input type="email" class="form-control" name="email" placeholder="Correo" required />
								</div>
							</div>
							<hr>
							<div class="text-center pt-2">
								<button class="btn-rounded" type="submit">Agregar</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
$(document).ready(function() {



	$("#tableInstructores").DataTable({
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
			"<'row'<'col-sm-4'><'col-sm-7'i><'col-sm-4'><'col-sm-8'p>>" +
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
		var id_instructor =$(this).attr('id-instructor');
		$.ajax({
			type:'POST',
			url:'changeStatusInstructor',
			data:{
				statetext:statetext,
				state_id:state_id,
				id_instructor:id_instructor
			},
			success(response){
				// window.location.href = "Instructor";
				location.reload();
			}
		});
	});

	$(".updateDataInstructor").click(function(){
		var id_instructor =$(this).attr('id-instructor');
		console.log(id_instructor);

		$.ajax({
			type:'POST',
			url:'getDataInstructor',
			dataType:"json",
			data:{
				id_instructor:id_instructor
			},
			success(response){
				var instructor = jQuery.parseJSON(JSON.stringify(response));
				$('#text-dni').val(instructor.dni);
				$('#text-nombre').val(instructor.nombre);
				$('#text-apellido').val(instructor.apellido);
				$('#text-email').val(instructor.email);
			}
		});
	});

});
	</script>