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
    public function index($msgType = [])
    {
        $data['msgType'] = $msgType;
        //parent::view('Modulo', 'PaginaVista', 'Titulo', 'infoUser['title' => '','msg' =>'']');
        //parent::view('Modulo', 'PaginaVista', 'Titulo', 'data['msgType']['type'=>'', title' => '','msg' =>'']');
        parent::view('inicio', 'index', 'Horario de formación', $data);
    }

    public function noAuth()
    {
        $msgType = array(
            'type' => 'error',
            'title' => 'Se requiere autorización',
            'msg' => 'La solicitud requiere autenticación de usuario',
        );
        $this->index($msgType);
    }

    public function noRegistered()
    {
        $msgType = array(
            'type' => 'error',
            'title' => 'AVISO',
            'msg' => 'Esta cuenta no existe o la contraseña es incorrecta. Si no recuerdas la cuenta, restablécela ahora.',
        );

        $this->index($msgType);
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
                    //echo 'No encontrado correo en DB';
                    $msgType = array(
                        'type' => 'error',
                        'title' => 'AVISO',
                        'msg' => 'Esta cuenta no existe. Si no recuerdas la cuenta, comunicarla a coordinador.',
                    );
                    // header('location:?c=Inicio&m=noRegistered');
                } else {
                    //echo 'encontrado correo en DB';

                    //Mando a llamar a la funcion que se encarga de enviar el correo eletronico
                    require_once 'MailController.php';


                    //Ruta de la plantilla HTML para enviar nuestro mensaje
                    //$template = "./index.html";

                    /* Inicio captura de datos enviados por $_POST para enviar el correo */


                    $fileTemplate = APP_URL . 'views/all/templateRecoveryPassword.php';

                    //Correo electronico que recibira el mensaje
                    $data = array(
                            'user' => $user,
                            'mail_subject' => 'Restablecer una nueva contraseña para SCHEDUS ',
                            'path_template' => $fileTemplate,
                            'txt_message' => __DIR__,
                        );

                    if (sendEmail($data)) {
                        $msgType = array(
                            'type' => 'success',
                            'title' => 'AVISO',
                            'msg' => 'Mensaje de restablecido la contraseña ha sido enviado!',
                        );
                    }else {
                        $msgType = array(
                            'type' => 'error',
                            'title' => 'AVISO',
                            'msg' => "No se pudo enviar el mensaje.. Error de correo",
                        );
                    }
                    //$this->modelSecurity->LoginSession($user);
                }
            }

            $this->index($msgType);

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
        // require_once 'views/Inicio/prueba2.html';
        require_once 'views/all/templateRecoveryPassword.php';
        //require_once 'views/all/footer.php';
    }

    public function prueba3()
    {
        $title = "PRUEBA2";
        //require_once 'views/all/head.php';
        // require_once 'views/Inicio/prueba2.html';
        require_once 'views/Inicio/prueba34.html';
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
