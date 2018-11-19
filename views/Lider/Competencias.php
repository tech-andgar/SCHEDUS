<main class="main">
	<!-- Breadcrumb -->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">Inicio</li>
		<li class="breadcrumb-item"><a href="#">Lider</a></li>
		<li class="breadcrumb-item active">Administrar competencias de programas de formación</li>
	</ol>
	<div class="container-fluid">
		<!-- Ejemplo de tabla Listado -->
		<div class="card">
			<div class="card-header ">
				<i class="fa fa-align-justify"></i> Administrar competencias de programas de formación
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
				<div class="table-responsive">
                    <table class="table table-responsive-sm table-bordered table-striped table-sm mt-5" id="tableInstructores">
					<thead>
					<tr class="success">
							<th class="">Programa</th>
							<th class="text-center">Competencia</th>
							<th class="text-center">Estado</th>
							<th class="text-center">Actualizar</th>
						</tr>
					</thead>
					<tbody class="">
						<tbody class="">
						<tr>
							<td class="">Análisis y Diseño de Sistemas de Información</td>
							<td>
								Definir los requerimientos necesarios para construir el sistema de información de acuerdo con las necesidades
								del cliente.
							</td>
							<td>
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="1"
                                            checked>
                                        <label class="onoffswitch-label" for="1"></label>
                                    </div>
                                </td>
							<td style="
									padding-bottom: 0px;
									padding-top: 10px;">
								<div data-toggle="modal" data-target="#Actualizar" class=" text-center">
									<i class="far fa-edit fa-lg"></i>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div></div>
		</div>
		<!-- Fin ejemplo de tabla Listado -->
	</div>
	<!-- Modal Agregar nueva Competencias-->
<div class="modal fade" id="Agregar" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="col-11 modal-title text-center">Agregar Nueva Competencia</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="d-flex justify-content-center text-center">
					<form method="post" action="#" class="form-signin">
						<h5>Seleccione del Programa</h5>
						<select class="adsi-css mb-3" style="width:65%; height:30px" required>
							<option value="">Seleccione del Programa</option>
							<option value="ADSI">Analisis de sistema de informacion</option>
							<option value="ISIG">Implementacion de sistemas de informacion geografica</option>
							<option value="SGBD">Seguridad en gestion de bases de datos</option>
							<option value="PS">Tecnico de programacion de software</option>
						</select>
						<h5>Nombre de la Competencia</h5>
						<textarea class="form-control" aria-label="With textarea" placeholder="Nombre de la Competencia" required></textarea>
						<hr>
						<button class="btn-rounded" type="submit" style="width:110px">Agregar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

	<!-- Modal -->
<div class="modal fade" id="Actualizar" tabindex="-1" role="dialog" aria-hidden="true">
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
						<h5>Nombre de la Competencia</h5>
						<input type="text" class="adsi-css mb-3" style="width:80%; height:30px" name="dni" />
						<hr>
						<button class="btn-rounded" type="submit" style="width:110px">Actualizar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</main>
<!-- /Fin del contenido principal -->
</div>