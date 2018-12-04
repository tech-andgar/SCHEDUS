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
				<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#modal-Agregar-programa">
					<i class="icon-plus "></i>&nbsp;Nuevo
				</button>
			</div>
			<div class="card-body">
				<table class="table table-responsive-sm table-bordered table-striped table-sm mt-5" id="tableNivel">
					<thead>
						<tr>
                            <th>Numero Resultados</th>
							<th>Codigo Competencia</th>
							<th>Resultado de Aprendizaje</th>
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

<!-- Modal Agregar nuevo Nivel-->
<div class="modal fade bd-example-modal-lg" id="modal-Agregar-programa" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg"  role="document">
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
					<form method="post" action="insertarNivelFormacion" class="form-signin form-modal">
					<div class="container-fluid">
							<div class="row pt-4">
								<div class="col-lg-4 col-12 ">
									<h4 for="nivel">Nivel Formacion</h4>
								</div>
								<div class="col-lg-8 col-12">
									<input type="text" name="nivel" id="nivel" class="form-control" aria-describedby="helpCodNivel">
									<small id="helpCodNivel" class="text-muted">Escriba Nombre del Nivel de Formacion</small>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-4 col-12 ">
									<h4 for="duracion">Duracion</h4>
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


<!-- Modal Actualizar -->
<div class="modal fade bd-example-modal-lg" id="Actualizar_Nivel" tabindex="-1" role="dialog" aria-hidden="true">
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
					<form method="post" action="updateDataNivelFormacion" class="form-signin form-modal" id="modalFormUpdNivelFormacion">
						<div class="container-fluid">
							<div class="row pt-4">
								<div class="col-lg-4 col-12 ">
									<h4 for="txt_upd_id_nivel_programa_formacion">Nivel Formacion</h4>
								</div>
								<div class="col-lg-8 col-12">
									<input id="txt_upd_id_nivel_programa_formacion" type="number" name="txt_upd_id_nivel_programa_formacion" value="" hidden>
									<input id="txt_upd_name_nivel_programa_formacion" type="text" name="txt_upd_name_nivel_programa_formacion" class="form-control">
									<small id="helpIdNumFicha" class="text-muted">Nombre del Nivel de Formacion</small>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-4 col-12 ">
									<h4 for="txt_duracion">Duracion</h4>
								</div>
								<div class="col-lg-8 col-12">
									<input id="txt_upd_duracion" type="text" name="txt_upd_duracion" class="form-control">
									<small id="helpIdNumFicha" class="text-muted">Tiempo de Duracion</small>
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
	$(".updateDataNivelFormacion").click(function () {
		var idNivelFormacion = $(this).attr('id-NivelFormacion');
		console.log(idNivelFormacion);

		$.ajax({
			type: 'POST',
			url: 'getDataNivelFormacion',
			dataType: "json",
			data: {
				id: idNivelFormacion
			},
			success(response) {
				var nivel = jQuery.parseJSON(JSON.stringify(response));
				console.log(nivel);
				$('#txt_upd_id_nivel_programa_formacion').val(nivel.id_nivel_programa_formacion);
				$('#txt_upd_name_nivel_programa_formacion').val(nivel.name_nivel_programa_formacion);
				$('#txt_upd_duracion').val(nivel.duracion);
			}
		});
	});
</script>
