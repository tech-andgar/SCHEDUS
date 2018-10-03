<?php

class InicioController extends Path
{

    private $modelSecurity;
    public $model;

    public function __construct()
    {
        $this->modelSecurity = parent::model('security');
        $this->model = parent::model('inicio');
    }

    public function index()
    {
        parent::view('inicio', 'index', 'Horario de formación');
    }

    public function RecuperarContrasena()
    {
        parent::view('inicio', 'recuperarContrasena', 'Recuperar Contraseña');
    }

    public function prueba()
    {
        $title = "PRUEBA";
        require_once 'views/all/head.php';
        require_once 'views/Inicio/prueba.html';
    }
    public function CambiarContrasena()
    {
        $title = "Nueva Contraseña";
        require_once 'views/all/head.php';
        require_once 'views/all/navbar.php';
        echo '<div class="container bg-light"><div class="row">';
        require_once 'views/Inicio/Cambiar_contrasena.php';
        require_once 'views/all/footer.php';
    }

}
