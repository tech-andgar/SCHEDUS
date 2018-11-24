
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
				<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#modal-Agregar-programa">
					<i class="icon-plus "></i>&nbsp;Nuevo
				</button>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-responsive-sm table-bordered table-striped table-sm mt-5" id="tableProgramas">
						<thead>
							<tr>
								<th>Codigo</th>
								<th>Siglas</th>
								<th>Programa</th>
								<th>Version</th>
								<th>Nivel</th>
								<th>Estado</th>
								<th class="text-center">Actualizar</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($data['programaFormacion'] as $programaFormacion) { ?>
							<tr>
								<td>
									<?php echo $programaFormacion->codigo; ?>
								</td>
								<td>
									<?php echo  $programaFormacion->short_name_programa_formacion ;?>
								</td>
								<td>
									<?php echo $programaFormacion->name_programa_formacion; ?>
								</td>
								<td>
									<?php echo $programaFormacion->version_programa;?>
								</td>
								<td>
									<?php echo $programaFormacion->name_nivel_programa_formacion; ?>
								</td>
								<td class="text-center">
									<span class="btn
											<?php switch ($programaFormacion->id_estado_programa_formacion) {
														case '1':
														//Activo
														echo "
														btn-success";
														break;
														case '2' :
														//Inactivo
														echo "btn-danger" ;
														break;
														default:
														echo "btn-warning" ;
														break;
														}
											?>
										">
										<?php echo $programaFormacion->name_estado_programa_formacion; ?></span>
								</td>
								<td class="text-center">
									<div class="updateDataPrograma" data-toggle="modal" data-target="#Actualizar_programa" id-programa="<?php echo $programaFormacion->id_programa_formacion; ?>">
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
					<form method="post" action="insertarProgramaFormacion" class="form-signin form-modal">
						<div class="container-fluid">
							<div class="row pt-4">
								<div class="col-12">
									<h3>Programa</h3>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-3 offset-lg-2 col-md-8 offset-md-2">
									<h4 for="codig">Codigo</h4>
									<small id="helpIdNumFicha" class="text-muted">Escriba Codigo del Programa</small>
								</div>
								<div class="col-lg-5">
									<input type="number" name="txt_cod_programa" id="txt_cod_programa" class="form-control"  required>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-3 offset-lg-2 col-md-8 offset-md-2">
									<h4 for="short_name_programa">Siglas del Programa</h4>
									<small id="helpIdNumFicha" class="text-muted">Escriba las Sigals del Programa</small>
								</div>
								<div class="col-lg-5">
									<input type="text" name="txt_short_name_programa" id="txt_short_name_programa"class="form-control"
									aria-describedby="helpIdNumFicha " required>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-3 offset-lg-2 col-md-8 offset-md-2">
									<h4 for="name_Programa_formacion">Nombre del Programa</h4>
									<small id="helpIdNumFicha" class="text-muted">Escriba Programa de Formacion</small>
								</div>
								<div class="col-lg-5">
									<input type="text" name="txt_name_programa_formacion" id="txt_name_programa_formacion"class="form-control" required>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-3 offset-lg-2 col-md-8 offset-md-2">
									<h4 for="version_Programa">Version del Programa</h4>
									<small id="helpIdNumFicha" class="text-muted">Escriba Version de Formacion</small>
								</div>
								<div class="col-lg-5">
									<input type="text" name="txt_version_programa" id="txt_version_programa" class="form-control"  required>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-3 offset-lg-2 col-md-8 offset-md-2">
									<h4>Nivel</h4>
									<small id="helpIdNumFicha" class="text-muted ">Selecciona Nivel de Formacion</small>
								</div>
								<div class="col-lg-5 col-md-12">
									<select id="list-NivelProgramaFormacion" class="form-control" name="txt_id_nivel_programa_formacion" style="width: 100%" required></select>
								</div>
							</div>
						</div>
						<div class="container-fluid">
							<div class="row pt-4">
								<div class="col-lg-6 col-md-12">
									<h3>Proyecto</h3>
								</div>
								<div class="col-lg-3 offset-lg-2 col-md-12">
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
										<i class="icon-plus "></i>&nbsp;Agregar nuevo proyecto
									</button>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-3 offset-lg-2 col-md-8 offset-md-2">
									<h4 for="txt_nom_proyecto">Nombre del Proyecto</h4>
									<small id="helpIdNumFicha" class="text-muted">Escriba Nombre del Proyecto</small>
								</div>
								<div class="col-lg-5 col-md-12">
									<select id="list-Proyecto" class="form-control" id="txt_cod_proyecto" name="txt_cod_proyecto" style="width: 100%" required></select>
								</div>
							</div>
						</div>
						<div class="modal-body text-center">
							<button class="btn-rounded " type="submit" style="width:110px">Agregar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal Actulizar datos-->
<div class="modal fade bd-example-modal-lg" id="Actualizar_programa" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="col-11 modal-title text-center">Actualizar datos de Programa de formación</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="d-flex justify-content-center">
					<form method="post" action="<?php echo APP_URL ?>updateDataInstructor" class="form-signin form-modal">
						<div class="container-fluid">
							<div class="row pt-4">
								<div class="col-12">
									<h3>Programa</h3>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-3 offset-lg-2 col-md-8 offset-md-2">
									<h4 for="codig">Codigo</h4>
									<small id="helpIdNumFicha" class="text-muted">Escriba Codigo del Programa</small>
								</div>
								<div class="col-lg-5">
									<input type="text" name="txt_upd_cod_programa" id="txt_upd_cod_programa"class="form-control" >
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-3 offset-lg-2 col-md-8 offset-md-2">
									<h4 for="short_name_programa">Siglas del Programa</h4>
									<small id="helpIdNumFicha" class="text-muted">Escriba las Sigals del Programa</small>
								</div>
								<div class="col-lg-5">
									<input type="text" name="txt_upd_short_name_programa" id="txt_upd_short_name_programa"class="form-control"
									>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-3 offset-lg-2 col-md-8 offset-md-2">
									<h4 for="name_Programa_formacion">Nombre del Programa</h4>
									<small id="helpIdNumFicha" class="text-muted">Escriba Programa de Formacion</small>
								</div>
								<div class="col-lg-5">
									<input type="text" name="txt_upd_name_programa_formacion" id="txt_upd_name_programa_formacion"class="form-control"
									>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-3 offset-lg-2 col-md-8 offset-md-2">
									<h4 for="version_Programa">Version del Programa</h4>
									<small id="helpIdNumFicha" class="text-muted">Escriba Version de Formacion</small>
								</div>
								<div class="col-lg-5">
									<input type="text" name="txt_upd_version_programa" id="txt_upd_version_programa"class="form-control" >
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-3 offset-lg-2 col-md-8 offset-md-2">
									<h4>Nivel</h4>
									<small id="helpIdNumFicha" class="text-muted ">Selecciona Nivel de Formacion</small>
								</div>

								<div class="col-lg-5">
									<select id="list-upd-NivelProgramaFormacion" name="txt_upd_id_nivel_programa_formacion"class="form-control" >
									</select>
								</div>
							</div>
						</div>
						<hr>
						<div class="container-fluid">
							<div class="row pt-4">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<h3>Proyecto</h3>
								</div>
								<div class="col-lg-3 offset-lg-2 col-md-6 col-sm-6 col-xs-6">
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
										<i class="icon-plus "></i>&nbsp;Agregar nuevo proyecto
									</button>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-3 offset-lg-2 col-md-8 offset-md-2">
									<h4 for="txt_upd_num_proyecto">Nombre del Proyecto</h4>
									<small id="helpIdNumFicha" class="text-muted">Escriba Nombre de Proyecto</small>
								</div>
								<div class="col-lg-5">
									<select id="list-upd-Proyecto" name="txt_upd_cod_proyecto"class="form-control"></select>
								</div>
							</div>
						</div>
						<div class="modal-body text-center">
							<button class="btn-rounded " type="submit" style="width:110px">Actualizar datos</button>
						</div>
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


		// Call AJAX getDataNivelProgramaFormacion to SELECT
		$('#list-NivelProgramaFormacion').select2({
			theme: 'bootstrap4',
			ajax: {
				url: APP_URL+'lider/getDataNivelProgramaFormacion',
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

		// Call AJAX getDataProyecto to SELECT
		$('#list-Proyecto').select2({
			theme: 'bootstrap4',
			ajax: {
				url: 'getDataProyecto',
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
						obj.id = obj.id || obj.id_proyecto; // replace pk with your identifier
						obj.text = obj.text || obj.name_proyecto; // replace name with the property used for the text

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
		}); //END Call AJAX getDataProyecto to SELECT

		//Call getDataPrograma for data update
		$(".updateDataProgramaFormacion").click(function(){
			var id_programa = $(this).attr('id-programa');
			console.log(id_programa);

			$.ajax({
				type:'POST',
				url:'lider/getDataProgramaFormacion',
				dataType:"json",
				data:{
					id:id_programa
				},
				success(response){
                   //list-upd-NivelProgramaFormacion
					var programa  = jQuery.parseJSON(JSON.stringify(response));
					console.log(programa);
					$('#txt_upd_cod_programa').val(programa.codigo);
					$('#txt_upd_short_name_programa').val(programa.short_name_programa_formacion);
					$('#txt_upd_name_programa_formacion').val(programa.name_programa_formacion);
					$('#txt_upd_version_programa').val(programa.version_programa);
					$('#txt_upd_id_nivel_programa_formacion').val(programa.id_nivel_programa_formacion);
					// $('#txt_upd_cod_proyecto').val(programa.id_proyecto);


					// Call AJAX getDataUpdNivelProgramaFormacion to SELECT
					$('#list-upd-NivelProgramaFormacion').select2({
						theme: 'bootstrap4',
						ajax: {
							url: 'lider/getDataNivelProgramaFormacion',
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
						dropdownParent: $("#Actualizar_programa"),
					});


					// Call AJAX getDataProyecto to SELECT-UPD
					$('#list-upd-Proyecto').select2({
						theme: 'bootstrap4',
						ajax: {
							url: 'lider/getDataProyecto',
							dataType: 'json',
							delay: 250,
							data: function (params) {
								return {
									q: params.term, // search term
									page: params.page
								};
							},
							processResults: function (data, params) {
								var data = $.map(data, function (obj) {
									obj.id = obj.id || obj.id_proyecto; // replace pk with your identifier
									obj.text = obj.text || obj.name_proyecto; // replace name with the property used for the text

									if (obj.id_proyecto == programa.id_proyecto) {
										obj.selected = true;
									}

									console.log(data);

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
						dropdownParent: $("#Actualizar_programa"),


					}); //END Call AJAX getDataProyecto to SELECT-UPD

					$dropDown.val(programa.id_proyecto).trigger('change.select2');

				}
			});
		});// END Call getDataPrograma for data update

	});
</script>

<?php
if (!empty($data['msgType'])) {
    echo "<script>toastr." . $data['msgType']['type'] . "('" . $data['msgType']['msg'] . "','" . $data['msgType']['title'] . "')</script>";
}
?>