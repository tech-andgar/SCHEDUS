<?php

Class InstructorController{
	private $Smodel;
	private $Pmodel;


	public function Disponibilidad(){

		$title = 'Disponibilidad';
		require_once('view/head.php');
		require_once('view/OLD/navbar_instructor.php');
		echo '<div class="container container_1"><div class="row">';
		require_once('view/Instructor/Disponibilidad.php');
		require_once('view/footer.php');
	}

	public function HorasDisponibilidad(){

	}
}

?>