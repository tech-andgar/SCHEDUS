<?php

class InicioController extends Path
{

    private $modelSecurity;
    public $model;
    public $modelUsuario;

    public function __construct()
    {
        $this->model = parent::model('inicio');
        $this->modelUsuario = parent::model('usuario');
        $this->modelSecurity = parent::model('security');
    }

    public function index()
    {
        parent::view('inicio', 'index', 'Horario de formación');
    }

    public function noAuth()
    {
        parent::view(
            'inicio',
            'index',
            'Horario de formación',
            array(
                'title' => 'Se requiere autorización',
                'msg' => 'la solicitud requiere autenticación de usuario',
            )
        );
    }

    public function noRegistered()
    {
        parent::view(
            'inicio',
            'index',
            'Horario de formación',
            array(
                'title' => 'AVISO',
                'msg' => 'Esta cuenta no existe o la contraseña es incorrecta. Si no recuerdas la cuenta, restablécela ahora.',
            )
        );
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
        try {
            
            $data = $_POST;
            $user = $this->modelUsuario->VerificarLogin($data);
            
            if (!$user) {
                header('location:?c=Inicio&m=noRegistered');
            } else {
                $this->modelSecurity->LoginSession($user);
            }

        } catch (Exception $e) {
            die($e->getMessage());
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
