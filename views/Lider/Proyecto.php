<!-- Contenido Principal -->
<main class="main">
	<!-- Breadcrumb -->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">Inicio</li>
		<li class="breadcrumb-item"><a href="#">Lider</a></li>
		<li class="breadcrumb-item active">Administrar Proyecto</li>
	</ol>
	<div class="container-fluid">
		<!-- Ejemplo de tabla Listado -->
		<div class="card">
			<div class="card-header ">
				<i class="fa fa-align-justify"></i> Administrar Proyecto
				<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#modal-Agregar-programa">
					<i class="icon-plus "></i>&nbsp;Nuevo
				</button>
			</div>
			<div class="card-body">
					<table class="table table-responsive-sm table-bordered table-striped table-sm mt-5" id="tableProyecto">
						<thead>
							<tr>
								<th>Proyecto</th>
								<th class="text-center">Actualizar</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($data['proyecto'] as $proyecto) {?>
							<tr>
								<td>
									<?php echo $proyecto->name_proyecto; ?>
								</td>
								<td class="text-center">
									<div class="updateDataProyecto" data-toggle="modal" data-target="#Actualizar" id-Proyecto="<?php echo $proyecto->id_proyecto; ?>">
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
	<!-- Fin ejemplo de tabla Listado -->
	</div>
	<!-- Fin del modal Eliminar -->
</main>
<!-- /Fin del contenido principal -->
</div>

<!-- Modal Agregar nueva Programa-->
<div class="modal fade bd-example-modal-lg" id="modal-Agregar-programa" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<div class="col-11">
					<h3 class="modal-title text-center">Agregar Nuevo Proyecto</h3>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="d-flex justify-content-center">
					<form method="post" action="insertarProyecto" class="form-signin form-modal">
						<div class="container-fluid">
							<div class="row pt-4">
								<div class="col-lg-4 col-12">
									<h4 for="proyect">Proyecto</h4>
								</div>
								<div class="col-lg-8 col-12">
									<input type="text" name="proyect" id="proyect" class="form-control" aria-describedby="helpIdNumFicha">
									<small id="helpIdNumFicha" class="text-muted">Escriba Nombre del Proyecto
									</small>
								</div>
							</div>
						</div>
						<hr>
						<div class="text-center pt-2">
							<button class="btn-rounded " type="submit">Agregar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal -->
<div class="modal fade  bd-example-modal-lg" id="Actualizar" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<div class="col-11">
					<h3 class="modal-title text-center">Actualizar Proyecto</h3>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="d-flex justify-content-center">
					<form method="post" action="updateDataProyecto" class="form-signin form-modal">
						<div class="container-fluid">
							<div class="row pt-4">
								<div class="col-lg-4 col-12">
									<h4 for="codig">Proyecto</h4>
									<small id="helpIdNumFicha" class="text-muted">Escriba Nombre del Proyecto
									</small>
								</div>
								<div class="col-lg-8 col-12">
									<input id="txt_upd_id_proyecto" type="number" name="txt_upd_id_proyecto" value="" hidden>
									<input type="text" name="txt_upd_proyecto" id="txt_upd_proyecto" class="form-control" aria-describedby="helpIdNumFicha">
								</div>
							</div>
						</div>
						<hr>
						<div class="text-center pt-2">
							<button class="btn-rounded " type="submit">Actualizar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function () {

		$("#tableProyecto").DataTable({
			"language": {
				"sProcessing": "Procesando...",
				"sLengthMenu": "Mostrar _MENU_ registros",
				"sZeroRecords": "No se encontraron resultados",
				"sEmptyTable": "Ningún dato disponible en esta tabla",
				"sInfo": "Registros del _START_ al _END_ de un total de _TOTAL_ registros",
				"sInfoEmpty": "Registros del 0 al 0 de un total de 0 registros",
				"sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
				"sInfoPostFix": "",
				"sSearch": "Buscar:",
				"sUrl": "",
				"sInfoThousands": ",",
				"sLoadingRecords": "Cargando...",
				"oPaginate": {
					"sFirst": "Primero",
					"sLast": "Último",
					"sNext": "Siguiente",
					"sPrevious": "Anterior"
				},
				"oAria": {
					"sSortAscending": ": Activar para ordenar la columna de manera ascendente",
					"sSortDescending": ": Activar para ordenar la columna de manera descendente"
				}
			},
			"dom": // Insertar objeto tabla por formato:
				// Encabezado de la tabla -- l->Num registros por pagina, f-> barra de filtro
				"<'row'<'col-sm-6'f><'col-sm-6'l>>" +
				// Cuerpo de la tabla -- t-> tabla, r (no aun entiendo)
				"<'row'<'col-sm-12 table-responsive d-flex justify-content-center'tr>>" +
				// Seccion estado de la tabla -- i-> info de tabla, p-> num Paginas por dividir registros
				"<'row'<'col-sm-4'><'col-sm-8'i><'col-sm-4'><'col-sm-6'p>>" +
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
	});

	$(".updateDataProyecto").click(function () {
		var idProyecto = $(this).attr('id-Proyecto');
		console.log(idProyecto);

		$.ajax({
			type: 'POST',
			url: 'getDataProyecto',
			dataType: "json",
			data: {
				id: idProyecto
			},
			success(response) {
				var proyecto = jQuery.parseJSON(JSON.stringify(response));
				console.log(proyecto);
				$('#txt_upd_id_proyecto').val(proyecto.id_proyecto);
				$('#txt_upd_proyecto').val(proyecto.name_proyecto);
			}
		});
	});
</script>
