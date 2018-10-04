<div class="col-lg-9 col-md-8 col-12">
<div class="row">
	<div class="col-md-12">
			<h4 class="text-center my-4">Administrar Fichas de programas de formación</h4>
			<hr>
	</div>
	<div class="col-lg-4 col-md-6 col-12 mt-2">
			<div data-toggle="modal" data-target="#Agregar_Ficha" class=" text-center" >
				<button class="btn-rounded"><i class="fas fa-plus-circle"></i> 	Agregar Nueva Ficha</button>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-12 mt-2">
			<div data-toggle="modal" data-target="#Agregar_Grupo" class=" text-center" >
				<button class="btn-rounded"><i class="fas fa-plus-circle"></i> 	Agregar Nuevo Grupo</button>
			</div>
		</div>
		<div class="col-lg-4 col-md-12 col-12 mt-2">
			<div data-toggle="modal" data-target="#Fusionar" class=" text-center" >
				<button class="btn-rounded"><i class="fas fa-compress-alt"></i>	Fusionar</button>
			</div>
	</div>
</div>
	<div class="mt-5 row justify-content-center">
		<div class="col-md-12">
			<div class="row d-flex justify-content-center">
				<table class="col-lg-9 table table-responsive table-hover table-condensed" id="tabla_horario">
					<thead>
						<tr class="success">
							<th class="col-sm-1 ">Ficha</th>
							<th>Grupo</th>
							<th class="">Estado</th>
							<th class="text-center">Actualizar</th>
						</tr>
					</thead>
					<tbody class="">
						<tr>
							<td class="">1320652</td>
							<td>G1</td>
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
								<div data-toggle="modal" data-target="#Actualizar">
									<i class="far fa-edit fa-lg"></i>
								</div>
							</td>
						</tr>
						<tr>
							<td class="">8794512</td>
							<td>G2</td>
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
								<div data-toggle="modal" data-target="#Actualizar">
									<i class="far fa-edit fa-lg"></i>
								</div>
							</td>
						</tr>
						<tr>
							<td class="">5649895</td>
							<td>G3</td>
							<td style="
									padding-bottom: 0px;
									padding-top: 10px;">
								<div class="onoffswitch">
									<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
									<label class="onoffswitch-label" for="myonoffswitch"></label>
								</div>
							</td>
							<td style="
									padding-bottom: 0px;
									padding-top: 10px;">
								<div data-toggle="modal" data-target="#Actualizar">
									<i class="far fa-edit fa-lg"></i>
								</div>
							</td>
						</tr>
						<tr>
							<td class="">7894152</td>
							<td>G1</td>
							<td style="
									padding-bottom: 0px;
									padding-top: 10px;">
								<div class="onoffswitch">
									<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
									<label class="onoffswitch-label" for="myonoffswitch"></label>
								</div>
							</td>
							<td style="
									padding-bottom: 0px;
									padding-top: 10px;">
								<div data-toggle="modal" data-target="#Actualizar">
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
