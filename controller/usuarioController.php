<?php

Class usuarioController{
		
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
	public function LoginUser()
    {
	
    }
	
}

?>