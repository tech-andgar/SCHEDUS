<!-- Contenido Principal -->
<main class="main">
	<!-- Breadcrumb -->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">Inicio</li>
		<li class="breadcrumb-item"><a href="#">Lider</a></li>
		<li class="breadcrumb-item active">Administrar programas de formación</li>
	</ol>
	<div class="container-fluid">
		<!-- Ejemplo de tabla Listado -->
		<div class="card">
			<div class="card-header ">
				<i class="fa fa-align-justify"></i> Administrar Programas de Formacion
				<button type="button" class="btn btn-secondary " data-toggle="modal" data-target="#modal-Agregar-programa">
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
								<th>Codigo</th>
								<th>Programa</th>
								<th>Nivel</th>
								<th>Estado</th>
								<th class="text-center">Actualizar</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($data['programaFormacion'] as $programaFormacion) { ?>
							<tr>
								<td>
									<?php echo $programaFormacion->codigo . " " . $programaFormacion->short_name_programa_formacion; ?>
								</td>
								<td>
									<?php echo $programaFormacion->name_programa_formacion . " " .$programaFormacion->version_programa; ?>
								</td>
								<td>
									<?php echo $programaFormacion->name_nivel_programa_formacion; ?>
								</td>
								<td class="text-center">
									<span class="btn
											<?php switch ($programaFormacion->id_estado_programa_formacion) {
													case '1': //Activo
														echo "btn-success";
														break;
													case '2' :
														//Inactivo
														echo "btn-danger" ;
														break;
													default:
														echo "btn-warning";
														break;
													}
												?>
										">
										<?php echo $programaFormacion->name_estado_programa_formacion; ?></span>
								</td>
								<td class="text-center">
									<div class="updateDataPrograma" data-toggle="modal" data-target="#Actualizar" id-programa="<?php echo $programaFormacion->id_programa_formacion; ?>">
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
				<h3 class="col-11 modal-title text-center">Agregar Nuevo Programa</h3>
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
									<h3>Programa</h3>
								</td>
							</tr>
							<tr>
								<td rowspan="5">
								</td>
								<td>
									<h4 for="txt_num_ficha">Codigo</h4>
									<small id="helpIdNumFicha" class="text-muted">Escriba Codigo del Programa
									</small>
								</td>
								<td colspan="2">
									<input type="text" name="txt_num_ficha" id="txt_num_ficha" class="adsi-css" aria-describedby="helpIdNumFicha">
								</td>
							</tr>
							
							<tr>
								<td>
									<h4   for="txt_num_ficha">Siglas del Programa</h4>
									<small id="helpIdNumFicha" class="text-muted">Escriba las Sigals del Programa</small>
								</td>
								<td colspan="2">
									<input type="text" name="txt_num_ficha" id="txt_num_ficha" class="adsi-css" aria-describedby="helpIdNumFicha" >
								</td>
							</tr>
							<tr>
								<td>
									<h4   for="txt_num_ficha">Nombre del Programa</h4>
									<small id="helpIdNumFicha" class="text-muted">Escriba Programa de Formacion</small>
								</td>
								<td colspan="2">
									<input type="text" name="txt_num_ficha" id="txt_num_ficha" class="adsi-css" aria-describedby="helpIdNumFicha" >
								</td>
							</tr>
							<tr>
								<td>
									<h4   for="txt_num_ficha">Version del Programa</h4>
									<small id="helpIdNumFicha" class="text-muted">Escriba Version de Formacion</small>
								</td>
								<td colspan="2">
									<input type="text" name="txt_num_ficha" id="txt_num_ficha" class="adsi-css" aria-describedby="helpIdNumFicha" >
								</td>
							</tr>
							<tr>
								<td>
									<h4 >Nivel</h4>
									<small id="helpIdNumFicha" class="text-muted ">Selecciona Nievel de Formacion</small>
								</td>
								<td colspan="2">
									<select id="list-NivelProgramaFormacion" class="adsi-css " name="id_nivel_programa_formacion" required>
									</select>
								</td>
							</tr>
						<!--<h4   for="txt_num_ficha">Proyecto</h4>
							<hr>
							<tr>
								<td>
									<h4  for="txt_num_ficha">Codigo del Proyecto</h4>
									<small id="helpIdNumFicha" class="text-muted">Escriba Codigo del Proyecto</small>
								</td>
								<td>
									<input type="text" name="txt_num_ficha" id="txt_num_ficha" class="adsi-css" aria-describedby="helpIdNumFicha" >
								</td>
								<td rowspan = "2">
								<div class="modal-body  text-center">
							<button class="btn-rounded " type="submit"><i class="icon-plus "></i>&nbsp;Nuevo</button>
						</div>
								</td>
							</tr>
							<tr>
								<td>
									<h4  for="txt_num_ficha">Codigo del Proyecto</h4>
									<small id="helpIdNumFicha" class="text-muted">Escriba Codigo del Proyecto</small>
								</td>
								<td>
									<input type="text" name="txt_num_ficha" id="txt_num_ficha" class="adsi-css" aria-describedby="helpIdNumFicha" >
								</td>
							</tr> -->
						</table>
						<div class="modal-body  text-center">
							<button class="btn-rounded " type="submit" style="width:110px">Agregar</button>
						</div>
						<!-- <tr>
            <th>Column 1</th>
        </tr>
        <tr>
            <td rowspan = "5"></td>
            <td>Row 1 Cell 2</td>
            <td colspan = "2">hola</td>
        </tr>
        <tr>
            <td>Row 1 Cell 2</td>
            <td colspan = "2">hola</td>
        </tr>
        </tr>
        <tr>
            <td>Row 1 Cell 2</td>
            <td colspan = "2">hola</td>
        </tr>
        </tr>
        <tr>
            <td>Row 1 Cell 2</td>
            <td colspan = "2">hola</td>
        </tr>
        </tr>
        <tr>
            <td>Row 1 Cell 2</td>
            <td colspan = "2">hola</td>
        </tr>
        <tr>
            <th>Row 2 Cell 2</th>
        </tr>
        <tr>
            <td rowspan = "3"></td>
            <td>Row 1 Cell 2</td>
            <td>hola</td>
            <td rowspan = "3">nuevo</td>
	    </tr>
        <tr>
            <td>Row 2 Cell 2</td>
            <td></td>
        </tr>
        <tr>
            <td>Row 2 Cell 2</td>
            <td></td>
        </tr> -->
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

		$('#list-NivelProgramaFormacion').select2({
			theme: 'bootstrap4',
			ajax: {
				url: '?c=Lider&m=getDataNivelProgramaFormacion',
				dataType: 'json',
				delay: 250,
				data: function (params) {
					return {
						q: params.term, // search term
						page: params.page
					};
				},
				processResults: function (data, params) {
					console.log(data);
					var data = $.map(data, function (obj) {
						obj.id = obj.id || obj.id_nivel_programa_formacion; // replace pk with your identifier
						obj.text = obj.text || obj.name_nivel_programa_formacion; // replace name with the property used for the text

						return obj;
					});
					return {
						results: data,
					};
				},
				cache: true
			},
			placeholder: $(this).attr('placeholder'),
			allowClear: Boolean($(this).data('allow_clear')),
			tags: true,
			dropdownParent: $("#modal-Agregar-programa"),
		});

	});
</script>

<?php
if (!empty($data['msgType'])) {
    echo "<script>toastr." . $data['msgType']['type'] . "('" . $data['msgType']['msg'] . "','" . $data['msgType']['title'] . "')</script>";
}
?>