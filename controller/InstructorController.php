<?php

Class InstructorController extends instructor{
	private $Smodel;
	private $Pmodel;


	public function Disponibilidad(){
		$r=$this->Pmodel->consultarP();
		require_once('view/head.php');
		require_once('view/old/narbar_instructor.php');
		require_once('view/Instructor/Disponibilidad.html');
		require_once('view/script.php');
	}
}

?>