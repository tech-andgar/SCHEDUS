<!-- Contenido Principal -->
<main class="main">
	<!-- Breadcrumb -->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">Inicio</li>
		<li class="breadcrumb-item"><a href="?c=lider">Coordinador</a></li>
		<li class="breadcrumb-item active"> Horas Instructores</li>
	</ol>
	<div class="container-fluid">
		<!-- Ejemplo de tabla Listado -->
		<div class="card">
			<div class="card-header">
				<i class="fa fa-align-justify"></i> Horas Instructores
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
        <table class="table table-responsive-sm table-bordered table-striped table-sm mt-5" id="tableInstructores">
						<thead>
            <tr class="success">
              <th class="text-center">Ficha</th>
              <th class="text-center">Instructor</th>
              <th class="text-center">Trimestre</th>
              <th class="text-center">Horario</th>
              <th class="text-center">Sede</th>
              <th class="text-center">Jornada</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <tr>
              <td class="">1320652</td>
              <td>
                Diana Pinzon
              </td>
              <td>
                3
              </td>
              <td>
                6:00 a 12:00
              </td>
              <td>
                Adsi
              </td>
              <td>
                Diurno
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



<?php
if (!empty($data['msgType'])) {
	echo "<script>toastr.".$data['msgType']['type']."('".$data['msgType']['msg']."','".$data['msgType']['title']."')</script>";
}
?>

