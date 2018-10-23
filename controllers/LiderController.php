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
    public function Instructor()
    {
        $users = $this->model->getAllInstructores();
        parent::viewModule('lider', 'Instructores', 'Instructores', $users);
    }

    public function insertarInstructor()
    {
        $data = $_POST;
        $result = $this->model->insertarInstructor($data);
        if ($result) {
            parent::viewModule(
                'lider',
                'Instructores',
                'Registrado',
                array(
                    'type' => 'success',
                    'title' => 'AVISO',
                    'msg' => 'Exito registrado nuevo instructor',
                )
            );
        } else {
            parent::viewModule(
                'lider',
                'Instructores',
                'No registrado',
                array(
                    'type' => 'error',
                    'title' => 'AVISO',
                    'msg' => 'No pudo registrar nuevo instructor',
                )
            );
        }

    }
    public function SelectInstructorTabla()
    {
        $data = $_POST;
        $this->model->SelectInstructorTabla($data);
        parent::viewModule(
                'lider',
                'Instructores',
                'Instructores');
    }
}