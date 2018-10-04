<?php

class InstructorController extends Path
{

    private $modelSecurity;
    public $model;

    public function __construct()
    {
        $this->modelSecurity = parent::model('security');
        $this->model = parent::model('instructor');
    }

    public function index()
    {
        parent::view('instructor', 'index', 'Disponibilidad');
    }

    public function HorasDisponibilidad()
    {
        parent::view('instructor', 'Disponibilidad', 'Disponibilidad');
    }
}
