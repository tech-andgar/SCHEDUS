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
        $data[0] = $msgType;
        $data[1] = $users;
        parent::viewModule('lider', 'Instructores', 'Instructores', $data);
    }

    public function insertarInstructor()
    {
        $data = $_POST;
        $result = $this->model->insertarInstructor($data);
        if ($result) {
            $msgType = array(
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

    public function changeStatusInstructor()
    {
        extract($_POST);
        //var_dump($_POST);


        /*switch ($_POST['status_instructor']) {
            case 'on': // 2 Activo
                $data['status'] = 2;
                break;
            case 'off': // 3 Inactivo
                $data['status'] = 3;
                break;
            default:
                echo 'No pudo actualizar datos';
                break;
        }
        $data['id_instructor'] = $_POST['id_instructor'];
        $result = $this->model->updatedStatusInstructor($data); // Enviar al DB
        if ($result) {
            $msgType = array(
                'type' => 'success',
                'title' => 'AVISO',
                'msg' => 'Exito actualizado estado de instructor',
            );

        } else {
            $msgType = array(
                'type' => 'error',
                'title' => 'AVISO',
                'msg' => 'No pudo actualizar estado instructor',
            );
        }
        $this->Instructor($msgType);*/
if($_POST['state_id']=="2"){
  $status="3";
}else if($_POST['state_id']=="3"){
    $status="2";
}


   $data=array(
       "id_instructor"=>$_POST['id'],
          "status"=>$status
   );
    $result = $this->model->updatedStatusInstructor($data); // Enviar al DB
if ($result) {
    $msgType = array(
        'type' => 'success',
        'title' => 'AVISO',
        'msg' => 'Exito actualizado estado de instructor',
    );

} else {
    $msgType = array(
        'type' => 'error',
        'title' => 'AVISO',
        'msg' => 'No pudo actualizar estado instructor',
    );
}

    }
}
