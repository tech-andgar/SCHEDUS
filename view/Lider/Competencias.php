<div class="col-lg-10 col-md-8 col-12">
	<div class="row justify-content-center ">
		<div class="col-md-12">
			<br>
			<h4 class="text-center mb-1">Administrar competencias de programas de formación</h4>
			<hr>
			<div data-toggle="modal" data-target="#Agregar" class=" text-center">
				<input type="button" value="Agregar Nueva Ficha" class="btn-rounded">
			</div>
			<br>
			<div class="row d-flex justify-content-center">
				<table class="col-lg-12 table table-responsive table-hover table-condensed" id="tabla_horario">
					<thead>
						<tr class="success">
							<th class="">Programa</th>
							<th class="text-center">Estado</th>
							<th class="text-center">Actualizar</th>
						</tr>
					</thead>
					<tbody class="">
						<tr>
							<td class="">Análisis y Diseño de Sistemas de Información</td>
							<td>
								Definir los requerimientos necesarios para construir el sistema de información de acuerdo con las necesidades
								del cliente.
							</td>
							<td style="
									padding-bottom: 0px;
									padding-top: 10px;">
								<div data-toggle="modal" data-target="#Actualizar" class=" text-center">
									<i class="far fa-edit fa-2x"></i>
								</div>
							</td>
						</tr>
						<tr>
							<td class="">Implementacion de sistemas de informacion geografica</td>
							<td>
								Analizar los requerimientos del cliente para construir el sistema de información
							</td>
							<td style="
									padding-bottom: 0px;
									padding-top: 10px;">
								<div data-toggle="modal" data-target="#Actualizar" class=" text-center">
									<i class="far fa-edit fa-2x"></i>
								</div>
							</td>
						</tr>
						<tr>
							<td class="">Seguridad en gestion de bases de datos</td>
							<td>
								Diseñar el sistema de acuerdo con los requerimientos del cliente
							</td>
							<td style="
									padding-bottom: 0px;
									padding-top: 10px;">
								<div data-toggle="modal" data-target="#Actualizar" class=" text-center">
									<i class="far fa-edit fa-2x"></i>
								</div>
							</td>
						</tr>
						<tr>
							<td class="">Tecnico de programacion de software</td>
							<td>
								Desarrollar el sistema de información que cumpla con los requerimientos de la solución informática
							</td>
							<td style="
									padding-bottom: 0px;
									padding-top: 10px;">
								<div data-toggle="modal" data-target="#Actualizar" class=" text-center">
									<i class="far fa-edit fa-2x"></i>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<br>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="Actualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
 aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
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
						<h5>Nombre del Programa</h5>
						<input type="text" class="adsi-css" style="width:80%; height:30px" name="dni" />
						<br>
						<br>
						<hr>
						<button class="btn-rounded" type="submit" style="width:110px">Actualizar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal Agregar nueva Competencias-->
<div class="modal fade" id="Agregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h3 class="modal-title text-center" id="exampleModalLongTitle">Agregar Nueva Competencia</h3>
				</div>
			</div>
			<div class="modal-body">
				<div class="d-flex justify-content-center text-center">
					<form method="post" action="#" class="form-signin">
						<h5>Numero de la Ficha</h5>
						<input type="text" class="adsi-css" style="width:80%; height:30px" name="dni" />
						<br>
						<br>
						<h5>Nombre Competencia</h5>
						<input type="text" class="adsi-css" style="width:80%; height:30px" name="dni" />
						<br>
						<br>
						<hr>
						<button class="btn-rounded" type="submit" style="width:110px">Agregar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>