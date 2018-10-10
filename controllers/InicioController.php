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
                    'title'=>'Se requiere autorización',
                    'msg'=>'la solicitud requiere autenticación de usuario'
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
        //$this->modelSecurity = parent::model('security');
        $data = $_POST;
        $user = $this->modelUsuario->VerificarLogin($data);
        if (!$user) {
            header('location:?c=Inicio&m=NoAuth');
        } 
        else {
            //TODO [WIP] NEED FIX 
            securityModel::redirectRoleModule();
            //$this->modelSecurity->redirectRoleModule();
            // $result = json_encode($result[0]);
            // echo $result;
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
