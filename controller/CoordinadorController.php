<?php

Class CoordinadorController{
	private $Smodel;
	private $Pmodel;


	public function Aprobar(){

		$title = 'Aprobar';
		require_once('view/head.php');
		require_once('view/OLD/navbar_Coordinador.php');
		echo '<div class="container container_1"><div class="row">';
		require_once('view/Coordinador/Aprobar.php');
		require_once('view/footer.php');
	}

	public function Horas_Instructores(){
		$title = 'Horas Instructores';
        require_once('view/head.php');
		require_once('view/OLD/navbar_Coordinador.php');
		echo '<div class="container container_1"><div class="row">';
		require_once('view/Coordinador/Horas_Instructores.php');
		require_once('view/footer.php');
	}
}

?>