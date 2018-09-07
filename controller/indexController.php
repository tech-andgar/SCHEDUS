<?php

class IndexController {
	private $Smodel;

	public function __construct(){
		$this->Smodel = new Security();
	}
	public function Index(){
		require_once('view/head.php');
		require_once('view/navbar.php');
		require_once('view/index/index.php');
		require_once('view/script.php');
	}

}

?>