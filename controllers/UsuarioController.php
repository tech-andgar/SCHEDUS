<?php

class UsuarioController extends Path
{
    protected $modelSecurity;
    public $model;

    public function __construct()
    {
        $this->modelSecurity = parent::model('security');
        // $validateUser = $this->modelSecurity->validateUser();
        // if (!$validateUser) {
        //     header('location:?c=Inicio');
        // }
    }

    public function index()
    {

    }

    public function updateDataUser()
    {
        var_dump($_POST);
    }
}
