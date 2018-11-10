<!-- Contenido Principal -->
<main class="main">
	<!-- Breadcrumb -->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">Inicio</li>
		<li class="breadcrumb-item"><a href="#">Lider</a></li>
		<li class="breadcrumb-item active">Fichas</li>
	</ol>
	<div class="container-fluid">
		<!-- Ejemplo de tabla Listado -->
		<div class="card">
			<div class="card-header ">
				<i class="fa fa-align-justify"></i> Fichas
				<button type="button" class="btn btn-secondary " data-toggle="modal" data-target="#Agregar_Ficha">
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
					<table class="table table-bordered table-striped table-sm mt-5" id="tableInstructores">
						<thead>
							<tr>
								<th class="">Ficha</th>
								<th class="">Programa</th>
								<th class="">Nivel</th>
								<th class="">Estado</th>
								<th class="text-center">Actualizar</th>
							</tr>
						</thead>
						<tbody class="">
							<?php
						foreach ($data['data'] as $ficha) {
  					  ?>
							<tr>
								<td>
									<?php echo $ficha->num_ficha; ?>
								</td>
								<td>
									<?php echo $ficha->name_programa_formacion; ?>
								</td>
								<td>
									<?php echo $ficha->name_nivel_programa_formacion; ?>
								</td>
								<td>
									<?php
										switch ($ficha->name_estado_ficha) {
    									case 'Cancelado':
            							echo '<div class="p-2 bg-danger text-white rounded">' . $ficha->name_estado_ficha . '</div>';
    									break;
    									case 'Completado':
    									echo '<div class="p-2 bg-info text-white rounded">' . $ficha->name_estado_ficha . '</div>';
            							break;
        								case 'En formación':
        								echo '<div class="p-2 bg-success text-white rounded">' . $ficha->name_estado_ficha . '</div>';
            							break;
        								case 'Pendiente Asignado':
            							echo '<div class="p-2 bg-warning text-dark rounded">' . $ficha->name_estado_ficha . '</div>';
            							break;
        								default:
            							echo '<div class="p-2 bg-dark text-white rounded">No pudo obtener estado de formacion ' . $ficha->name_estado_ficha . '</div>';
            							break;
    							}
    							?>
								</td>
								<td class="text-center">
									<div class="updateDataFicha" data-toggle="modal" data-target="#Actualizar" id-instructor="<?php echo $ficha->id_ficha; ?>">
										<i class="far fa-edit fa-lg"></i>
									</div>
								</td>
							</tr>
							<?php
								}
							?>
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
<script>
	$(document).ready(function() {

	$("#tableInstructores").DataTable({
		"language":{
			"sProcessing":     "Procesando...",
			"sLengthMenu":     "Mostrar _MENU_ registros",
			"sZeroRecords":    "No se encontraron resultados",
			"sEmptyTable":     "Ningún dato disponible en esta tabla",
			"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
			"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
			"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
			"sInfoPostFix":    "",
			"sSearch":         "Buscar:",
			"sUrl":            "",
			"sInfoThousands":  ",",
			"sLoadingRecords": "Cargando...",
			"oPaginate": {
						"sFirst":    "Primero",
						"sLast":     "Último",
						"sNext":     "Siguiente",
						"sPrevious": "Anterior"
			},
			"oAria": {
						"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
						"sSortDescending": ": Activar para ordenar la columna de manera descendente"
			}
		},"dom": // Insertar objeto tabla por formato:
			// Encabezado de la tabla -- l->Num registros por pagina, f-> barra de filtro
			"<'row'<'col-sm-6'f><'col-sm-6'l>>" +
			// Cuerpo de la tabla -- t-> tabla, r (no aun entiendo)
			"<'row'<'col-sm-12 table-responsive d-flex justify-content-center'tr>>" +
			// Seccion estado de la tabla -- i-> info de tabla, p-> num Paginas por dividir registros
			"<'row'<'col-sm-2'><'col-sm-10'i><'col-sm-3'><'col-sm-7'p>>" +
			// Pie de la tabla -- B-> Botones de exportar
			"<'row'<'col-sm-12'B>>",
		buttons: [
			'copy',
			'excel',
			'pdf'
    	]
		//buttons: [
		//	'copyHtml5',
		//	'excelHtml5',
		//	'csvHtml5',
		//	'pdfHtml5'
		//]
	});

	$(".statusChange").click(function(){
		var statetext =$(this).attr('name-state');
		var state_id =$(this).attr('id-state');
		var id_Ficha =$(this).attr('id-Ficha');
		$.ajax({
			type:'POST',
			url:'?c=Lider&m=changeStatusFicha',
			data:{
				statetext:statetext,
				state_id:state_id,
				id_Ficha:id_Ficha
			},
			success(response){
				location.reload();
			}
		});
	});

	$(".updateDataFicha").click(function(){
		var id_instructor =$(this).attr('id-Ficha');
		$.ajax({
			type:'POST',
			url:'?c=Lider&m=getDataFicha',
			dataType:"json",
			data:{
				id_Ficha:id_Ficha
			},
			success(response){
				var instructor = jQuery.parseJSON(JSON.stringify(response));
				$('#text-dni').val(Ficha.dni);
				$('#text-nombre').val(Ficha.nombre);
				$('#text-apellido').val(Ficha.apellido);
				$('#text-email').val(Ficha.email);
			}
		});
	});

});
    </script>




