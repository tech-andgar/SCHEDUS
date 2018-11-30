
<!-- Contenido Principal -->
<main class="main">
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Inicio</li>
        <li class="breadcrumb-item"><a href="#">Lider</a></li>
        <li class="breadcrumb-item active">Administrar Trimestres de Programas de Formacion</li>
    </ol>
    <div class="container-fluid">
        <!-- Ejemplo de tabla Listado -->
        <div class="card">
            <div class="card-header ">
                <i class="fa fa-align-justify"></i> Administrar Trimestres de Programas de Formacion
                <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#Agregar">
                    <i class="icon-plus "></i>&nbsp;Nuevo
                </button>
            </div>
            <div class="card-body">
                    <table class="table table-responsive-sm table-bordered table-striped table-sm mt-5" id="tableTrimestre">
                        <thead>
						<tr class="success">
							<th class="">Trimestre</th>
							<th class="">Inicio</th>
                            <th class="">Fin</th>
							<th class="text-center">Actualizar</th>
						</tr>
                        </thead>
                        <tbody>
							<?php foreach ($data['trimestre'] as $trimestre) { ?>
							<tr>
								<td>
									<?php echo $trimestre->name_trimestre; ?>
								</td>
                                <td>
									<?php echo $trimestre->fecha_inicio; ?>
								</td>
                                <td>
                                    <?php echo $trimestre->fecha_fin; ?>
								</td>
								<td class="text-center">
									<div class="updateDataTrimestresPrograma" data-toggle="modal" data-target="#Actualizar_TrimestresPrograma"
                                    id-trimestre="<?php echo $trimestre->id_trimestre; ?>">
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

<!-- Modal Agregar nueva Competencias-->
<div class="modal fade bd-example-modal-lg" id="Agregar" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-11">
                    <h3 class="modal-title text-center">Agregar Nuevo Trimestre</h3>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-center">
                <form method="post" action="insertarTrimestresPrograma" class="form-signin form-modal">
						<div class="container-fluid">
							<div class="row pt-4">
								<div class="col-12">
									<h3> Trimestres de Programas de Formacion</h3>
								</div>
							</div>
							<div class="row pt-4">
                            <div class="col-lg-4 col-12">
									<h4 >Trimestre</h4>
								</div>
								<div class="col-lg-8 col-12">
                                    <input type="text" name="name_trimestre" id="name_trimestre" class="form-control">
                                    <small id="helpIdNumFicha" class="text-muted">Escriba el Trimestre</small>
								</div>
							</div>
							<div class="row pt-4">
                            <div class="col-lg-4 col-12">
									<h4>Fecha</h4>
								</div>
								<div class="col-lg-8 col-12">
                                    <input type="daterange" class="form-control" id="daterange" name="fecha" value="" />
                                    <small id="helpIdNumFicha" class="text-muted">Selecione fecha de inio y fin </small>
								</div>
							</div>
                        </div>
						<hr>
						<div class="text-center pt-2">
							<button class="btn-rounded " type="submit" >Agregar</button>
						</div>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Actualizar TrimestresPrograma -->
<div class="modal fade bd-example-modal-lg" id="Actualizar_TrimestresPrograma" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg">
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
				<div class="d-flex justify-content-center ">
					<form method="post" action="updateDataTrimestresPrograma" class="form-signin form-modal">
                    <div class="container-fluid">
							<div class="row pt-4">
								<div class="col-12">
									<h3> Trimestres de Programas de Formacion</h3>
								</div>
							</div>
							<div class="row pt-4">
                            <div class="col-lg-4 col-12">
									<h4>Trimestre</h4>
								</div>
								<div class="col-lg-8 col-12">
                                    <input type="number" id="txt_upd_id_trimestre" name="txt_upd_id_trimestre" value="" hidden>
									<input type="text" id="txt_upd_name_trimestre" class="form-control" name="txt_upd_name_trimestre">
									<small id="helpIdNumFicha" class="text-muted">Escriba el Trimestre</small>
								</div>
							</div>
							<div class="row pt-4">
                            <div class="col-lg-4 col-12">
									<h4 for="short_name_programa">Fecha</h4>
								</div>
								<div class="col-lg-8 col-12">
                                    <input type="daterange" id="txt_upd_fecha" class="form-control" name="txt_upd_fecha" value="" />
									<small id="helpIdNumFicha" class="text-muted">Selecione fecha de inio y fin </small>
								</div>
							</div>
                        </div>
                        <hr>
						<div class="text-center pt-2">
							<button class="btn-rounded " type="submit" >Actualizar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>>
</div>

<script>

    $(".updateDataTrimestresPrograma").click(function () {
            var idtrimestre = $(this).attr('id-trimestre');
            console.log(idtrimestre);
            $.ajax({
                type: 'POST',
                url: 'getDataTrimestre',

                data: {
                    id: idtrimestre
                },
                success(response) {
                    console.log(response);
                    var trimestre = jQuery.parseJSON(response);
                    console.log(trimestre);
                    $('#txt_upd_id_trimestre').val(trimestre.id_trimestre);
                    $('#txt_upd_name_trimestre').val(trimestre.name_trimestre);
                    $('#txt_upd_fecha').val(trimestre.fecha_inicio + ' ' + trimestre.fecha_fin );
                }
            });
        });

       
</script>