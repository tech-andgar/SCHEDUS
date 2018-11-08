<!-- Contenido Principal -->
<main class="main" style="margin-left: 0px;">
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-12 mx-auto">
                <section class="bg-light">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-center p-5">HORARIO DE FORMACION E INFORMACION PARA APRENDICES CEET</h2>
                        </div>
                        <div class="col-12 d-flex justify-content-center text-center p-5">
                            <form action="#" method="post">
                                <label for="num_ficha">Numero de Ficha</label>
                                <div id="textbox-search" class="input-group">
                                    <input class="form-control border-secondary py-2" type="search" placeholder="Busqueda">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-info form-control" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                                <small id="helpId" class="form-text text-muted">Ingresa su numero de ficha para buscar
                                    horario asignado</small>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <?php
if (isset($data['msg'])) {
    echo "<script>toastr.error('" . $data['msg'] . "','" . $data['title'] . "')</script>";
}
?>

    </div>
    </div>
    <!-- Fin ejemplo de tabla Listado -->
    </div>
</main>
<!-- /Fin del contenido principal -->
</div>



<div class="col-lg-9 col-md-12 col-12">
	<div class="row justify-content-center text-center">
		<div class="col-md-12">
			<br>
			<h4 class=" mb-1">Asignar Horarios</h4>
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
<div class="m-3">
</div>
</div>
</div>