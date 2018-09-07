<?php

Class InstructorController{
	private $Smodel;
	private $Pmodel;

	function __construct(){
		try {
			$this->Smodel = new Security();
			$this->Smodel->SecurityInstructor();
			//$this->Pmodel = new pelicula();
		} catch (Exception $e) {
			$e->getMessage();
		}
	}
	public function Instructor(){
		//$r=$this->Pmodel->consultarP();
		require_once('view/head.php');
		require_once('view/old/navbar_instructor.php');
		require_once('view/Instructor/Disponibilidad.php');
		require_once('view/script.php');
	}

	public function Disponibilidad(){
		//$r=$this->Pmodel->consultarP();
	}
}

?>