<?php

class SecurityController extends Path
{

    
    private $modelSecurity;

    public function __construct()
    {
        try{
            $this->modelSecurity = parent::model('security');
        } catch (Exception $e){
            die($e->getMessage());
        }
    }

    public function logOut()
    {
        $this->modelSecurity->sessionDestroy();
    }



    public function demo()
    {
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
}
