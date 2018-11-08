<div class="col-lg-9 col-md-12 col-12">
	<div class="row">
		<div class="col-md-12">
			<h4 class="text-center my-4">Administar Instructores</h4>
			<hr>
		</div>
		<div class="col-lg-12 col-md-12 col-12 mt-2">
			<div data-toggle="modal" data-target="#Insertar" class=" text-center">
				<button class="btn-rounded"><i class="fas fa-plus-circle fa-lg"></i>&nbsp;&nbsp;Agregar Nuevo Instructor</button>
			</div>
		</div>
	</div>
	<div class="mt-5 row justify-content-center">
		<div class="col-md-12">
			<div class="row d-flex justify-content-center">
			<div class="table-responsive">
				<table class="table table-hover " id="tableInstructores">
					<thead>
						<tr class="success">
							<th class="col-sm-1 ">Instructor</th>
							<th class="">Estado</th>
							<th class="text-center">Actualizar</th>
						</tr>
					</thead>
					<tbody class="">
					
					</tbody>
				</table>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
</div>
</div>


<script>
$(document).ready(function() {

	$("#tableInstructores").DataTable({
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
		var id_instructor =$(this).attr('id-instructor');
		$.ajax({
			type:'POST',
			url:'?c=Lider&m=changeStatusInstructor',
			data:{
				statetext:statetext,
				state_id:state_id,
				id_instructor:id_instructor
			},
			success(response){
				location.reload();
			}
		});
	});

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

});
    </script>



<!-- Modal Actualizar_Instructores-->
<div class="modal fade" id="Actualizar_ins" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="col-11 modal-title text-center">Actualizar Datos</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="d-flex justify-content-center text-center">
					<form method="POST" action="?c=Lider&m=updateDataInstructor">
						<table>
							<tr>
								<td>
									<h5>Numero de Documento</h5>
								</td>
								<td><input id="text-dni" type="number" value=""  class="adsi-css" name="dni" placeholder="Documento" readonly /></td>
							</tr>
							<tr>
								<td>
									<h5>Nombre</h5>
								</td>
								<td><input id="text-nombre" type="text" value="" class="adsi-css" name="nombre" placeholder="Nombre" required /></td>
							</tr>
							<tr>
								<td>
									<h5>Apellido</h5>
								</td>
								<td><input id="text-apellido" type="text" value="" class="adsi-css" name="apellido" placeholder="Apellido" required /></td>
							</tr>
							<tr>
								<td>
									<h5>Correo</h5>
								</td>
								<td><input id="text-email" type="email" value="" class="adsi-css" name="email" placeholder="Correo" required /></td>
							</tr>
						</table>
						<div class="modal-body">
							<button class="btn-rounded" type="submit" style="width:180px">Actualizar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal Insertar Instructor-->
<div class="modal fade" id="Insertar" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="col-11 modal-title text-center">Insertar Instructor</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="d-flex justify-content-center text-center">
					<form method="POST" action="?c=Lider&m=InsertarInstructor" class="form-signin">
						<table>
							<tr>
								<td>
									<h5>Numero de Documento</h5>
								</td>
								<td><input type="number" class="adsi-css" name="dni" placeholder="Documento" /></td>
							</tr>
							<tr>
								<td>
									<h5>Nombre</h5>
								</td>
								<td><input type="text" class="adsi-css" name="nombre_instructor" placeholder="Nombre" required /></td>
							</tr>
							<tr>
								<td>
									<h5>Apellido</h5>
								</td>
								<td><input type="text" class="adsi-css" name="apellido_instructor" placeholder="Nombre" required /></td>
							</tr>
							<tr>
								<td>
									<h5>Correo</h5>
								</td>
								<td><input type="email" class="adsi-css" name="email" placeholder="Correo" required /></td>
							</tr>
						</table>
						<div class="modal-body">
							<button class="btn-rounded" type="submit" style="width:180px">Agregar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<?php
if (!empty($data['msgType'])) {
	echo "<script>toastr.".$data['msgType']['type']."('".$data['msgType']['msg']."','".$data['msgType']['title']."')</script>";
}
?>