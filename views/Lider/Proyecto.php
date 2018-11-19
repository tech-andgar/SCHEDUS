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
				<div class="form-group row">
					<div class="col-md-6">
						<div class="input-group">
							<input type="text" id="texto" name="texto" class="form-control" placeholder="Texto a buscar">
							<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
						</div>
					</div>
				</div>
				<div class="table-responsive">
					<table class="table table-responsive-sm table-bordered table-striped table-sm mt-5" id="tableInstructores">
						<thead>
							<tr>
								
								<th>Proyecto</th>
								<th>Creacion</th>
								<th>Modificacion</th>
								<th class="text-center">Actualizar</th>
							</tr>
						</thead>
						<tbody>
                            <td>SISTEMA INTEGRAL WEB PARA GESTION DE PROCESOS EDUCATIVOS DEL CEET</td>
                            <td><?php echo date('d,M,Y') ?></td>
                            <td><?php echo date('d,M,Y') ?></td>
								<td class="text-center">
									<div class="updateDataPrograma" data-toggle="modal" data-target="#Actualizar" >
										<i class="far fa-edit fa-lg"></i>
									</div>
								</td>
							</tr>
							
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
				<h3 class="col-11 modal-title text-center">Agregar Nuevo Proyecto</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="d-flex justify-content-center">
					<form method="post" action="#" class="form-signin">
						<table>
                            <tr>
								<td>
									<h4 for="codig">Proyecto</h4>
									<small id="helpIdNumFicha" class="text-muted">Escriba Nombre del Proyecto
									</small>
								</td>
								<td >
									<input type="text" name="codig" id="codig" class="adsi-css" aria-describedby="helpIdNumFicha">
								</td>
							</tr>
							<tr>
								<td>
									<h4 for="short_name_programa">Fecha de Creacion</h4>
									<small id="helpIdNumFicha" class="text-muted">Escriba las Sigals del Programa</small>
								</td>
								<td >
									<input name="short_name_programa" id="short_name_programa" class="adsi-css" aria-describedby="helpIdNumFicha" placeholder="<?php echo date('d,M,Y') ?>" readonly >
								</td>
							</tr>
						</table>
						<div class="modal-body  text-center">
							<button class="btn-rounded " type="submit" style="width:110px">Agregar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="Actualizar" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="col-11 modal-title text-center">Actualizar Datos</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="d-flex justify-content-center text-center">
					<form method="post" action="#" class="form-signin">
						<h5>Nombre del Programa</h5>
						<input type="text" class="adsi-css mb-3" style="width:80%; height:30px" name="dni" />
						<hr>
						<button class="btn-rounded" type="submit" style="width:110px">Actualizar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function () {

		$("#tableProgramas").DataTable({
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


	});
</script>

<?php
if (!empty($data['msgType'])) {
    echo "<script>toastr." . $data['msgType']['type'] . "('" . $data['msgType']['msg'] . "','" . $data['msgType']['title'] . "')</script>";
}
?>