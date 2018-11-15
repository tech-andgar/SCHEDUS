<!-- Contenido Principal -->
<main class="main">
	<!-- Breadcrumb -->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">Inicio</li>
		<li class="breadcrumb-item"><a href="#">Lider</a></li>
		<li class="breadcrumb-item active">Fichas</li>
	</ol>
	<div class="container-fluid">
		<div class="card">
			<!-- Ejemplo de tabla Listado -->
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
						</div>
						<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
					</div>
				</div>
				<div class="table-responsive">
					<table class="table table-responsive-sm table-bordered table-striped table-sm mt-5" id="tableFichas">
						<thead>
							<tr>
								<th>Ficha</th>
								<th>Programa</th>
								<th>Nivel</th>
								<th>Estado</th>
								<th class="text-center">Actualizar</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($data['fichas'] as $ficha) { ?>
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
								}?>
								</td>
								<td style="padding-bottom: 0px;padding-top: 10px;">
									<div class="updateDataFicha" data-toggle="modal" data-target="#updateDataFicha" id-ficha="<?php echo $ficha->id_ficha; ?>">
										<i class="far fa-edit fa-lg"></i>
									</div>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<!-- Fin ejemplo de tabla Listado -->
</main>
<!-- Fin del modal Eliminar -->
</div>
<!-- /Fin del contenido principal -->

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
							<input type="text" name="num_ficha" id="num_ficha" class="form-control adsi-css" aria-describedby="helpIdNumFicha">
							<small id="helpIdNumFicha" class="text-muted">Numero de la ficha</small>
						</div>
						<div class="form-group">

							<h4>Programa:</h4>
							<select class="adsi-css mb-3" name="cod_programa_formacion" required>
								<option value="">Programas</option>
								<?php foreach ($data['programaFormacion'] as $programa) { ?>
								<option value="<?php echo $programa->id_programa_formacion; ?>">
									<?php echo $programa->name_programa_formacion; ?>
								</option>
								<?php } ?>
							</select>
						</div>

						<hr>
						<button class="btn-rounded" type="submit" style="width:110px">Insertar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END MODAL Agregar nueva Ficha -->


<!-- Modal actualizar datos de Ficha-->
<div class="modal fade" id="updateDataFicha" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="col-11 modal-title text-center">Editar datos de ficha</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="d-flex justify-content-center text-center">
					<form method="POST" action="?c=Lider&m=updateDataFicha" class="form-signin">
						<table>
							<tr>
								<td>
									<h4 style="margin-bottom: 0px;" class="mr-5" for="txt_num_ficha">Numero de la Ficha:</h4>
								</td>
								<td>
									<input type="text" name="txt_num_ficha" id="txt_num_ficha" class="adsi-css" aria-describedby="helpIdNumFicha" readonly>
								</td>
							</tr>
							<tr>
								<td>
									<h4 style="margin-bottom: 0px;">Estado:</h4>
									<small id="helpIdNumFicha" class="text-muted">Selecciona estado de ficha</small>
								</td>
								<td>
									<select id="list-estadoFicha" class="adsi-css mb-3" name="id_estado_ficha" required>
									</select>
								</td>
							</tr>
							<tr>
								<td>
									<h4 style="margin-bottom: 0px;">Programa:</h4>
									<small id="helpIdNumFicha" class="text-muted">Selecciona programa de formación</small>
								</td>
								<td>
									<select class="adsi-css mb-3" id="list-programa" name="id_programa_formacion" required>
									</select>
								</td>
							</tr>
						</table>
						<div class="modal-body">
							<button class="btn-rounded" type="submit" style="width:110px">Actualizar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END Modal actualizar datos de Ficha-->

<!-- Modal Agregar nuevo Grupo-->
<div class="modal fade" id="Agregar_Grupo" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="col-11 modal-title text-center">Agregar Nuevo Grupo</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="d-flex justify-content-center text-center">
					<form method="post" action="#" class="form-signin">
						<div class="form-group">
							<div class="form-group">
								<label for="id_ficha">
									<h5>Ficha</h5>
									<br>
									<input type="text" name="id_ficha" list="id_ficha" class="adsi-css" placeholder="Número de ficha" />
									<datalist id="id_ficha">
										<label> or select one from the list:
											<div id="form_select_ficha"></div>
										</label>
									</datalist>
								</label>
							</div>
						</div>
						<div class="form-group">
							<h5>Grupo</h5>
							<input type="text" class="adsi-css mb-3" style="width:80%; height:30px" name="dni" />
						</div>
						<hr>
						<button class="btn-rounded" type="submit" style="width:110px">Agregar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END Modal Agregar nuevo Grupo-->


