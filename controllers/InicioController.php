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

    // Render Views
    public function index()
    {
        //parent::view('Modulo', 'PaginaVista', 'Titulo', 'infoUser['title' => '','msg' =>'']');
        parent::view('inicio', 'index', 'Horario de formación');
    }

    public function noAuth()
    {
        $data['msgType'] = array(
            'type' => 'error',
            'title' => 'Se requiere autorización',
            'msg' => 'La solicitud requiere autenticación de usuario',
        );

        //parent::view('Modulo', 'PaginaVista', 'Titulo', 'data['msgType']['type'=>'', title' => '','msg' =>'']');
        parent::view('inicio', 'index', 'Horario de formación', $data);
    }

    public function noRegistered()
    {
        $data['msgType'] = array(
            'type' => 'error',
            'title' => 'AVISO',
            'msg' => 'Esta cuenta no existe o la contraseña es incorrecta. Si no recuerdas la cuenta, restablécela ahora.',
        );

        //parent::view('Modulo', 'PaginaVista', 'Titulo', 'data['msgType']['type'=>'', title' => '','msg' =>'']');
        parent::view('inicio', 'index', 'Horario de formación', $data);
    }

    public function recuperarContrasena()
    {
        parent::view('inicio', 'recuperarContrasena', 'Recuperar Contraseña');
    }

    // Method Action
    public function validarUsuario()
    {
        try {

            $data = $_POST;
            $user = $this->modelUsuario->verificarLogin($data);

            if (!$user) {
                header('location:noRegistered');
            } else {
                $this->modelSecurity->LoginSession($user);
            }

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function sendMailRecoveryPassword()
    {
        try {
            if (isset($_POST['emailRecovery'])) {
                $data['emailRecovery'] = $_POST['emailRecovery'];
                $user = $this->modelUsuario->verificarEmail($data);

                if (!$user) {
                    echo 'No encontrado correo en DB';
                    // header('location:?c=Inicio&m=noRegistered');
                } else {
                    echo 'encontrado correo en DB';

                    //Mando a llamar a la funcion que se encarga de enviar el correo eletronico
                    require_once 'MailController.php';


                    //Ruta de la plantilla HTML para enviar nuestro mensaje
                    //$template = "./index.html";

                    /* Inicio captura de datos enviados por $_POST para enviar el correo */

                    //Correo electronico que recibira el mensaje
                    // $txt_message = $_POST['message'];
                    // $mail_subject = $_POST['subject'];
                    $mail_sendtoAddAddressMail = $data['emailRecovery'];
                    $mail_subject = 'Recuperar la contraseña';

                    sendemail($mail_sendtoAddAddressMail, $mail_subject);
                    //$this->modelSecurity->LoginSession($user);
                }
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    // TODO FIX
    public function cambiarContrasena()
    {
        parent::view('inicio', 'cambiarContrasena', 'Cambiar Contraseña');
    }

    // Test Render Views
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

    // public function CambiarContrasena()
    // {
    //     $title = "Nueva Contraseña";
    //     require_once 'views/all/head.php';
    //     require_once 'views/all/navbar.php';
    //     echo '<div class="container bg-light"><div class="row">';
    //     require_once 'views/Inicio/Cambiar_contrasena.php';
    //     require_once 'views/all/footer.php';
    // }
}
