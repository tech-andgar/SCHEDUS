<head>
	<title>Fichas</title>
</head>
<div class="container container_1">
	<div class="row">
		<?php include '././controller/NavbarDerechoController.php'?>
		<div class="container col-lg-10 col-md-8 col-12">
			<div class="row justify-content-center">
				<div class="col-md-11">
					<br>
					<h4 class="text-center mb-1">Administrar Fichas de programas de formación</h4>
					<hr>
					<center>
						<div data-toggle="modal" data-target="#Agregar">
							<input type="button" value="Agregar Nueva Ficha" class="botton_css">
						</div>
						<br>
						<div class="mx-auto">
							<table class="col-lg-8 table table-responsive table-hover table-condensed" id="tabla_horario">
								<thead>
									<tr class="success">
										<th class="col-sm-1 ">Ficha</th>
										<th class="">Estado</th>
										<th class="text-center">Actualizar</th>
									</tr>
								</thead>
								<tbody class="">
									<tr>
										<td class="">1320652</td>
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
												<img src="././assets/images/actualizar.png" width="35px ">
											</div>
										</td>
									</tr>
									<tr>
										<td class="">8794512</td>
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
												<img src="././assets/images/actualizar.png" width="35px ">
											</div>
										</td>
									</tr>
									<tr>
										<td class="">5649895</td>
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
												<img src="././assets/images/actualizar.png" width="35px ">
											</div>
										</td>
									</tr>
									<tr>
										<td class="">7894152</td>
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
												<img src="././assets/images/actualizar.png" width="35px ">
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
				</div>
				</center>
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
					<center>
						<h3 class="modal-title" id="exampleModalLongTitle">Actualizar Datos</h3>
					</center>
				</div>
			</div>
			<div class="modal-body">
				<center>
					<form method="post" action="#" class="form-signin">
						<h5>Nombre del Programa</h5>
						<input type="text" class="adsi-css" style="width:80%; height:30px" name="dni" />
						<br>
						<br>
						<hr>
						<button class="botton_css" type="submit" style="width:110px">Actualizar</button>
					</form>
				</center>
			</div>
		</div>
	</div>
</div>
<!-- Modal Agregar nueva Ficha-->
<div class="modal fade" id="Agregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<center>
						<h3 class="modal-title" id="exampleModalLongTitle">Agregar Nueva Ficha</h3>
					</center>
				</div>
			</div>
			<div class="modal-body">
				<center>
					<form method="post" action="#" class="form-signin">
						<h5>Numero de la Ficha</h5>
						<input type="text" class="adsi-css" style="width:80%; height:30px" name="dni" />
						<br>
						<br>
						<hr>
						<button class="botton_css" type="submit" style="width:110px">Agregar</button>
					</form>
				</center>
			</div>
		</div>
	</div>
</div>