<div class="col-lg-9 col-md-12 col-12">
	<div class="row justify-content-center ">
		<div class="col-md-12">
			<br>
			<h4 class="text-center mb-1">Administrar programas de formación</h4>
			<hr>
			<div class="row d-flex justify-content-center">
			<div class="table-responsive">
				<table class="table table-hover" id="tableInstructores">
					<thead>
						<tr class="success">
							<th class="">Codigo</th>
							<th class="">Programa</th>
							<th class="">Estado</th>
							<th class="text-center">Actualizar</th>
						</tr>
					</thead>
					<tbody class="">
						<tbody class="">
						<?php
						foreach ($data['data'] as $user) {
    				?>
						<tr>
							<td class="">
								<?php echo $user->nombre . " " . $user->apellido; ?>
							</td>
							<td class="text-center" style="padding-bottom: 0px;padding-top: 10px;">
								<button type"button" id-programa="<?php echo $user->id_usuario; ?>" id-state="<?php echo $user->id_estado_usuario ?>"
								name-state="<?php echo $user->name_estado_usuario ?>" class="statusChange btn  <?php if ($user->name_estado_usuario == 'Activo') {echo "
								btn-success";} else {echo "btn-danger" ;}?>">
									<?php echo $user->name_estado_usuario ?>
								</button>
							</td>
							<td class="text-center">
								<div class="updateDataPrograma" data-toggle="modal" data-target="#Actualizar_Prms" id-programa="<?php echo $user->id_usuario; ?>">
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
</div>
</div>
</div>
</div>

<script>
$(document).ready(function() {

	$("#tableProgramas").DataTable({
		"language":{
			"sProcessing":     "Procesando...",
			"sLengthMenu":     "Mostrar _MENU_ registros",
			"sZeroRecords":    "No se encontraron resultados",
			"sEmptyTable":     "Ningún dato disponible en esta tabla",
			"sInfo":           "Registros del _START_ al _END_ de un total de _TOTAL_ registros",
			"sInfoEmpty":      "Registros del 0 al 0 de un total de 0 registros",
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
			"<'row'<'col-sm-3'><'col-sm-9'i><'col-sm-4'><'col-sm-6'p>>" +
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
		var id_programa =$(this).attr('id-programa');
		$.ajax({
			type:'POST',
			url:'?c=Lider&m=changeStatusPrograma',
			data:{
				statetext:statetext,
				state_id:state_id,
				id_programa:id_programa
			},
			success(response){
				location.reload();
			}
		});
	});

	$(".updateDataPrograma").click(function(){
		var id_programa =$(this).attr('id-programa');
		$.ajax({
			type:'POST',
			url:'?c=Lider&m=getDataPrograma',
			dataType:"json",
			data:{
				id_programa:id_programa
			},
			success(response){
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