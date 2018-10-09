<?php

class InicioController extends Path
{

    private $modelSecurity;
    public $model;
    public $modelUsuario;

    public function __construct()
    {
        $this->modelSecurity = parent::model('security');
        $this->model = parent::model('inicio');
        $this->modelUsuario = parent::model('usuario');
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

    public function prueba2()
    {
        $title = "PRUEBA2";
        //require_once 'views/all/head.php';
        require_once 'views/Inicio/prueba2.html';
        //require_once 'views/all/footer.php';
    }

    public function ValidarUsuario()
    {
        $data = $_POST;
        $result = $this->modelUsuario->VerificarLogin($data);
        if (!$result) {
            header('location:?c=Inicio');
        } else {
            $cod_rol = $result->cod_rol;
            $dni     = $result->documento;
            $this->modelSecurity->loginData($dni, $cod_rol);
            $result = json_encode($result[0]);
            echo $result;
        }
        

    }

    // TODO FIX
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
