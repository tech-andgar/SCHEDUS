    <!-- NAVBAR -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light" style="background-color:#EC7C38;">
        <div class="container">
            <h1>
                <a class="navbar-brand" href="?c=instructor">
                    SCHEDUS
                </a>
            </h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse col-12 col-md-10" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="btn btn-outline-light my-2 my-sm-0" href="index.php?c=instructor">Diponibilidad</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav ml-auto">
                    <li>
                        <a class="btn btn-outline-light my-2 mr-3  my-sm-0" href="#" data-toggle="modal" data-target="#Perfil">Instructor</a>
                    </li>
                    <li>
                        <a class="btn btn-outline-light my-2 my-sm-0" href="?c=security&m=destroy">Cerrar sesion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- END HEADER -->

    <!-- Modal -->
    <div class="modal fade" id="Actualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h3 class="modal-title text-center" id="exampleModalLongTitle">Actualizar Datos</h3>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-center text-center">
                        <form method="post" action="#" class="form-signin">
                            <h5>Numero de la Ficha</h5>
                            <input type="text" class="adsi-css mb-3" style="width:80%; height:30px" name="dni" />
                            <hr>
                            <button class="btn-rounded" type="submit" style="width:110px">Actualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Agregar nueva Ficha-->
    <div class="modal fade" id="Agregar_Ficha" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h3 class="modal-title text-center" id="exampleModalLongTitle">Agregar Nueva Ficha</h3>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-center text-center">
                        <form method="post" action="#" class="form-signin">
                            <h5>Numero de la Ficha</h5>
                            <input type="text" class="adsi-css mb-3" style="width:80%; height:30px" name="dni" />
                            <div class="row">
                                <div class="col-lg-4">
                                    <h4>Grupo:</h4>
                                    <select class="adsi-css" required>
                                        <option value="tab">G1</option>
                                        <option value="tab">G2</option>
                                        <option value="tab">G3</option>
                                        <option value="tab">G4</option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <h4>Competencia:</h4>
                                    <select class="adsi-css" required>
                                        <option value="">Seleccione un Programa</option>
                                        <option value="tab">ADSI</option>
                                        <option value="tab">DIM</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <button class="btn-rounded" type="submit" style="width:110px">Agregar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Agregar nuevo Grupo-->
    <div class="modal fade" id="Agregar_Grupo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h3 class="modal-title text-center" id="exampleModalLongTitle">Agregar Nuevo Grupo</h3>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-center text-center">
                        <form method="post" action="#" class="form-signin">
                            <h5>Grupo</h5>
                            <input type="text" class="adsi-css mb-3" style="width:80%; height:30px" name="dni" />
                            <hr>
                            <button class="btn-rounded" type="submit" style="width:110px">Agregar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Fusionar-->
    <div class="modal fade" id="Fusionar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h3 class="modal-title text-center" id="exampleModalLongTitle">Fusionar Fichas</h3>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-center text-center">
                        <form>
                            <div class="row d-flex justify-content-center">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                    <h4>Ficha 1 :</h4>
                                    <select class="adsi-css" required>
                                        <option value="">Seleccione una ficha</option>
                                        <option value="tab">8975312</option>
                                        <option value="tab">1320652 G1</option>
                                        <option value="tab">1320652 G2</option>
                                        <option value="tab">1320652 G3</option>
                                        <option value="tab">1320652 G4</option>
                                        <option value="tab">2349858</option>
                                        <option value="tab">1320652 G1</option>
                                        <option value="tab">1320652 G2</option>
                                        <option value="tab">1320652 G3</option>
                                        <option value="tab">1878465</option>
                                        <option value="tab">1328798 G1</option>
                                        <option value="tab">1328798 G2</option>
                                        <option value="tab">1328798 G3</option>
                                    </select>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 mb-5">
                                    <h4>Ficha 2 :</h4>
                                    <select class="adsi-css" required>
                                        <option value="">Seleccione una ficha</option>
                                        <option value="tab">8975312</option>
                                        <option value="tab">1320652 G1</option>
                                        <option value="tab">1320652 G2</option>
                                        <option value="tab">1320652 G3</option>
                                        <option value="tab">1320652 G4</option>
                                        <option value="tab">2349858</option>
                                        <option value="tab">1320652 G1</option>
                                        <option value="tab">1320652 G2</option>
                                        <option value="tab">1320652 G3</option>
                                        <option value="tab">1878465</option>
                                        <option value="tab">1328798 G1</option>
                                        <option value="tab">1328798 G2</option>
                                        <option value="tab">1328798 G3</option>
                                    </select>
                                </div>
                                <h5>Nueva ruta de Ficha</h5>
                                <input type="text" class="adsi-css" style="width:60%; height:30px" name="dni" />
                                <div class="col-12">
                                    <button class="mt-5 btn-rounded" type="submit" style="width:80px">Fusionar</button>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Actualizar Programas -->
    <div class="modal fade" id="Actualizar_Prms" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h3 class="modal-title  text-center" id="exampleModalLongTitle">Actualizar Datos</h3>
                    </div>
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
    </div>