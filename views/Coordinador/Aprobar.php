<!-- Contenido Principal -->
<main class="main">
	<!-- Breadcrumb -->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">Inicio</li>
		<li class="breadcrumb-item"><a href="?c=lider">Coordinador</a></li>
		<li class="breadcrumb-item active">Aprobar Horarios</li>
	</ol>
	<div class="container-fluid">
		<!-- Ejemplo de tabla Listado -->
		<div class="card">
			<div class="card-header">
					<div class="d-flex align-items-center">
						<div class="mx-auto w-100">
								<i class="fa fa-align-justify"></i> Aprobar Horarios
						</div>
						<button type="button" class="btn btn-outline-success rounded-left mr-3">Publicar</button>
						<div class="ml-auto">
							<i class="fa fa-question-circle float-right" data-toggle="popover" data-placement="bottom" data-content="Una vez publicado los horarios no se pueden modificar los mismos, sino crear uno nuevo."></i>
						</div>
					</div>
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
				<table class="table table-bordered table-striped table-sm mt-5" id="tableInstructores">
						<thead>
            <tr class="success">
            <th class="text-center">Ficha</th>
            <th class="text-center">Instructor</th>
            <th class="text-center">Trimestre</th>
            <th class="text-center">Horario</th>
            <th class="text-center">Programa</th>
            <th class="text-center">Salon</th>
            <th class="text-center">Aprobado</th>
          </tr>
					</thead>
					<tbody >
          <tr>
            <td class="">1320652</td>
            <td>
              Diana Pinzon
            </td>
            <td>
              3
            </td>
            <td>
              Diurno
            </td>
            <td>
              Adsi
            </td>
            <td>
              302
            </td>
            <td  class="text-center">
              <div class="pretty p-icon p-toggle p-plain">
                <input type="checkbox" />
                <div class="state p-success-o p-off">
                  <i class="icon mdi mdi-thumb-up"></i>
                </div>
                <div class="state p-danger-o p-on">
                  <i class="icon mdi mdi-thumb-down"></i>
                </div>
              </div>
            </td>
          </tr>
						
					</tbody>
				</table>
			</div>
		</div>
		<!-- Fin ejemplo de tabla Listado -->
	</div>
</main>
<!-- /Fin del contenido principal -->
</div>

<script>

	$(function () {
  $('[data-toggle="popover"]').popover()
})
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




<?php
if (!empty($data['msgType'])) {
	echo "<script>toastr.".$data['msgType']['type']."('".$data['msgType']['msg']."','".$data['msgType']['title']."')</script>";
}
?>
