<?php

class LiderController extends Path
{
    // private $modelSecurity;
    // public $model;
    public $validateUser;

    public function __construct()
    {
        $this->modelSecurity = parent::model('security');
        // $this->modelSecurity->validateUser($_SESSION);
        $this->model = parent::model('lider');
    }

    public function index()
    {
        parent::viewModule('lider', 'index', 'Asignar Horarios');
    }

    public function Lider()
    {
        parent::viewModule('lider', 'index', 'Asignar Horarios');
    }

    public function Programas()
    {
        parent::viewModule('lider', 'Programas', 'Programas');
    }

    public function TrimestresPrograma()
    {
        parent::viewModule('lider', 'TrimestresPrograma', 'Trimestres Programa');
    }

    public function Competencias()
    {
        parent::viewModule('lider', 'Competencias', 'Competencias');
    }

    public function Fichas()
    {
        parent::viewModule('lider', 'Fichas', 'Fichas');
    }

    public function Jornadas()
    {
        parent::viewModule('lider', 'Jornadas', 'Jornadas');
    }
    public function Fusionar()
    {
        parent::viewModule('lider', 'Fusionar', 'Fusionar');
    }

}