<!-- Modal Agregar nueva Ficha-->
<div class="modal fade" id="Agregar_Ficha" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="col-11 modal-title text-center">Agregar Nueva Ficha</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>

			</div>
			<div class="modal-body">
				<div class="d-flex justify-content-center text-center">
					<form method="post" action="?c=Lider&m=insertarFicha" class="form-signin">
						<div class="form-group">
							<h4>Numero de la Ficha</h4>
							<input type="number" name="num_ficha" id="num_ficha" class="adsi-css form-control" placeholder=""
							 aria-describedby="helpIdNumFicha">
							<small id="helpIdNumFicha" class="text-muted">Numero de la ficha</small>
							<!-- style="width:80%; height:30px" -->

						</div>
						<h4>Programa:</h4>
						<select class="adsi-css mb-3" name="cod_programa_formacion" required>
							<option value="">Programas</option>
							<?php foreach ($data['partial2'] as $programa) {
								//.' Codigo nivel de formacion: ' .$programa->cod_nivel_programa_formacion . ', Codigo estado de progarama: '. $programa->cod_estado_programa_formacion
								?>
							<option value="<?php echo $programa->cod_nivel_programa_formacion; ?>">
								<?php echo $programa->name_programa_formacion; ?>
							</option>
							<?php } ?>
						</select>
						<script>
							$(".updateDataInstructor").click(function(){
							var id_instructor =$(this).attr('id-instructor');
							$.ajax({
								type:'POST',
								url:'?c=Lider&m=getDataInstructor',
								dataType:"json",
								data:{
									id_instructor:id_instructor
								},
								success(response){
									var instructor = jQuery.parseJSON(JSON.stringify(response));
									$('#text-dni').val(instructor.dni);
									$('#text-nombre').val(instructor.nombre);
									$('#text-apellido').val(instructor.apellido);
									$('#text-email').val(instructor.email);
								}
							});
						});
						</script>
						<hr>
						<button class="btn-rounded" type="submit" style="width:110px">Insertar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal actualizar datos -->
<div class="modal fade" id="Actualizar" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
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
						<div class="form-group">
							<label for="txt_num_ficha">Numero de la Ficha</label>
							<input type="text" name="txt_num_ficha" id="txt_num_ficha" class="form-control adsi-css" placeholder=""
							 aria-describedby="helpIdNumFicha">
							<small id="helpIdNumFicha" class="text-muted">Help text</small>
							<!-- style="width:80%; height:30px" -->
						</div>
						<h4>Grupo:</h4>
						<select class="adsi-css mb-3" required>
							<option value="">Grupo</option>
							<?php foreach ($data['partial0'] as $grupo) { ?>
							<option value="<?php echo $grupo->num_grupo; ?>">
								<?php echo $grupo->num_grupo . $grupo->version; ?>
							</option>
							<?php } ?>
						</select>
						<h4>Estado:</h4>
						<select class="adsi-css mb-3" required>
							<option value="">Estado</option>
							<?php foreach ($data['partial3'] as $nivel) { ?>
							<option value="<?php echo $nivel->id_nivel_programa_formacion; ?>">
								<?php echo $nivel->name_nivel_programa_formacion . $nivel->duracion; ?>
							</option>
							<?php } ?>
						</select>
						<h4>Nivel:</h4>
						<select class="adsi-css mb-3" required>
							<option value="">Nivel</option>
							<?php foreach ($data['partial1'] as $nivel) { ?>
							<option value="<?php echo $nivel->id_nivel_programa_formacion; ?>">
								<?php echo $nivel->name_nivel_programa_formacion . $nivel->duracion; ?>
							</option>
							<?php } ?>
						</select>
						<h4>Programa:</h4>
						<select class="adsi-css mb-3" required>
							<option value="">Programas</option>
							<?php foreach ($data['partial2'] as $programa) {
								//.' Codigo nivel de formacion: ' .$programa->cod_nivel_programa_formacion . ', Codigo estado de progarama: '. $programa->cod_estado_programa_formacion
								?>
							<option value="<?php echo $programa->codigo; ?>">
								<?php echo $programa->name_programa_formacion; ?>
							</option>
							<?php } ?>

							<script>
								$(".updateDataInstructor").click(function(){
							var id_instructor =$(this).attr('id-instructor');
							$.ajax({
								type:'POST',
								url:'?c=Lider&m=getDataInstructor',
								dataType:"json",
								data:{
									id_instructor:id_instructor
								},
								success(response){
									var instructor = jQuery.parseJSON(JSON.stringify(response));
									$('#text-dni').val(instructor.dni);
									$('#text-nombre').val(instructor.nombre);
									$('#text-apellido').val(instructor.apellido);
									$('#text-email').val(instructor.email);
								}
							});
						});

						</script>
						</select>
						<hr>
						<button class="btn-rounded" type="submit" style="width:110px">Actualizar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
if (!empty($data['msgType'])) {
    echo "<script>toastr." . $data['msgType']['type'] . "('" . $data['msgType']['msg'] . "','" . $data['msgType']['title'] . "')</script>";
}
?>