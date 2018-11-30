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
        <div class="card">
            <div class="card-header ">
                <i class="fa fa-align-justify"></i> Grupos de Formacion
                <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#Agregar">
                    <i class="icon-plus "></i>&nbsp;Nuevo
                </button>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <div class="col-md-6">
                        <div class="input-group">
                            <input type="text" id="texto" name="texto" class="form-control" placeholder="Texto a buscar">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
                        </div>
                    </div>
                </div>
                    <table class="table table-bordered table-striped table-responsive-sm table-sm mt-5" id="tableGrupos">
                        <thead>
                            <th>Id Ruta</th>
                            <th>Ruta Ficha</th>
                            <th>Ficha</th>
                            <th>Grupo</th>
                            <th class="text-center">Actualizar</th>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($data['rutaFichas'] as $rutaFicha):
                                    require_once './models/grupoModel.php';
                                    $fichas = GrupoModel::getGrupoIdRutaFicha($rutaFicha->id_ruta_ficha);
                                    // var_dump($fichas);
                                    $rowSpan = count($fichas);
                                ?>


                            <tr>
                            <tr>
                                <td rowspan="<?php echo $rowSpan; ?>">
                                    <?php echo $rutaFicha->id_ruta_ficha; ?>
                                </td>
                                <td rowspan="<?php echo $rowSpan; ?>">
                                    <?php echo $rutaFicha->num_ruta_ficha; ?>
                                </td>
                                <?php foreach ($fichas as $ficha) : ?>
                                <td>
                                    <?php echo $ficha->num_ficha; ?>
                                </td>
                                <td>
                                    <?php echo $ficha->num_grupo; ?>
                                </td>
                                <td class="text-center">
                                    <div class="updateDataGrupoFicha" data-toggle="modal" data-target="#ActualizarGrupoFicha"
                                        id-Grupo="<?php echo $ficha->id_grupo ?>">
                                        <i class="far fa-edit fa-lg"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <?php echo $ficha->num_ficha; ?>
                                </td>
                                <td>
                                    <?php echo $ficha->num_grupo; ?>
                                </td></tr>
                                <td class="text-center">
                                    <div class="updateDataGrupoFicha" data-toggle="modal" data-target="#ActualizarGrupoFicha"
                                        id-Grupo="<?php echo $ficha->id_grupo ?>">
                                        <i class="far fa-edit fa-lg"></i>
                                    </div>
                                </td>
                            </tr>
                                <?php endforeach; ?>
                            </tr>
                            <?php endforeach; ?>

                            <!-- <tr>
                                        <td rowspan="2">1</td>
                                        <td rowspan="2">123210 G1-G2-G3</td>
                                        <td rowspan="2">123210</td>
                                        <td>G1</td>
                                        <td class="text-center">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>G2</td>
                                        <td class="text-center">
                                        </td>
                                    </tr> -->
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
<div class="modal fade" id="Agregar" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="col-11 modal-title text-center">Agregar Nuevo Programa</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-center text-center">
                    <form method="post" action="#" class="form-signin form-modal">
                        <h5>Nombre del Programa</h5>
                        <input type="text" class="adsi-css mb-3" name="Programa" />
                        <hr>
                        <button class="btn-rounded" type="submit" style="width:110px">Agregar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="Actualizar_Grupo" tabindex="-1" role="dialog" aria-hidden="true">
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
                    <form method="post" action="#" class="form-signin form-modal">
                        <h5>Nombre del Programa</h5>
                        <input type="text" class="adsi-css mb-3" style="width:80%; height:30px" name="dni" />
                        <hr>
                        <button class="btn-rounded" type="submit" style="width:110px">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {

    // $(".statusChange").click(function () {
    //     var statetext = $(this).attr('name-state');
    //     var state_id = $(this).attr('id-state');
    //     var id_programa = $(this).attr('id-programa');
    //     $.ajax({
    //         type: 'POST',
    //         url: '?c=Lider&m=changeStatusPrograma',
    //         data: {
    //             statetext: statetext,
    //             state_id: state_id,
    //             id_programa: id_programa
    //         },
    //         success(response) {
    //             location.reload();
    //         }
    //     });
    // });

    // $(".updateDataGrupo").click(function () {
    //     var id_programa = $(this).attr('id-programa');
    //     $.ajax({
    //         type: 'POST',
    //         url: '?c=Lider&m=getDataPrograma',
    //         dataType: "json",
    //         data: {
    //             id_programa: id_programa
    //         },
    //         success(response) {
    //             var programa = jQuery.parseJSON(JSON.stringify(response));
    //             $('#text-dni').val(programa.dni);
    //             $('#text-nombre').val(programa.nombre);
    //             $('#text-apellido').val(programa.apellido);
    //             $('#text-email').val(programa.email);
    //         }
    //     });
    });

    });
</script>