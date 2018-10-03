<?php

class CoordinadorController extends Path
{
    private $modelSecurity;
    public $model;

    public function __construct()
    {
        $this->modelSecurity = parent::model('security');
        $this->model = parent::model('coordinador');
    }

    public function index()
    {
        parent::view('coordinador', 'Aprobar', 'Aprobar');
    }

    public function Aprobar()
    {
        parent::view('coordinador', 'Aprobar', 'Aprobar');
    }

    public function Horas_Instructores()
    {
        parent::view('coordinador', 'Horas_Instructores', 'Horas Instructores');
    }
}
