<?php

Class LiderController{
	private $Smodel;
	private $Pmodel;


	public function Lider(){

		require_once('view/head.php');
		require_once('view/OLD/navbar_lider.php');
		require_once('view/Lider/Lider.php');
	}
	public function Programas(){

		require_once('view/head.php');
		require_once('view/OLD/navbar_lider.php');
		require_once('view/Lider/Programas.php');
	}
	public function TrimestresPrograma(){

		require_once('view/head.php');
		require_once('view/OLD/navbar_lider.php');
		require_once('view/Lider/TrimestresPrograma.php');
	}
	public function Competencias(){

		require_once('view/head.php');
		require_once('view/OLD/navbar_lider.php');
		require_once('view/Lider/Competencias.php');
	}
	public function Fichas(){

		require_once('view/head.php');
		require_once('view/OLD/navbar_lider.php');
		require_once('view/Lider/Fichas.php');
	}
	public function Jornadas(){

		require_once('view/head.php');
		require_once('view/OLD/navbar_lider.php');
		require_once('view/Lider/Jornadas.php');
	}
	public function Fusionar(){

		require_once('view/head.php');
		require_once('view/OLD/navbar_lider.php');
		require_once('view/Lider/Fusionar.php');
	}

}

?>