<?php

Class LiderController{
	private $Smodel;
	private $Pmodel;


	public function Lider(){
		$title = 'Asignar Horarios';
		require_once('view/head.php');
		require_once('view/OLD/navbar_lider.php');
		require_once('view/Lider/Lider.php');
	}
	public function Programas(){
		$title ='Programas';
		require_once('view/head.php');
		require_once('view/OLD/navbar_lider.php');
		echo '<div class="container container_1"><div class="row">';
		require_once('view/OLD/NavbarDerechoController.php');
		require_once('view/Lider/Programas.php');
	}
	public function TrimestresPrograma(){
		$title ='Trimestres Programa';
		require_once('view/head.php');
		require_once('view/OLD/navbar_lider.php');
		echo '<div class="container container_1"><div class="row">';
		require_once('view/OLD/NavbarDerechoController.php');
		require_once('view/Lider/TrimestresPrograma.php');
	}
	public function Competencias(){
		$title = 'Competencias';
		require_once('view/head.php');
		require_once('view/OLD/navbar_lider.php');
		echo '<div class="container container_1"><div class="row">';
		require_once('view/OLD/NavbarDerechoController.php');
		require_once('view/Lider/Competencias.php');
	}
	public function Fichas(){
		$title = 'Fichas';
		require_once('view/head.php');
		require_once('view/OLD/navbar_lider.php');
		echo '<div class="container container_1"><div class="row">';
		require_once('view/OLD/NavbarDerechoController.php');
		require_once('view/Lider/Fichas.php');
	}
	public function Jornadas(){
		$title = 'Jornadas';
		require_once('view/head.php');
		require_once('view/OLD/navbar_lider.php');
		echo '<div class="container container_1"><div class="row">';
		require_once('view/OLD/NavbarDerechoController.php');
		require_once('view/Lider/Jornadas.php');
	}
	public function Fusionar(){
		$title = 'Fusionar';
		require_once('view/head.php');
		require_once('view/OLD/navbar_lider.php');
		echo '<div class="container container_1"><div class="row">';
		require_once('view/OLD/NavbarDerechoController.php');
		require_once('view/Lider/Fusionar.php');
	}

}

?>