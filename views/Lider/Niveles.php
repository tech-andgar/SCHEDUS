<!-- Contenido Principal -->
<main class="main">
	<!-- Breadcrumb -->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">Inicio</li>
		<li class="breadcrumb-item"><a href="#">Lider</a></li>
		<li class="breadcrumb-item active">Administrar NIvel de Formacion</li>
	</ol>
	<div class="container-fluid">
		<!-- Ejemplo de tabla Listado -->
		<div class="card">
			<div class="card-header ">
				<i class="fa fa-align-justify"></i> Administrar Nivel de Formacion
				<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#modal-Agregar-programa">
					<i class="icon-plus "></i>&nbsp;Nuevo
				</button>
			</div>
			<div class="card-body">
					<table class="table table-responsive-sm table-bordered table-striped table-sm mt-5" id="tableNivel">
						<thead>
							<tr>
							<th>Nivel</th>
							<th>Duracion</th>
							<th class="text-center">Actualizar</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($data['nivelProgramaFormacion'] as $nivelProgramaFormacion) { ?>
							<tr>
								<td>
									<?php echo $nivelProgramaFormacion->name_nivel_programa_formacion; ?>
								</td>
								<td>
									<?php echo $nivelProgramaFormacion->duracion; ?>
								</td>
								<td class="text-center">
									<div class="updateDataNivelFormacion" data-toggle="modal" data-target="#Actualizar_Nivel" id-NivelFormacion="<?php echo $nivelProgramaFormacion->id_nivel_programa_formacion; ?>">
										<i class="far fa-edit fa-lg"></i></div>
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
				<h3 class="col-11 modal-title text-center">Agregar Nuevo Nivel</h3>
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
									<h4 for="codig">Nivel</h4>
									<small id="helpIdNumFicha" class="text-muted">Escriba Nivel de Formacion
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
<!-- Modal Actualizar -->
<div class="modal fade bd-example-modal-lg" id="Actualizar_Nivel" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered  modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="col-11 modal-title text-center">Actualizar Datos</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="d-flex justify-content-center">
					<form method="post" action="updateDataNivelFormacion" class="form-signin" id="modalFormUpdNivelFormacion">
						<div class="container-fluid">
							<div class="row pt-4">
								<div class="col-12">
									<h3>Nivel</h3>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-3 offset-lg-2 col-md-8 offset-md-2">
									<h4 for="codig">Nivel Formacion</h4>
									<small id="helpIdNumFicha" class="text-muted">Escriba Nombre del Nivel de Formacion</small>
								</div>
								<div class="col-lg-2 col-md-9 offset-md-1 col-sm-9 offset-sm-1">
									<input id="txt_id_nivel_programa_formacion" type="number" name="txt_id_nivel_programa_formacion"  class="adsi-css" hidden>
									<input id="txt_name_nivel_programa_formacion" type="text" name="txt_name_nivel_programa_formacion"  class="adsi-css">
								</div>
							</div>
						</div>
						<div class="container-fluid">
							<div class="row pt-4">
								<div class="col-lg-3 offset-lg-2 col-md-8 offset-md-2">
									<h4 for="txt_upd_num_proyecto">Duracion</h4>
									<small id="helpIdNumFicha" class="text-muted">Escriba El tiempo de Duracion</small>
								</div>
								<div class="col-lg-2 col-md-9 offset-md-1 col-sm-9 offset-sm-1">
									<input id="txt_duracion" type="text" name="txt_duracion" class="adsi-css" >
								</div>
							</div>
						</div>
						<div class="modal-body text-center">
							<button class="btn-rounded " type="submit">Actualizar datos</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<script>
	$(document).ready(function () {

		$("#tableNivel").DataTable({
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
				"<'row'<'col-sm-4'><'col-sm-7'i><'col-sm-4'><'col-sm-6'p>>" +
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


	$(".updateDataNivelFormacion").click(function(){
		var idNivelFormacion =$(this).attr('id-NivelFormacion');
		
		$.ajax({
			type:'POST',
			url:'getDataNivelFormacion',
			dataType:"json",
			data:{
				id:idNivelFormacion
			},
			success(response){
				var nivel = jQuery.parseJSON(JSON.stringify(response));
				$('#txt_id_nivel_programa_formacion').val(idNivelFormacion);
				$('#txt_name_nivel_programa_formacion').val(nivel.name_nivel_programa_formacion);
				$('#txt-duracion').val(nivel.duracion);
			}
		});
	});

	});
</script>

<?php
if (!empty($data['msgType'])) {
    echo "<script>toastr." . $data['msgType']['type'] . "('" . $data['msgType']['msg'] . "','" . $data['msgType']['title'] . "')</script>";
}
?>