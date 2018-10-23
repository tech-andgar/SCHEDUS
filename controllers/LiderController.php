<?php

class LiderController extends Path
{
    // private $modelSecurity;
    // public $model;

    public function __construct()
    {
        $this->modelSecurity = parent::model('security');
        $this->modelSecurity->securityLider();
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
    public function Instructor($msgType = [])
    {
        $users = $this->model->getAllInstructores();
        $data[0]=$msgType;
        $data[1]=$users;
        parent::viewModule('lider', 'Instructores', 'Instructores', $data);
    }

    public function insertarInstructor()
    {
        $data = $_POST;
        $result = $this->model->insertarInstructor($data);
        if ($result) {
            $msgType= array(
                'type' => 'success',
                'title' => 'AVISO',
                'msg' => 'Exito registrado nuevo instructor',
            );

        } else {
            $msgType = array(
                'type' => 'error',
                'title' => 'AVISO',
                'msg' => 'No pudo registrar nuevo instructor',
            );
        }
        $this->Instructor($msgType);
    }

public function changeStatus()
{
    var_dump($_POST);
}
}