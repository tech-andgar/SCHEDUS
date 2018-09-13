<?php

Class LiderController{
	private $Smodel;
	private $Pmodel;


	public function Lider(){

		require_once('view/head.php');
		require_once('view/OLD/navbar_lider.php');
		require_once('view/Lider/Lider.php');
	}
	public function Fusionar(){

		require_once('view/head.php');
		require_once('view/OLD/navbar_lider.php');
		require_once('view/Lider/Fusionar.php');
	}

}

?>