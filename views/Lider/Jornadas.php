<!-- Contenido Principal -->
<main class="main">
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Inicio</li>
        <li class="breadcrumb-item"><a href="#">Lider</a></li>
        <li class="breadcrumb-item active">Jornadas de Formacion</li>
    </ol>
    <div class="container-fluid">
        <!-- Ejemplo de tabla Listado -->
        <div class="card">
            <div class="card-header ">
                <i class="fa fa-align-justify"></i> Jornadas de Formacion
                <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#Agregar">
                    <i class="icon-plus "></i>&nbsp;Nuevo
                </button>
            </div>
            <div class="card-body">
                <table class="table table-responsive-sm table-striped table-sm mt-5" id="tableJornada">
                    <thead>
                        <tr class="success">
                            <th>Jornada</th>
                            <th class="text-center">Actualizar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['jornada'] as $jornada) { ?>
                        <tr>
                            <td>
                                <?php echo $jornada->name_jornada; ?>
                            </td>
                            <td class="text-center">
                                <div class="updateDataNivelFormacion" data-toggle="modal" data-target="#Actualizar_Jornada"
                                    id-jornada="<?php echo $jornada->id_jornada; ?>">
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
        <!-- Fin ejemplo de tabla Listado -->
    </div>
    <!-- Fin del modal Eliminar -->
</main>
<!-- /Fin del contenido principal -->
</div>

<!-- Modal Actualizar-->
<div class="modal fade bd-example-modal-lg" id="Actualizar_Jornada" tabindex="-1" role="dialog" aria-hidden="true">
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
                    <form method="post" action="#" class="form-signin form-modal">
                        <div class="container-fluid">
                            <div class="row pt-4">
                                <div class="col-12">
                                    <h3> Jornada de Formacion</h3>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-lg-4 col-12">
                                    <h4 for="codig">Jornada</h4>
                                    <small id="helpIdNumFicha" class="text-muted">Escriba la jornada</small>
                                </div>
                                <div class="col-lg-8 col-12">
                                    <input type="text" name="txt_upd_cod_programa" id="txt_upd_cod_programa" class="form-control">
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
<!-- Modal Agregar nuevo Programa-->
<div class="modal fade bd-example-modal-lg" id="Agregar" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-11">
                    <h3 class="modal-title text-center">Agregar Nueva Jornada</h3>
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
                                    <h3> Jornada de Formacion</h3>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-lg-4 col-12">
                                    <h4 for="codig">Jornada</h4>
                                    <small id="helpIdNumFicha" class="text-muted">Escriba la jornada</small>
                                </div>
                                <div class="col-lg-8 col-12">
                                    <input type="text" name="txt_upd_cod_programa" id="txt_upd_cod_programa" class="form-control">
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

        $("#tableJornada").DataTable({
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