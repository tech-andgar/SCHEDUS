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
                                <div class="updateDataJornada" data-toggle="modal" data-target="#Actualizar_Jornada"
                                id-Jornada="<?php echo $jornada->id_jornada; ?>">
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
                    <form method="post" action="updateDataJornada" class="form-signin form-modal">
                        <div class="container-fluid">
                            <div class="row pt-4">
                                <div class="col-12">
                                    <h3> Jornada de Formacion</h3>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-lg-4 col-12">
                                    <h4 for="Jornada">Jornada</h4>
                                </div>
                                <div class="col-lg-8 col-12">
                                    <input id="txt_upd_id_jornada" type="number" name="txt_upd_id_jornada" value="" hidden>
                                    <input type="text" name="txt_upd_name_jornada" id="txt_upd_name_jornada" class="form-control">
                                    <small id="helpIdNumFicha" class="text-muted">Escriba la jornada</small>
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
<!-- Modal Agregar nueva Jornada-->
<div class="modal fade bd-example-modal-lg" id="Agregar" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-11">
                    <h3 class="modal-title text-center">Agregar Nueva Jornada de Formacion</h3>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-center ">
                    <form method="post" action="insertarJornada" class="form-signin form-modal">
                        <div class="container-fluid">
                            <div class="row pt-4">
                                <div class="col-12">
                                    <h3> Jornada de Formacion</h3>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-lg-4 col-12">
                                    <h4 for="name_jornada">Jornada</h4>
                                </div>
                                <div class="col-lg-8 col-12">
                                    <input type="text" name="name_jornada" id="name_jornada" class="form-control">
                                    <small id="helpIdNumJornada" class="text-muted">Escriba la jornada</small>
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

    $(".updateDataJornada").click(function () {
            var idJornada = $(this).attr('id-Jornada');
            console.log(idJornada);

            $.ajax({
                type: 'POST',
                url: 'getDataJornada',
                dataType: "json",
                data: {
                    id: idJornada
                },
                success(response) {
                    console.log(response);
                    var jornada = jQuery.parseJSON(JSON.stringify(response));
                    console.log(jornada);
                    $('#txt_upd_id_jornada').val(jornada.id_jornada);
                    $('#txt_upd_name_jornada').val(jornada.name_jornada);
                }
            }).fail(function( jqXHR, textStatus ) {
                console.log( "Request failed: " + textStatus );
            });
        });
</script>