<div class="col-lg-9 col-md-8 col-12">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<br>
			<h4 class="text-center mb-1">Administrar Trimestres de Programas de Formacion</h4>
			<hr>
			<div class="row d-flex justify-content-center">
				<table class="col-lg-10 table table-responsive table-hover table-condensed" id="tabla_horario">
					<thead>
						<tr class="success">
							<th class="col-sm-1 ">Programa</th>
							<th class="">Estado</th>
							<th class="text-center">Actualizar</th>
						</tr>
					</thead>
					<tbody class="">
						<tr>
							<td class="">Análisis y Diseño de Sistemas de Información</td>
							<td style="
									padding-bottom: 0px;
									padding-top: 10px;">
								<div class="onoffswitch">
									<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="1" checked>
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
						<tr>
							<td class="">Implementacion de sistemas de informacion geografica</td>
							<td style="
									padding-bottom: 0px;
									padding-top: 10px;">
								<div class="onoffswitch">
									<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="2" checked>
									<label class="onoffswitch-label" for="2"></label>
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
						<tr>
							<td class="">Seguridad en gestion de bases de datos</td>
							<td style="
									padding-bottom: 0px;
									padding-top: 10px;">
								<div class="onoffswitch">
									<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="3" checked>
									<label class="onoffswitch-label" for="3"></label>
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
						<tr>
							<td class="">Tecnico de programacion de software</td>
							<td style="
									padding-bottom: 0px;
									padding-top: 10px;">
								<div class="onoffswitch">
									<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="4" checked>
									<label class="onoffswitch-label" for="4"></label>
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