<script>
	function removeDuplicates(json_all) {
		var arr = [],
			collection = [];

		$.each(json_all, function (index, value) {
			if ($.inArray(value.id, arr) == -1) {
				arr.push(value.id);
				collection.push(value);
			}
		});
		return collection;
	};

	$(document).ready(function () {

		$("#tableFichas").DataTable({
			"language": {
				"sProcessing": "Procesando...",
				"sLengthMenu": "Mostrar _MENU_ registros",
				"sZeroRecords": "No se encontraron resultados",
				"sEmptyTable": "Ningún dato disponible en esta tabla",
				"sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
				"sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
				"sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
				"sInfoPostFix": "",
				"sSearch": "Buscar:",
				"sUrl": "",
				"sInfoThousands": ",",
				"sLoadingRecords": "Cargando...",
				"oPaginate": {
					"sFirst": "Primero",
					"sLast": "Último",
					"sNext": "Siguiente",
					"sPrevious": "Anterior"
				},
				"oAria": {
					"sSortAscending": ": Activar para ordenar la columna de manera ascendente",
					"sSortDescending": ": Activar para ordenar la columna de manera descendente"
				}
			},
			"dom": // Insertar objeto tabla por formato:
				// Encabezado de la tabla -- l->Num registros por pagina, f-> barra de filtro
				"<'row'<'col-sm-6'f><'col-sm-6'l>>" +
				// Cuerpo de la tabla -- t-> tabla, r (no aun entiendo)
				"<'row'<'col-sm-12 table-responsive d-flex justify-content-center'tr>>" +
				// Seccion estado de la tabla -- i-> info de tabla, p-> num Paginas por dividir registros
				"<'row'<'col-sm-4'><'col-sm-8'i><'col-sm-4'><'col-sm-7'p>>" +
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


		// Change status of ficha from button
		$(".statusChange").click(function () {
			var statetext = $(this).attr('name-state');
			var state_id = $(this).attr('id-state');
			var id_Ficha = $(this).attr('id-Ficha');
			$.ajax({
				type: 'POST',
				url: '?c=Lider&m=changeStatusFicha',
				data: {
					statetext: statetext,
					state_id: state_id,
					id_Ficha: id_Ficha
				},
				success(response) {
					location.reload();
				}
			});
		});

		// get Data Ficha_ID form button -> Modal Form_update_ficha
		$(".updateDataFicha").click(function () {
			var idFicha = $(this).attr('id-ficha');

			// Call AJAX getDataFicha()
			$.ajax({
				type: 'POST',
				url: '?c=Lider&m=getDataFicha',
				data: {
					idFicha: idFicha
				},
				success(response) {
					var ficha = jQuery.parseJSON(response);
					$('#txt_num_ficha').val(ficha.num_ficha);



					// Call AJAX getAllEstadoFicha()

					$('#list-estadoFicha').select2({
						theme: 'bootstrap4',
						ajax: {
							url: '?c=Lider&m=getDataEstadoFicha',
							dataType: 'json',
							delay: 250,
							data: function (params) {
								return {
									q: params.term, // search term
									page: params.page
								};
							},
							processResults: function (data, params) {
								var data = $.map(data, function (obj) {
									obj.id = obj.id || obj.id_estado_ficha; // replace pk with your identifier
									obj.text = obj.text || obj.name_estado_ficha; // replace name with the property used for the text

									console.log(ficha);
									console.log(obj);
									if (obj.id_estado_ficha == ficha.id_estado_ficha) {
										obj.selected = true;
									}

									return obj;
								});

								return {
									results: data,
								};
							},
							cache: true
						},
						placeholder: $(this).attr('placeholder'),
						allowClear: Boolean($(this).data('allow_clear')),
						tags: true,
						dropdownParent: $("#updateDataFicha"),
					});

					// $.ajax({
					// 	type: 'POST',
					// 	url:'?c=Lider&m=getAllDataEstadoFicha',
					// 	success(response) {
					// 		var estadoFicha = jQuery.parseJSON(response);
					// 		$('#list-estadoFicha').empty();
					// 		$.each(estadoFicha, function (index, value) {
					// 			if (value.id_estado_ficha == ficha.id_estado_ficha) {
					// 				$('#list-estadoFicha').append("<option value='"+value.id_estado_ficha+"' selected>"+value.name_estado_ficha +"</option>");
					// 			} else {
					// 				$('#list-estadoFicha').append("<option value='"+value.id_estado_ficha+"'>"+value.name_estado_ficha +"</option>");
					// 			}
					// 		});
					// 	}
					// });// END Call AJAX getAllEstadoFicha()

					// Call AJAX getAllprogramaFormacion()




					// $('#list-programa').select2({
					// 	language: "es",
					// 	theme: "bootstrap",
					// 	ajax: {
					// 		url:'?c=Lider&m=getAllDataProgramaFormacion',
					// 		dataType: 'json',
					// 		processResults: function (data) {
					// 			var data = $.map(data, function (obj) {
					// 							obj.id = obj.id || obj.id_programa_formacion; // replace pk with your identifier
					// 							obj.text = obj.text || obj.name_programa_formacion; // replace name with the property used for the text
					// 							return obj;
					// 						});
					// 			return {
					// 				results: data,
					// 			};
					// 		}
					// 	},
					// 	tags: true,
					// 	dropdownParent: $("#updateDataFicha"),
					// });




					// $.ajax({
					// 	type: 'POST',
					// 	url:'?c=Lider&m=getAllDataProgramaFormacion',
					// 	success(response) {
					// 		$('#list-programa').empty();
					// 		var programaFormacion = jQuery.parseJSON(response);
					// 		$.each(programaFormacion, function (index, value) {
					// 			if (value.id_programa_formacion == ficha.id_programa_formacion) {
					// 				$('#list-programa').append("<option value='"+value.id_programa_formacion+"' selected>"+value.name_programa_formacion +"</option>");
					// 			} else {
					// 				$('#list-programa').append("<option value='"+value.id_programa_formacion+"'>"+value.name_programa_formacion +"</option>");
					// 			}
					// 		});
					// 	}
					// }); // End Call AJAX getAllprogramaFormacion()
				}
			}); // End Call AJAX getDataFicha()

		}); // End get Data Ficha_ID form button -> Modal Form_update_ficha

		// get Data form Button -> Modal Form input
		$(".updateDataInstructor").click(function () {
			var id_instructor = $(this).attr('id-instructor');
			$.ajax({
				type: 'POST',
				url: '?c=Lider&m=getDataInstructor',
				dataType: "json",
				data: {
					id_instructor: id_instructor
				},
				success(response) {
					var instructor = jQuery.parseJSON(JSON.stringify(response));
					$('#text-dni').val(instructor.dni);
					$('#text-nombre').val(instructor.nombre);
					$('#text-apellido').val(instructor.apellido);
					$('#text-email').val(instructor.email);
				}
			});
		});

		// Agregar nuevo grupo de ficha desde button agregar grupo
		$("#btnAgregarGrupo").click(function () {
			$.ajax({
				type: 'POST',
				url: '?c=lider&m=getAllDataFichas',
				dataType: "json",
				success(response) {
					var ficha = jQuery.parseJSON(JSON.stringify(response));
					console.log(ficha);
					//var ficha = removeDuplicates(ficha);

					var select = $("<select></select>").attr("id", "id_ficha").attr("name", "id_ficha").attr("class",
						"form-control");
					$.each(ficha, function (i, json) {
						select.append($("<option></option>").attr("value", ficha[i].id_ficha).text(ficha[i].num_ficha));
					});
					$("#form_select_ficha").html(select);

				}
			});
		});

	});
</script>

<?php
if (!empty($data['msgType'])) {
    echo "<script>toastr." . $data['msgType']['type'] . "('" . $data['msgType']['msg'] . "','" . $data['msgType']['title'] . "')</script>";
}
?>