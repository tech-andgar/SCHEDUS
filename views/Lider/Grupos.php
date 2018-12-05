<!-- Contenido Principal -->
<main class="main">
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Inicio</li>
        <li class="breadcrumb-item"><a href="#">Lider</a></li>
        <li class="breadcrumb-item active">Grupos de Formacion</li>
    </ol>
    <div class="container-fluid">
        <!-- Ejemplo de tabla Listado -->

        <div class="row">
            <div class="col-xl-6 col-lg-12">
                <div class="card">
                    <div class="card-header ">
                        <i class="fa fa-align-justify"></i> Ruta de Ficha
                        <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#modalAgregarRutaFicha">
                            <i class="icon-plus "></i>&nbsp;Nuevo
                        </button>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-responsive-sm table-sm mt-5" id="tableGrupos">
                            <thead>
                                <th>Ruta Ficha</th>
                                <th>Jornada</th>
                                <th class="text-center">Actualizar</th>
                            </thead>
                            <tbody>
                                <?php
                                        foreach ($data['rutaFichasjornadas'] as $rutaFichasjornadas):
                                        ?>
                                <tr>
                                    <td>
                                        <?php echo $rutaFichasjornadas->name_ruta_ficha; ?>
                                    </td>
                                    <td>
                                        <?php echo $rutaFichasjornadas->name_jornada; ?>
                                    </td>
                                    <td class="text-center">
                                        <div class="updateDataGrupoFicha" data-toggle="modal" data-target="#ActualizarGrupoFicha"
                                            id-Grupo="<?php echo $rutaFichasjornadas->id_ruta_ficha ?>">
                                            <i class="far fa-edit fa-lg"></i>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-12">
                <div class="card">
                    <div class="card-header ">
                        <i class="fa fa-align-justify"></i> Grupos
                        <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#modalAgregargrupo">
                            <i class="icon-plus "></i>&nbsp;Nuevo
                        </button>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-responsive-sm table-sm mt-5" id="tableGrupo">
                            <thead>
                                <th>Ruta Ficha</th>
                                <th>Ficha</th>
                                <th>Grupo</th>
                                <th class="text-center">Actualizar</th>
                            </thead>
                            <tbody>
                                <?php
                                        foreach ($data['v_ruta_ficha'] as $v_ruta_ficha):
                                        ?>
                                <tr>
                                    <td>
                                        <?php echo $v_ruta_ficha->name_ruta_ficha; ?>
                                    </td>
                                    <td>
                                        <?php echo $v_ruta_ficha->num_ficha; ?>
                                    </td>
                                    <td>
                                        <?php echo $v_ruta_ficha->num_grupo; ?>
                                    </td>
                                    <td class="text-center">
                                        <div class="updateDataGrupoFicha" data-toggle="modal" data-target="#ActualizarGrupo"
                                            id-Grupo="<?php echo $v_ruta_ficha->id_ruta_ficha ?>">
                                            <i class="far fa-edit fa-lg"></i>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
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

<!-- Modal Agregar nueva ruta Ficha-->
<div class="modal fade bd-example-modal-lg" id="modalAgregarRutaFicha" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<div class="col-11">
					<h3 class=" modal-title text-center">Agregar Nueva Ruta Ficha</h3>
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
									<h4>Numero de Ruta Ficha</h4>
								</div>
								<div class="col-lg-8 col-12">
									<input type="number" name="num_ficha" id="num_ficha" class="form-control" aria-describedby="helpIdNumFicha">
									<small id="" class="text-muted">Escriba Numero de la Ruta Ficha
									</small>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-4  col-12">
									<h4>Jornada</h4>
								</div>
								<div class="col-lg-8  col-12">
									<select class="form-control" name="name_jornada" id="selectNewListJornada" style="width:100%"
									required></select>
									<small id="helpIdNumFicha" class="text-muted">Selecciona Jornada de formación</small>
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
<!-- Modal Actualizar ruta grupo-->
<div class="modal fade bd-example-modal-lg" id="ActualizarGrupoFicha" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="col-11 modal-title text-center">Actualizar Datos</h3>
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
									<h4>Numero de Ruta Ficha</h4>
								</div>
								<div class="col-lg-8 col-12">
									<input type="number" name="num_ficha" id="num_ficha" class="form-control" aria-describedby="helpIdNumFicha">
									<small id="" class="text-muted">Escriba Numero de la Ruta Ficha
									</small>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-4  col-12">
									<h4>Jornada</h4>
								</div>
								<div class="col-lg-8  col-12">
									<select class="form-control" name="name_jornada" id="selectNewListJornada" style="width:100%"
									required></select>
									<small id="helpIdNumFicha" class="text-muted">Selecciona Jornada de formación</small>
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



<!-- Modal Agregar nuevo Grupo-->
<div class="modal fade bd-example-modal-lg" id="modalAgregargrupo" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<div class="col-11">
					<h3 class=" modal-title text-center">Agregar Nueva Ruta Ficha</h3>
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
									<h4>Numero de Ruta Ficha</h4>
								</div>
								<div class="col-lg-8 col-12">
									<input type="number" name="num_ficha" id="num_ficha" class="form-control" aria-describedby="helpIdNumFicha">
									<small id="" class="text-muted">Escriba Numero de la Ruta Ficha
									</small>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-4  col-12">
									<h4>Ficha</h4>
								</div>
								<div class="col-lg-8  col-12">
									<select class="form-control" name="name_jornada" id="selectNewListJornada" style="width:100%"
									required></select>
									<small id="helpIdNumFicha" class="text-muted">Selecciona Ficha de Formacion</small>
								</div>
							</div>
                            <div class="row pt-4">
								<div class="col-lg-4 col-12 ">
									<h4>Grupo</h4>
								</div>
								<div class="col-lg-8 col-12">
									<input type="number" name="num_ficha" id="num_ficha" class="form-control" aria-describedby="helpIdNumFicha">
									<small id="" class="text-muted">Escriba Numero de Grupo
									</small>
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
<!-- Modal Actualizar Grupo-->
<div class="modal fade bd-example-modal-lg" id="ActualizarGrupo" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="col-11 modal-title text-center">Actualizar Datos</h3>
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
									<h4>Numero de Ruta Ficha</h4>
								</div>
								<div class="col-lg-8 col-12">
									<input type="number" name="num_ficha" id="num_ficha" class="form-control" aria-describedby="helpIdNumFicha">
									<small id="" class="text-muted">Escriba Numero de la Ruta Ficha
									</small>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-4  col-12">
									<h4>Ficha</h4>
								</div>
								<div class="col-lg-8  col-12">
									<select class="form-control" name="name_jornada" id="selectNewListJornada" style="width:100%"
									required></select>
									<small id="helpIdNumFicha" class="text-muted">Selecciona Ficha de Formacion</small>
								</div>
							</div>
                            <div class="row pt-4">
								<div class="col-lg-4 col-12 ">
									<h4>Grupo</h4>
								</div>
								<div class="col-lg-8 col-12">
									<input type="number" name="num_ficha" id="num_ficha" class="form-control" aria-describedby="helpIdNumFicha">
									<small id="" class="text-muted">Escriba Numero del Grupo
									</small>
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


<script>

		$('#selectNewListJornada').select2({
			theme: 'bootstrap4',
			ajax: {
				url: 'getDataJornada',
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
						obj.id = obj.id || obj.id_jornada; // replace pk with your identifier
						obj.text = obj.text || obj.name_jornada; // replace name with the property used for the text
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
			dropdownParent: $("#modalAgregarRutaFicha"),
		});

</script>