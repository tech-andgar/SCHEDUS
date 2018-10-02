<?php

class IndexController {
	private $Smodel;

	public function __construct(){
		$this->Smodel = new Security();
	}
	public function Index(){
		$title = "Horario de formación";
		require_once('view/head.php');
		require_once('view/navbar.php');
		require_once('view/index/index.php');
		require_once('view/footer.php');
	}
	public function RecuperarContrasena(){
		$title = "Recuperar Contraseña";
		require_once('view/head.php');
		require_once('view/navbar.php');
		require_once('view/index/recuperarContrasena.php');
		require_once('view/footer.php');
	}
	public function prueba(){
		$title = "PRUEBA";
		require_once('view/head.php');
		require_once('view/index/prueba.html');
	}
	public function CambiarContrasena(){
		$title = "Nueva Contraseña";
		require_once('view/head.php');
		require_once('view/navbar.php');
		echo '<div class="container bg-light"><div class="row">';
		require_once('view/index/Cambiar_contrasena.php');
		require_once('view/footer.php');
	}

}

?>