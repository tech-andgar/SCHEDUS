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
                    data-toggle="modal" data-target="#AgregarAmbiente">
                    <i class="icon-plus "></i>&nbsp;Nuevo
                </button>
            </div>
            <div class="card-body">
                    <table class="table table-responsive-sm table-bordered table-striped table-sm mt-5" id="tableAmbiente">
                    <thead>
					<tr class="success">
							<th>Ambiente</th>
                            <th>Sede</th>
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
                                    <?php
								    switch ($ambiente->name_estado_ambiente) {
									case 'Inactivo':
										echo '<div class="p-2 bg-danger text-white rounded">' . $ambiente->name_estado_ambiente . '</div>';
    									break;
									case 'Activo':
										echo '<div class="p-2 bg-success text-white rounded">' . $ambiente->name_estado_ambiente . '</div>';
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
<div class="modal fade  bd-example-modal-lg" id="AgregarAmbiente" tabindex="-1" role="dialog" aria-hidden="true">
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
                    <form method="post" action="insertaAmbienteFormacion" class="form-signin form-modal">
                    <div class="container-fluid">
                            <div class="row pt-4">
                                <div class="col-12">
                                    <h3> Aula de Formacion</h3>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-lg-4 col-12">
                                    <h4 for="codig">Ambiente</h4>
                                </div>
                                <div class="col-lg-8 col-12">
                                    <input type="text" name="num_ambiente" id="num_ambiente" class="form-control">
                                    <small id="helpIdNumFicha" class="text-muted">Numero de Ambiente</small>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-lg-4 col-12">
                                    <h4 for="codig">Sede</h4>
                                </div>
                                <div class="col-lg-8 col-12">
                                    <select class="form-control" name="name_sede" id="SelectListSede" style="width:100%"required></select>
                                    <small id="helpIdNumFicha" class="text-muted">Nombre de la sede</small>
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
<!-- Modal Actualizar Ambiente-->
<div class="modal fade bd-example-modal-lg" id="Actualizar_Ambiente" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="col-11 modal-title">Actualizar Datos</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-center">
                    <form method="post" action="#" class="form-signin form-modal">
                    <div class="container-fluid">
                            <div class="row pt-4">
                                <div class="col-12">
                                    <h3> Aula de Formacion</h3>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-lg-4 col-12">
                                    <h4 for="ambiente">Ambiente</h4>
                                </div>
                                <div class="col-lg-8 col-12">
                                    <input id="txt_upd_id_ambiente" type="number" name="txt_upd_id_ambiente" value="" hidden>
                                    <input type="text" name="txt_upd_num_ambiente" id="txt_upd_num_ambiente" class="form-control">
                                    <small id="helpIdNumFicha" class="text-muted">Numero de Ambiente</small>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-lg-4 col-12">
                                    <h4 for="sede">Sede</h4>
                                </div>
                                <div class="col-lg-8 col-12">
                                    <select class="form-control" name="txt_upd_cod_sede" id="selectUpdListSede" style="width:100%"
									required></select>
                                    <small id="helpIdNumFicha" class="text-muted">Nombre de la sede</small>
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

		$('#SelectListSede').select2({
			theme: 'bootstrap4',
			ajax: {
				url: 'getDataSede',
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
						obj.id = obj.id || obj.id_sede; // replace pk with your identifier
						obj.text = obj.text || obj.name_sede; // replace name with the property used for the text

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
			dropdownParent: $("#AgregarAmbiente"),
        });
});
        $(".updateDataAmbiente").click(function () {
            var idambiente = $(this).attr('id-ambiente');
            console.log(idambiente);
            $.ajax({
                type: 'POST',
                url: 'getDataAmbiente',
                dataType: "json",
                data: {
                    id: idambiente
                },
                success(response) {
                    console.log(response);
                    var ambiente = jQuery.parseJSON(JSON.stringify(response));
                    console.log(ambiente);
                    $('#txt_upd_id_ambiente').val(ambiente.id_ambiente);
                    $('#txt_upd_num_ambiente').val(ambiente.num_ambiente);
                    $('#txt_upd_cod_sede').val(ambiente.cod_sede);

                // FUNCTION
				//
				// Call AJAX getDataSede() to SELECT ON FORM UPDATE
				$('#selectUpdListSede').select2({
					theme: 'bootstrap4',
					ajax: {
						url: 'getDataSede',
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
								obj.id = obj.id || obj.id_sede; // replace pk with your identifier
								obj.text = obj.text || obj.name_sede; // replace name with the property used for the text
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
					dropdownParent: $("#Actualizar_Ambiente"),
				});

				// PRE-SELECTED selectUpdListCompetencia
				// Fetch the preselected item, and add to the control
				var SedeSelect = $('#selectUpdListSede');
				// create the option and append to Select2
				var option = new Option(ambiente.name_sede, ambiente.name_sedecod_sede, true, true);
				SedeSelect.append(option).trigger('change');

				// manually trigger the `select2:select` event
				SedeSelect.trigger({
					type: 'select2:select'
				});
				// END PRE-SELECTED SelectUpdListEstadoCompetencia

				// END FUNCTIONS
			}
		});
	});


</script>