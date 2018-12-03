<!-- Contenido Principal -->
<main class="main">
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Inicio</li>
        <li class="breadcrumb-item"><a href="#">Lider</a></li>
        <li class="breadcrumb-item active">Fusionar Fichas</li>
    </ol>
    <div class="container-fluid">
        <!-- Ejemplo de tabla Listado -->
        <div class="card">
            <div class="card-header ">
                <i class="fa fa-align-justify"></i> Fusionar Fichas
            </div>
            <form>
                <div class="card-body row">
                    <div class="col-6">
                        <h4>Ficha 1 :</h4>
                        <table class="table table-responsive-sm table-bordered table-striped table-sm mt-5" id="tableInstructores">
                            <thead>
                                <tr class="success">
                                    <th class="">Ficha</th>
                                    <th class="">Grupo</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                <tr>
                                    <td class="">1320652</td>
                                    <td class="">G2</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-6">
                        <h4>Ficha 2 :</h4>
                        <table class="table table-responsive-sm table-bordered table-striped table-sm mt-5" id="tableInstructores">
                            <thead>
                                <tr class="success">
                                    <th class="">Ficha</th>
                                    <th class="">Grupo</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                <tr>
                                    <td class="">1320652</td>
                                    <td class="">G3</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="container-fluid">
                        <div class="row pt-2">
                            <div class="col-lg-2  col-sm-5  col-12">
                                <h5> Nueva ruta de Ficha: </h5>
                            </div>
                            <div class="col-lg-4 col-sm-7 col-12">
                                <input type="text" class="form-control" name="ruta" />
                            </div>
                        </div>
                        <div class="mr-2">
                            <button class="btn-rounded" type="submit">Fusionar</button>
                        </div>
                    </div>

            </form>
        </div>
        <!-- Fin ejemplo de tabla Listado -->
    </div>
    <!-- Fin del modal Eliminar -->
</main>
<!-- /Fin del contenido principal -->
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