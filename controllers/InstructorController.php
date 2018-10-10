<?php

class InstructorController extends UsuarioController
{

    // private $modelSecurity;
    // public $model;

    public function __construct()
    {
        $this->modelSecurity = parent::model('security');
        $this->model = parent::model('instructor');
    }

    public function index()
    {
        parent::viewModule('instructor', 'index', 'Disponibilidad');
    }

    public function HorasDisponibilidad()
    {
        parent::view('instructor', 'Disponibilidad', 'Disponibilidad');
    }
}
