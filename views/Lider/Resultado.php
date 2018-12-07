<!-- Contenido Principal -->
<main class="main">
	<!-- Breadcrumb -->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">Inicio</li>
		<li class="breadcrumb-item"><a href="#">Lider</a></li>
		<li class="breadcrumb-item active">Resultados de aprendizaje</li>
	</ol>
	<div class="container-fluid">
		<!-- Ejemplo de tabla Listado -->
		<div class="card">
			<div class="card-header ">
				<i class="fa fa-align-justify"></i> Administrar Resultados de aprendizaje
				<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#modalAgregarResultadoAprendizaje">
					<i class="icon-plus "></i>&nbsp;Nuevo
				</button>
			</div>
			<div class="card-body">
				<table class="table table-responsive-sm table-bordered table-striped table-sm mt-5" id="tableNivel">
					<thead>
						<tr>
							<th>Numero Resultados</th>
							<th>Competencia</th>
							<th>Resultado de Aprendizaje</th>
							<th class="text-center">Actualizar</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($data['resultadoAprendizaje'] as $Resultado) { ?>
						<tr>
							<td>
								<?php echo $Resultado->num_resultado_aprendizaje1; ?>
							</td>
							<td>
								<?php echo $Resultado->name_competencia; ?>
							</td>
							<td>
								<?php echo $Resultado->name_resultado_aprendizaje; ?>
							</td>
							<td class="text-center">
								<div class="updateDataNivelFormacion" data-toggle="modal" data-target="#modalActualizarResultadoAprendizaje" id-Resulatados="<?php echo $Resultado->id_resultado_aprendizaje; ?>">
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

<!-- Modal Agregar nuevo Nivel-->
<div class="modal fade bd-example-modal-lg" id="modalAgregarResultadoAprendizaje" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<div class="col-11">
					<h3 class="modal-title text-center">Agregar Nuevo Nivel</h3>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="d-flex justify-content-center">
					<form method="post" action="insertarResultadoAprendizaje" class="form-signin form-modal">
						<div class="container-fluid">
							<div class="row pt-4">
								<div class="col-lg-4 col-12 ">
									<h4 for="num_resultado_aprendizaje1">Numero Resultado</h4>
								</div>
								<div class="col-lg-8 col-12">
									<input type="text" name="num_resultado_aprendizaje1" id="num_resultado_aprendizaje1" class="form-control" aria-describedby="helpCodNivel">
									<small id="helpCodNivel" class="text-muted">Escriba Numero de Resultado de Aprendizaje</small>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-4 col-12">
									<h4 for="selectNewListCompetencia">Competencia</h4>
								</div>
								<div class="col-lg-8 col-12">
									<select id="selectNewListCompetencia" name="cod_competencia" class="form-control" style="width:100%" required></select>
									<small id="helpSelectNewListCompetencia" class="form-text text-muted ">Seleccione La competencia</small>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-4 col-12 ">
									<h4 for="name_resultado_aprendizaje">Resultado Aprendizaje</h4>
								</div>
								<div class="col-lg-8 col-12">
									<input type="text" id="name_resultado_aprendizaje" type="text" name="name_resultado_aprendizaje" class="form-control" aria-describedby="helpDuracion">
									<small id="helpDuracion" class="text-muted">Tiempo de Duracion</small>
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


<!-- Modal Actualizar -->
<div class="modal fade bd-example-modal-lg" id="modalActualizarResultadoAprendizaje" tabindex="-1" role="dialog"
aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
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
				<div class="d-flex justify-content-center">
					<form method="post" action="updateDataResultadoAprendizaje" class="form-signin form-modal">
						<div class="container-fluid">
							<div class="row pt-4">
								<div class="col-lg-4 col-12 ">
									<h4 for="nivel">Numero Resultado</h4>
								</div>
								<div class="col-lg-8 col-12">
									<input type="text" name="nivel" id="nivel" class="form-control" aria-describedby="helpCodNivel">
									<small id="helpCodNivel" class="text-muted">Escriba Numero de Resultado de Aprendizaje</small>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-4 col-12">
									<h4 for="txt_upd_id_nivel_programa_formacion">Competencia</h4>
								</div>
								<div class="col-lg-8 col-12">
									<select id="SelectListUpdNivelProgramaFormacion" class="form-control" name="txt_upd_id_nivel_programa_formacion" style="width:100%" aria-describedby="helpUpdSelectComepetencia" required>
									</select>
									<small id="helpUpdSelectComepetencia" class="form-text text-muted ">Seleccione La competencia</small>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-4 col-12 ">
									<h4 for="duracion">Resultado Aprendizaje</h4>
								</div>
								<div class="col-lg-8 col-12">
									<input type="text" id="duracion" type="text" name="duracion" class="form-control" aria-describedby="helpDuracion">
									<small id="helpDuracion" class="text-muted">Tiempo de Duracion</small>
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



<script>
	$(document).ready(function () {
		$('#selectNewListCompetencia').select2({
			theme: 'bootstrap4',
			ajax: {
				url: 'getDataCompetencia',
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
						obj.id = obj.id || obj.codigo_competencia; // replace pk with your identifier
						obj.text = obj.text || obj.name_competencia; // replace name with the property used for the text
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
			dropdownParent: $("#modalAgregarResultadoAprendizaje"),
		});
	});

	$(".updateDataCompetencia").click(function () {
		var idCompetencia = $(this).attr('id-competencia');
		console.log(idCompetencia);

		$.ajax({
			type: 'POST',
			url: 'getDataCompetencia',
			data: {
				id: idCompetencia
			},
			success(response) {
				var competencia = jQuery.parseJSON(response);
				//console.log(competencia);

				$('#txt_upd_cod_competencia1').val(competencia.codigo_competencia);
				$('#txt_upd_cod_competencia2').val(competencia.num_competencia2);
				$('#txt_upd_name_competencia').val(competencia.name_competencia);
				$('#selectUpdListPrograma').val(competencia.name_programa_formacion);

				// FUNCTION
				//
				// Call AJAX getDataProgramaFormacion() to SELECT ON FORM UPDATE
				$('#SelectListUpdNivelProgramaFormacion').select2({
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
					dropdownParent: $("#modalActualizarCompetencia"),
				});

				// PRE-SELECTED selectUpdListPrograma
				// Fetch the preselected item, and add to the control
				var ProgramaFormacionSelect = $('#selectUpdListPrograma');
				// create the option and append to Select2
				var option = new Option(competencia.name_programa_formacion, competencia.cod_programa_formacion, true, true);
				ProgramaFormacionSelect.append(option).trigger('change');

				// manually trigger the `select2:select` event
				ProgramaFormacionSelect.trigger({
					type: 'select2:select'
				});
				// END PRE-SELECTED SelectUpdListEstadoCompetencia

				// END FUNCTIONS
			}
		});
	});
</script>