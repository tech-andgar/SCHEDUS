<head>
	<title>Disponibilidad</title>
</head>
<div class="container container_1">
	<div class="row">
		<div class="navbar-derecho col-lg-2 col-md-4 col-12 ">
			<div class="nav flex-column active">
				<a class="btn btn-outline-light " href="index.php?c=lider&m=lider">Asignar Horarios</a>
				<a class="btn dropdown-toggle btn-outline-light " href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
				aria-expanded="false">Administrar</a>
				<div class="dropdown-menu dropdown-content">
					<a class="dropdown-item" href="index.php?c=lider&m=programas">Administrar programas de formación</a>
					<a class="dropdown-item" href="index.php?c=lider&m=TrimestreProgramas">Administrar trimestres de programas de
						formación</a>
					<a class="dropdown-item" href="index.php?c=lider&m=competencias">Administrar competencias de programas de
						formación</a>
					<a class="dropdown-item" href="index.php?c=lider&m=fichas">Administrar fichas de programas de
						formación</a>
					<a class="dropdown-item" href="index.php?c=lider&m=jornadas">Administrar jornadas de formación</a>
				</div>
				<a class="btn btn-outline-light " href="#">Fusionar</a>
				<a class="btn btn-outline-light " href="#">Asignar</a>
				<a class="btn btn-outline-light " href="#" onclick="swal('Good job!','You clicked the button!','success')">Asignar</a>
			</div>
		</div>
		<div class="container col-lg-10 col-md-8 col-12">
			<div class="row justify-content-center">
				<div class="col-md-11">
					<br>
					<h4 class="text-center mb-1">Asignacion de Horarios</h4>
					<hr>
					<h4>Instructor :
						<select id="tipos" name="tipos" onchange="tipo(this.value);" class="adsi-css" required style="width: 31%;
">
							<option value="">Seleccione un Intructor</option>
							<option value="tab">SANDRA MILENA PEÑARANDA SALAZAR</option>
							<option value="tab">DANIEL MORA DIAZ</option>
							<option value="tab">YULIETT CONSUELO PULIDO MONCADA</option>
						</select>
					</h4>
					<div class="mx-auto" id="tab" style="display: none;">
						<table class="table table-responsive table-hover table-condensed" id="tabla_horario">
							<thead>
								<tr class="success">
									<th class="col-sm-1 text-center">Hora</th>
									<th class="text-center">Lunes</th>
									<th class="text-center">Martes</th>
									<th class="text-center">Miercoles</th>
									<th class="text-center">Jueves</th>
									<th class="text-center">Viernes</th>
									<th class="text-center">Sabado</th>
									<th class="text-center">Domingo</th>
								</tr>
							</thead>
							<tbody class="text-center">
								<tr>
									<td class="">6:00 a 10:00</td>
									<td>
										<div class="control-group ">
											 
												 
												 
											 
										</div>
									</td>
									<td>
										<div class="control-group">
											 
												 
												 
											 
										</div>
									</td>
									<td>
										<div class="control-group ">
											 
												 
												 
											 
										</div>
									</td>
									<td>
										<div class="control-group">
											 
												 
												 
											 
										</div>
									</td>
									<td>
										<div class="control-group">
											 
												 
												 
											 
										</div>
									</td>
									<td>
										<div class="control-group">
											 
												 
												 
											 
										</div>
									</td>
									<td>
										<div class="control-group">
											 
												 
												 
											 
										</div>
									</td>
								</tr>
								<tr>
									<td class="">10:00 a 14:00</td>
									<td>
										<div class="control-group ">
											 
												 
												 
											 
										</div>
									</td>
									<td>
										<div class="control-group">
											 
												 
												 
											 
										</div>
									</td>
									<td>
										<div class="control-group ">
											 
												 
												 
											 
										</div>
									</td>
									<td>
										<div class="control-group">
											 
												 
												 
											 
										</div>
									</td>
									<td>
										<div class="control-group">
											 
												 
												 
											 
										</div>
									</td>
									<td>
										<div class="control-group">
											 
												 
												 
											 
										</div>
									</td>
									<td>
										<div class="control-group">
											 
												 
												 
											 
										</div>
									</td>
								</tr>
								<tr>
									<td class="">14:00 a 18:00</td>
									<td>
										<div class="control-group ">
											 
												 
												 
											 
										</div>
									</td>
									<td>
										<div class="control-group">
											 
												 
												 
											 
										</div>
									</td>
									<td>
										<div class="control-group ">
											 
												 
												 
											 
										</div>
									</td>
									<td>
										<div class="control-group">
											 
												 
												 
											 
										</div>
									</td>
									<td>
										<div class="control-group">
											 
												 
												 
											 
										</div>
									</td>
									<td>
										<div class="control-group">
											 
												 
												 
											 
										</div>
									</td>
									<td>
										<div class="control-group">
											 
												 
												 
											 
										</div>
									</td>
								</tr>
								<tr>
									<td class="">22:00 a 6:00</td>
									<td>
										<div class="control-group ">
											 
												 
												 
											 
										</div>
									</td>
									<td>
										<div class="control-group">
											 
												 
												 
											 
										</div>
									</td>
									<td>
										<div class="control-group ">
											 
												 
												 
											 
										</div>
									</td>
									<td>
										<div class="control-group">
											 
												 
												 
											 
										</div>
									</td>
									<td>
										<div class="control-group">
											 
												 
												 
											 
										</div>
									</td>
									<td>
										<div class="control-group">
											 
												 
												 
											 
										</div>
									</td>
									<td>
										<div class="control-group">
											 
												 
												 
											 
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