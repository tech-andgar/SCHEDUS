
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
                <div class="table-responsive">
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
									<div class="updateDataTrimestresPrograma" data-toggle="modal" data-target="#Actualizar_TrimestresPrograma" id-trimestre="<?php echo $trimestre->id_trimestre; ?>">
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
                <h3 class="col-11 modal-title text-center">Agregar Nuevo Programa</h3>
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
									<h3> Trimestres de Programas de Formacion</h3>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-3 offset-lg-2 col-md-8 ">
									<h4 for="codig">Trimestre</h4>
									<small id="helpIdNumFicha" class="text-muted">Escriba Codigo del Programa</small>
								</div>
								<div class="col-lg-6 col-12">
									<input type="text" name="txt_upd_cod_programa" id="txt_upd_cod_programa" class="form-control">
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-3 offset-lg-2 col-md-8 ">
									<h4 for="short_name_programa">Inicio</h4>
									<small id="helpIdNumFicha" class="text-muted">Escriba las Sigals del Programa</small>
								</div>
								<div class="col-lg-6 col-12">
									<input name="txt_upd_short_name_programa"  class="datapicker form-control">
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-3 offset-lg-2 col-md-8 ">
									<h4 for="name_Programa_formacion">Fin</h4>
									<small id="helpIdNumFicha" class="text-muted">Escriba Programa de Formacion</small>
								</div>
								<div class="col-lg-6 col-12">
									<input  name="txt_upd_name_programa_formacion"  class="datapicker form-control">
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
</div>
<!-- Modal Actualizar TrimestresPrograma -->
<div class="modal fade" id="Actualizar_TrimestresPrograma" tabindex="-1" role="dialog" aria-hidden="true">
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
</div>>
</div>

<script>
    $(document).ready(function () {

        $("#tableTrimestre").DataTable({
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
                "<'row'<'col-sm-4'><'col-sm-8'i><'col-sm-4'><'col-sm-6'p>>" +
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