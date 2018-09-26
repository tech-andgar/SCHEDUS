<head>
	<title>Fusionar</title>
</head>
<div class="container container_1" style="padding-bottom: 243px;">
	<div class="row">
		<?php include '././controller/NavbarDerechoController.php'?>
		<div class="container col-lg-10 col-md-8 col-12">
			<div class="row justify-content-center mt-4">

				<div class="col-lg-8 col-md-8 col-sm-12 mt-2">
					<h4 class="text-center">Fusionar Fichas</h4>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-12" id="btn-add-ficha">
					<button class="btn-rounded add" type="submit" id="tipos" name="tipos" onchange="tipo(this.value);" style="width:100px">Agregar Ficha</button>
				</div>
				<div class="col-12 container-box">
					<form action="" method="post">
					<div class='boxFicha' id='boxFicha_1' class="mt-5">
							<h4>Ficha 1:</h4>
							<select class="adsi-css" id='ficha_1' style="width: 25%;margin-right: 20px;" required>
								<option value="">Seleccione una ficha</option>
								<option value="">8975312</option>
								<option value="">1320652 G1</option>
								<option value="">1320652 G2</option>
								<option value="">1320652 G3</option>
								<option value="">1320652 G4</option>
								<option value="">2349858</option>
								<option value="">1320652 G1</option>
								<option value="">1320652 G2</option>
								<option value="">1320652 G3</option>
								<option value="">1878465</option>
								<option value="">1zz328798 G1</option>
								<option value="">1328798 G2</option>
								<option value="">1328798 G3</option>
							</select>
						</div>
						<br>
						<br>
						<button class="btn-rounded" type="submit" style="width:80px">Fusionar</button>
					</form>
				</div>



		<script>

		$(document).ready(function(){

			// Add new boxFicha
			$("#btn-add-ficha").click(function(){

				// Finding total number of boxFichas added
				var total_boxFicha = $(".boxFicha").length;

				// last <div> with boxFicha class id
				var lastid = $(".boxFicha:last").attr("id");
				var split_id = lastid.split("_");
				var nextindex = Number(split_id[1]) + 1;

				var max = 5;

				// Check total number boxFichas
				if(total_boxFicha < max ){
					// Adding new div container after last occurance of boxFicha class
					$(".boxFicha:last").after("<div class='boxFicha' id='boxFicha_"+ nextindex +"'></div>");

					// Adding boxFicha to <div>
					$("#boxFicha_" + nextindex).append("<input type='text' placeholder='Enter your skill' id='txt_"+ nextindex +"'>&nbsp;<span id='remove_" + nextindex + "' class='remove'>X</span>");
					//$("#boxFicha_" + nextindex).append('<h4>Ficha '+nextindex+':</h4><select class="adsi-css" id="ficha_'+nextindex+'" style="width: 25%;margin-right: 20px;" required><option value="">Seleccione una ficha</option></select>&nbsp;<span id="remove_"' + nextindex + '" class="remove"><i class="fas fa-times"></i></span>');
				}
			});

			// Remove boxFicha
			$('.container-box').on('click','.remove',function(){

				var id = this.id;
				var split_id = id.split("_");
				var deleteindex = split_id[1];

				console.log(id);
				console.log(split_id);
				console.log(id);

				// Remove <div> with id
				$("#boxFicha_" + deleteindex).remove();

			});
		});

		</script>

				</div>
			</div>
		</div>
		<br>
	</div>
</div>
<script src="assets/js/app.js"></script>