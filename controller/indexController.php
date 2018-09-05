<?php

class indexController {
	private $Smodel;
	public function __construct(){
		$this->Smodel = new Security();
	}
	public function index(){
		require_once('view/head.php');
		require_once('view/navbar.php');
		require_once('view/index/index.html');
		require_once('view/script.php');
	}
public function validar(){
		// $array = array("id" => $_POST['id']);
		foreach (self::BusquedaLogin($_POST)as $r) {
		}
			if (isset($r->dni)) {
					$this->Smodel->loginData($r->dni,$r->cod_rol);
			}
			else{
				header('location:view/index/index.html');
			}
	}

}

?>