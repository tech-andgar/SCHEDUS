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
									<textarea name="proyect" id="proyect" class="form-control" aria-describedby="helpIdNumFicha" rows="5" ></textarea>
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
<!-- Modal Actualizar-->
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
									<textarea class="form-control" name="txt_upd_proyecto" id="txt_upd_proyecto" aria-describedby="helpIdNumFicha" rows="5" ></textarea>
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
