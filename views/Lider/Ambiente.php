<!-- Contenido Principal -->
<main class="main">
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Inicio</li>
        <li class="breadcrumb-item"><a href="#">Lider</a></li>
        <li class="breadcrumb-item active">Aula de Formacion</li>
    </ol>
    <div class="container-fluid">
        <!-- Ejemplo de tabla Listado -->
        <div class="card">
            <div class="card-header ">
                <i class="fa fa-align-justify"></i> Aula de Formacion <button type="button" class="btn btn-primary "
                    data-toggle="modal" data-target="#Agregar">
                    <i class="icon-plus "></i>&nbsp;Nuevo
                </button>
            </div>
            <div class="card-body">
                    <table class="table table-responsive-sm table-bordered table-striped table-sm mt-5" id="tableAmbiente">
                    <thead>
					<tr class="success">
							<th>Ambiente</th>
                            <th>Sede</th>
                            <th>Direccion</th>
                            <th>Estado</th>
							<th class="text-center">Actualizar</th>
						</tr>
					</thead>
					<tbody>
							<?php foreach ($data['ambiente'] as $ambiente) { ?>
							<tr>
								<td>
									<?php echo $ambiente->num_ambiente; ?>
								</td>
                                <td>
									<?php echo $ambiente->name_sede; ?>
								</td>
                                <td>
									<?php echo $ambiente->direccion; ?>
								</td>
                                <td>
                                    <?php
								    switch ($ambiente->name_estado_ambiente) {
									case 'Cancelado':
										echo '<div class="p-2 bg-danger text-white rounded">' . $ambiente->name_estado_ficha . '</div>';
									break;
									case 'Completado':
										echo '<div class="p-2 bg-info text-white rounded">' . $ambiente->name_estado_ficha . '</div>';
									break;
									case 'En formación':
										echo '<div class="p-2 bg-success text-white rounded">' . $ambiente->name_estado_ficha . '</div>';
									break;
									case 'Pendiente Asignado':
										echo '<div class="p-2 bg-warning text-dark rounded">' . $ambiente->name_estado_ficha . '</div>';
									break;
									default:
										echo '<div class="p-2 bg-dark text-white rounded">No pudo obtener estado de formacion ' . $ambiente->name_estado_ficha . '</div>';
									break;
								}?>
								</td>
								<td class="text-center">
									<div class="updateDataAmbiente" data-toggle="modal" data-target="#Actualizar_Ambiente" id-ambiente="<?php echo $ambiente->id_ambiente; ?>">
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
<div class="modal fade  bd-example-modal-lg" id="Agregar" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-11">
                    <h3 class=" modal-title text-center">Agregar Nuevo Aula</h3>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-center ">
                    <form method="post" action="#" class="form-signin form-modal">
                    <div class="container-fluid">
                            <div class="row pt-4">
                                <div class="col-12">
                                    <h3> Aula de Formacion</h3>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-lg-4 col-12">
                                    <h4 for="codig">Ambiente</h4>
                                    <small id="helpIdNumFicha" class="text-muted">Numero de Ambiente</small>
                                </div>
                                <div class="col-lg-8 col-12">
                                    <input type="text" name="txt_upd_cod_programa" id="txt_upd_cod_programa" class="form-control">
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-lg-4 col-12">
                                    <h4 for="codig">Sede</h4>
                                    <small id="helpIdNumFicha" class="text-muted">Nombre de la sede</small>
                                </div>
                                <div class="col-lg-8 col-12">
                                <select class="form-control" name="" id="" style="width:100%"
									required></select>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-lg-4 col-12">
                                    <h4 for="codig">Direccion</h4>
                                    <small id="helpIdNumFicha" class="text-muted">Direccion de la sede</small>
                                </div>
                                <div class="col-lg-8 col-12">
                                    <input type="text" name="txt_upd_cod_programa" id="txt_upd_cod_programa" class="form-control" readonly>
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
<div class="modal fade bd-example-modal-lg" id="Actualizar_Ambiente" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="col-11 modal-title text-center">Actualizar Datos</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-center text-center">
                    <form method="post" action="#" class="form-signin form-modal">
                    <div class="container-fluid">
                            <div class="row pt-4">
                                <div class="col-12">
                                    <h3> Aula de Formacion</h3>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-lg-4 col-12">
                                    <h4 for="codig">Ambiente</h4>
                                    <small id="helpIdNumFicha" class="text-muted">Numero de Ambiente</small>
                                </div>
                                <div class="col-lg-8 col-12">
                                    <input type="text" name="txt_upd_cod_programa" id="txt_upd_cod_programa" class="form-control">
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-lg-4 col-12">
                                    <h4 for="codig">Sede</h4>
                                    <small id="helpIdNumFicha" class="text-muted">Nombre de la sede</small>
                                </div>
                                <div class="col-lg-8 col-12">
                                <select class="form-control" name="" id="" style="width:100%"
									required></select>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-lg-4 col-12">
                                    <h4 for="codig">Direccion</h4>
                                    <small id="helpIdNumFicha" class="text-muted">Direccion de la sede</small>
                                </div>
                                <div class="col-lg-8 col-12">
                                    <input type="text" name="txt_upd_cod_programa" id="txt_upd_cod_programa" class="form-control" readonly>
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

        $(".statusChange").click(function () {
            var statetext = $(this).attr('name-state');
            var state_id = $(this).attr('id-state');
            var id_programa = $(this).attr('id-programa');
            $.ajax({
                type: 'POST',
                url: '?c=Lider&m=changeStatusPrograma',
                data: {
                    statetext: statetext,
                    state_id: state_id,
                    id_programa: id_programa
                },
                success(response) {
                    location.reload();
                }
            });
        });

        $(".updateDataPrograma").click(function () {
            var id_programa = $(this).attr('id-programa');
            $.ajax({
                type: 'POST',
                url: '?c=Lider&m=getDataPrograma',
                dataType: "json",
                data: {
                    id_programa: id_programa
                },
                success(response) {
                    var programa = jQuery.parseJSON(JSON.stringify(response));
                    $('#text-dni').val(programa.dni);
                    $('#text-nombre').val(programa.nombre);
                    $('#text-apellido').val(programa.apellido);
                    $('#text-email').val(programa.email);
                }
            });
        });

    });
</script>