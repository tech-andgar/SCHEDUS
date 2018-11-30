<!-- Contenido Principal -->
<main class="main">
	<!-- Breadcrumb -->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">Inicio</li>
		<li class="breadcrumb-item"><a href="#">Lider</a></li>
		<li class="breadcrumb-item active">Fichas</li>
	</ol>
	<div class="container-fluid">
		<div class="card">
			<!-- Ejemplo de tabla Listado -->
			<div class="card-header ">
				<i class="fa fa-align-justify"></i> Fichas
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalAgregarNuevaFicha">
					<i class="icon-plus "></i>&nbsp;Nuevo
				</button>
			</div>
			<div class="card-body">
				<table class="table table-responsive-sm table-bordered table-striped table-sm mt-5" id="tableFichas">
					<thead>
						<tr>
							<th>Ficha</th>
							<th>Programa</th>
							<th>Nivel</th>
							<th>Estado</th>
							<th class="text-center">Actualizar</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($data['fichas'] as $ficha) { ?>
						<tr>
							<td>
								<?php echo $ficha->num_ficha; ?>
							</td>
							<td>
								<?php echo $ficha->name_programa_formacion; ?>
							</td>
							<td>
								<?php echo $ficha->name_nivel_programa_formacion; ?>
							</td>
							<td>
								<?php
								switch ($ficha->name_estado_ficha) {
									case 'Cancelado':
										echo '<div class="p-2 bg-danger text-white rounded">' . $ficha->name_estado_ficha . '</div>';
									break;
									case 'Completado':
										echo '<div class="p-2 bg-info text-white rounded">' . $ficha->name_estado_ficha . '</div>';
									break;
									case 'En formación':
										echo '<div class="p-2 bg-success text-white rounded">' . $ficha->name_estado_ficha . '</div>';
									break;
									case 'Pendiente Asignado':
										echo '<div class="p-2 bg-warning text-dark rounded">' . $ficha->name_estado_ficha . '</div>';
									break;
									default:
										echo '<div class="p-2 bg-dark text-white rounded">No pudo obtener estado de formacion ' . $ficha->name_estado_ficha . '</div>';
									break;
								}?>
							</td>
							<td class="text-center">
								<div class="updateDataFicha" data-toggle="modal" data-target="#updateDataFicha" id-ficha="<?php echo $ficha->id_ficha; ?>">
									<i class="far fa-edit fa-lg"></i>
								</div>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	</div>

	<!-- Fin ejemplo de tabla Listado -->
</main>
<!-- Fin del modal Eliminar -->
</div>
<!-- /Fin del contenido principal -->

<!-- Modal Agregar nueva Ficha-->
<div class="modal fade bd-example-modal-lg" id="ModalAgregarNuevaFicha" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<div class="col-11">
					<h3 class=" modal-title text-center">Agregar Nueva Ficha</h3>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="d-flex justify-content-center ">
					<form method="post" action="insertarFicha"class="form-signin form-modal">
						<div class="container-fluid">
							<div class="row pt-4">
								<div class="col-lg-4 col-12 ">
									<h4>Numero de la Ficha</h4>
								</div>
								<div class="col-lg-8 col-12">
									<input type="number" name="num_ficha" id="num_ficha" class="form-control" aria-describedby="helpIdNumFicha">
									<small id="" class="text-muted">Escriba Numero de la Ficha
									</small>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-4  col-12">
									<h4>Programa</h4>
								</div>
								<div class="col-lg-8  col-12">
									<select class="form-control" name="cod_programa_formacion" id="selectNewListPrograma" style="width:100%"
									required></select>
									<small id="helpIdNumFicha" class="text-muted">Selecciona programa de formación</small>
								</div>
							</div>
						</div>
						<hr>
						<div class="text-center pt-2">
							<button class="btn-rounded" type="submit">Insertar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END MODAL Agregar nueva Ficha -->


<!-- Modal actualizar datos de Ficha-->
<div class="modal fade bd-example-modal-lg" id="updateDataFicha" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<div class="col-11">
					<h3 class="modal-title text-center">Actualizar datos de ficha</h3>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="justify-content-center">
					<form method="POST" action="updateDataFicha"class="form-signin form-modal">
						<div class="container-fluid">
							<div class="row pt-4">
								<div class="col-lg-4 col-12 ">
									<h4>Numero de la Ficha</h4>
								</div>
								<div class="col-lg-8 col-12">
									<input type="number" id="txt_id_ficha" name="id_ficha" value="" hidden>
									<input type="number" id="txt_num_ficha" name="num_ficha" class="form-control" aria-describedby="helpIdNumFicha"
									readonly>
									<small id="" class="text-muted">Escriba Numero de la Ficha
									</small>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-4  col-12">
									<h4>Programa</h4>
								</div>
								<div class="col-lg-8 col-12">
									<select class="form-control" id="selectUpdListPrograma" style="width: 100%" name="upd_cod_programa_formacion"
									required>
									</select>
									<small id="helpIdNumFicha" class="text-muted">Selecciona programa de formación</small>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-4  col-12">
									<h4>Estado</h4>
								</div>
								<div class="col-lg-8 col-12">
									<select id="SelectUpdListEstadoFicha" class="form-control" style="width: 100%" name="upd_cod_estado_ficha" required>
									</select>
									<small id="helpIdNumFicha" class="text-muted">Selecciona estado de ficha</small>
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
<!-- END Modal actualizar datos de Ficha-->



<script>
	function removeDuplicates(json_all) {
		var arr = [],
			collection = [];

		$.each(json_all, function (index, value) {
			if ($.inArray(value.id, arr) == -1) {
				arr.push(value.id);
				collection.push(value);
			}
		});
		return collection;
	};



	$(document).ready(function () {

		// Change status of ficha from button
		$(".statusChange").click(function () {
			var statetext = $(this).attr('name-state');
			var state_id = $(this).attr('id-state');
			var id_Ficha = $(this).attr('id-Ficha');
			$.ajax({
				type: 'POST',
				url: 'changeStatusFicha',
				data: {
					statetext: statetext,
					state_id: state_id,
					id_Ficha: id_Ficha
				},
				success(response) {
					location.reload();
				}
			});
		});

		// get Data Ficha_ID form button -> Modal Form_update_ficha
		$(".updateDataFicha").click(function () {
			var idFicha = $(this).attr('id-ficha');

			// Call AJAX getDataFicha()
			$.ajax({
				type: 'POST',
				url: 'getDataFicha',
				data: {
					idFicha: idFicha
				},
				success(response) {
					var ficha = jQuery.parseJSON(response);
					$('#txt_num_ficha').val(ficha.num_ficha);
					$('#txt_id_ficha').val(ficha.id_ficha);
					getDataEstadoFichaToUpdSelect();
					getDataProgramaFormacionToUpdSelect();

					//FUNCTIONS
					//
					// Call AJAX getDataEstadoFicha() to SELECT ON FORM UPDATE
					function getDataEstadoFichaToUpdSelect() {
						$('#SelectUpdListEstadoFicha').select2({
							theme: 'bootstrap4',
							ajax: {
								url: 'getDataEstadoFicha',
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
										obj.id = obj.id || obj.id_estado_ficha; // replace pk with your identifier
										obj.text = obj.text || obj.name_estado_ficha; // replace name with the property used for the text

										if (obj.id_estado_ficha == ficha.id_estado_ficha) {
											obj.selected = true;
										}

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
							dropdownParent: $("#updateDataFicha"),
						});

						// PRE-SELECTED SelectUpdListEstadoFicha
						// Fetch the preselected item, and add to the control
						var EstadoFichaSelect = $('#SelectUpdListEstadoFicha');
						// create the option and append to Select2
						var option = new Option(ficha.name_estado_ficha, ficha.id_estado_ficha, true, true);
						EstadoFichaSelect.append(option).trigger('change');

						// manually trigger the `select2:select` event
						EstadoFichaSelect.trigger({
							type: 'select2:select'
						});
						// END PRE-SELECTED SelectUpdListEstadoFicha
					} // END getDataEstadoFichaToUpdSelect()


					// FUNCTION
					//
					// Call AJAX getDataProgramaFormacion() to SELECT ON FORM UPDATE
					function getDataProgramaFormacionToUpdSelect() {
						$('#selectUpdListPrograma').select2({
							theme: 'bootstrap4',
							ajax: {
								url: 'getDataProgramaFormacion',
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
										obj.id = obj.id || obj.id_programa_formacion; // replace pk with your identifier
										obj.text = obj.text || obj.name_programa_formacion; // replace name with the property used for the text
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
							dropdownParent: $("#updateDataFicha"),
						});

						// PRE-SELECTED selectUpdListPrograma
						// Fetch the preselected item, and add to the control
						var ProgramaFormacionSelect = $('#selectUpdListPrograma');
						// create the option and append to Select2
						var option = new Option(ficha.name_programa_formacion, ficha.id_programa_formacion, true, true);
						ProgramaFormacionSelect.append(option).trigger('change');

						// manually trigger the `select2:select` event
						ProgramaFormacionSelect.trigger({
							type: 'select2:select'
						});
						// END PRE-SELECTED SelectUpdListEstadoFicha
					} //END getDataProgramaFormacionToUpdSelect()

					// END FUNCTIONS
				}
			}); // End Call AJAX getDataFicha()

		}); // End get Data Ficha_ID form button -> Modal Form_update_ficha




		$('#selectNewListPrograma').select2({
			theme: 'bootstrap4',
			ajax: {
				url: 'getDataProgramaFormacion',
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
						obj.id = obj.id || obj.id_programa_formacion; // replace pk with your identifier
						obj.text = obj.text || obj.name_programa_formacion; // replace name with the property used for the text
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
			dropdownParent: $("#ModalAgregarNuevaFicha"),
		});


	});
</script>