<?php

Class InstructorController{
	private $Smodel;
	private $Pmodel;


	public function Disponibilidad(){

		$title = 'Disponibilidad';
		require_once('view/head.php');
		require_once('view/OLD/navbar_instructor.php');
		require_once('view/Instructor/Disponibilidad.php');
		require_once('view/footer.php');
	}

	public function HorasDisponibilidad(){

	}
}

?>