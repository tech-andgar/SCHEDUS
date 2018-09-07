<?php

Class UsuarioController{

	private $Smodel;
	private $usuarioModel;

	public function __construct(){
		$this->Smodel = new Security();
		$this->usuarioModel = new Usuario();
	}

	public function ViewRecuperarContrasena(){
		require_once('view/head.php');
		require_once('view/navbar.php');
		require_once('view/index/recuperar.html');
		require_once('view/script.php');
	}

	public function ViewCambiarContrasena(){
		require_once('view/head.php');
		require_once('view/navbar.php');
		require_once('view/index/Cambiar_contrasena.html');
		require_once('view/script.php');
	}

	public function ValidarUsuario()
    {
		foreach ($this->usuarioModel->VerificarLogin($_POST) as $r) {
			if (isset($r->dni)) {
				$this->Smodel->loginData($r->dni, $r->cod_rol);
			}
			else{
				//header('location:?c=Index&m=Index');
			}
		}


		// if ($this->usuarioModel->LoginUser($data)) {
		// 	header('location:?c=Instructor&m=Disponibilidad');
		// }
		// else {
		// 	header('location:?c=Index&m=index&failed=1');
		// }
	}
}

?>