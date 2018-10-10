<?php

require_once '../core/path.php';
require_once '../models/SecurityModel.php';

class SecurityController extends Path
{
    private $modelSecurity;

    public function __construct()
    {

        $this->modelSecurity = parent::model('security');

        $this->$modelSecurity->createSession();

        //Verficar autenticado usuario en $_SESSION con id_usuario
        if ($this->modelSecurity->isLogged()) {

            // Validar Usuario
            if (!$this->modelSecurity->validateUser($_SESSION)) {

                // Si no validar DNI y password de usuario
                header('Location: ?c=Inicio&m=NoAuth');
                exit();

            } else {
                // Valido usuario, redirecciona modulo rol
                // header('Location: $c=' . $_SESSION['name_rol']);
                $this->modelSecurity->redirectRoleModule();
                exit();
            }

        } else {
            // No hay existe $_SESSION, redirecciona al Inicio
            header('Location: $c=Inicio&NoAuth');

        }

    }

    public function destroy()
    {
        // session_unset();
        session_destroy();
        // session_start();
        // session_regenerate_id(true);
        header('location:?c=Inicio&m=index');
        // exit();
    }
}
