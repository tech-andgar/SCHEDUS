<?php

class SecurityController extends Path
{

    private $modelSecurity;

    public function __construct()
    {
        $this->modelSecurity = parent::model('security');
    }

    public function destroy()
    {
        session_unset();
        session_destroy();
        session_start();
        session_regenerate_id(true);
        header('location:?c=Inicio&m=index');
        exit();
    }
}
