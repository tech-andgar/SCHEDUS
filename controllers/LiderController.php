<?php


class LiderController extends Path
{
    public function __construct()
    {
        $this->modelSecurity = parent::model('security');
        $this->modelSecurity->securityLider();
        $this->modelLider = parent::model('lider');
        $this->modelInstructor = parent::model('instructor');
        $this->modelFicha = parent::model('ficha');
        $this->modelEstadoFicha = parent::model('estadoFicha');
        $this->modelNivelFormacion = parent::model('nivelProgramaFormacion');
        $this->modelProgramaFormacion = parent::model('programaFormacion');
        $this->modelGrupo = parent::model('grupo');
    }

    // Renderizado vistas
    public function index()
    {
        parent::viewModule('lider', 'index', 'Incio');
    }

    public function Horarios()
    {
        parent::viewModule('lider', 'Horarios', 'Horarios');
    }

    public function Programas($msgType = [])
    {
        $programaFormacion = $this->modelProgramaFormacion->getAllProgramaFormacion();

        // $data[0] = $msgType;
        // $data[1] = $fichas;
        // $data[3] = $nivelFormacion;
        // $data[4] = $programaFormacion;
        $data['programaFormacion'] = $programaFormacion;
        parent::viewModule('lider', 'Programas', 'Programas', $data);
    }

    public function TrimestresPrograma()
    {
        parent::viewModule('lider', 'TrimestresPrograma', 'Trimestres Programa');
    }

    public function Competencias()
    {
        parent::viewModule('lider', 'Competencias', 'Competencias');
    }

    public function Ambiente()
    {
        parent::viewModule('lider', 'Ambiente', 'Ambiente');
    }

    public function Fichas($msgType=[])
    {

        $fichas = $this->modelFicha->getAllFichas();
        $grupos = $this->modelGrupo->getAllGrupos();
        $estadoFicha = $this->modelEstadoFicha->getAllEstadoFicha();
        $nivelFormacion = $this->modelNivelFormacion->getAllNivelFormacion();
        $programaFormacion = $this->modelProgramaFormacion->getAllProgramaFormacion();

        $data['msgType'] = $msgType;
        $data['fichas'] = $fichas;
        $data['grupos'] = $grupos;
        $data['estadoFicha'] = $estadoFicha;
        $data['nivelFormacion'] = $nivelFormacion;
        $data['programaFormacion'] = $programaFormacion;
        parent::viewModule('lider', 'Fichas', 'Fichas', $data);
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
        $instructores = $this->modelInstructor->getAllInstructores();
        $data[0] = $msgType;
        $data['instructores'] = $instructores;
        parent::viewModule('lider', 'Instructores', 'Instructores', $data);
    }
    
    public function Grupos()
    {
        parent::viewModule('lider', 'Grupos', 'Grupos');
    }
  
    // Control de Instructor
    public function insertarInstructor()
    {
        $data = $_POST;
        $result = $this->modelInstructor->insertarInstructor($data);
        if ($result) {
            $msgType = array(
                'type' => 'success',
                'title' => 'AVISO',
                'msg' => 'Exito registrando nuevo instructor',
            );

        } else {
            $msgType = array(
                'type' => 'error',
                'title' => 'AVISO',
                'msg' => 'No se pudo registrar nuevo instructor',
            );
        }
        $this->Instructor($msgType);
    }

    public function changeStatusInstructor()
    {
        if ($_POST['state_id'] == "2") {
            $status = "3";
        } else if ($_POST['state_id'] == "3") {
            $status = "2";
        }

        $data = array(
            "id_instructor" => $_POST['id_instructor'],
            "status" => $status,
        );

        $result = $this->modelInstructor->updatedStatusInstructor($data); // Enviar al DB
    }

    public function getDataInstructor()
    {
        $dataInstructor = json_encode($this->modelInstructor->getInstructor($_POST['id_instructor']));
        echo $dataInstructor;
    }

    public function updateDataInstructor()
    {
        $data = array(
            "dni" => $_POST['dni'],
            "nombre" => $_POST['nombre'],
            "apellido" => $_POST['apellido'],
            "email" => $_POST['email'],
        );
        $result = $this->modelInstructor->updateDataInstructor($data);
        if ($result) {
            $msgType = array(
                'type' => 'success',
                'title' => 'AVISO',
                'msg' => 'Exito actualizado datos de instructor',
            );
        } else {
            $msgType = array(
                'type' => 'error',
                'title' => 'AVISO',
                'msg' => 'No se pudo actualizar datos instructor',
            );
        }

        $this->Instructor($msgType);
    }

    // Control de Ficha
    public function insertarFicha()
    {
        $data = $_POST;
        $result = $this->modelFicha->insertarFicha($data);
        if ($result) {
            $msgType = array(
                'type' => 'success',
                'title' => 'AVISO',
                'msg' => 'Exito registrando nueva Ficha',
            );

        } else {
            $msgType = array(
                'type' => 'error',
                'title' => 'AVISO',
                'msg' => 'No pudo registrar nueva Ficha',
            );
        }
        $this->Fichas($msgType);
    }
    public function changeStatusFicha()
    {
        if ($_POST['state_id'] == "2") {
            $status = "3";
        } else if ($_POST['state_id'] == "3") {
            $status = "2";
        }

        $data = array(
            "id_Ficha" => $_POST['id_Ficha'],
            "status" => $status,
        );

        $result = $this->modelFicha->updatedStatusFicha($data); // Enviar al DB
    }

    public function getDataFicha()
    {
        $dataFicha = json_encode($this->modelFicha->getFicha($_POST['idFicha']));
        echo $dataFicha;
    }

    public function getAllDataFichas()
    {
        $dataFicha = $this->modelFicha->getAllFichas();
        $dataFicha = json_encode($dataFicha);
        echo $dataFicha;
    }

    public function getDataEstadoFicha()
    {
        // Completa lista de estado de ficha
        if (!isset($_REQUEST['q']) && !isset($_REQUEST['id'])) {
            $output = $this->modelEstadoFicha->getAllEstadoFicha();
        }
        // Selecciona ID de estado de ficha
        elseif (isset($_REQUEST['id'])) {
            $output = $this->modelEstadoFicha->getEstadoFichaId($_REQUEST['id']);
        }
        // Selecciona caracteres en lista de estado de ficha
        elseif (isset($_REQUEST['q'])) {
            $output = $this->modelEstadoFicha->getEstadoFichaName($_REQUEST['q']);
        }

        $dataEstadoFicha = json_encode($output);
        echo $dataEstadoFicha;
    }

    public function updateDataFicha()
    {
var_dump($_POST);
        // $data = array(
        //     "dni" => $_POST['dni'],
        //     "nombre" => $_POST['nombre'],
        //     "apellido" => $_POST['apellido'],
        //     "email" => $_POST['email'],
        // );
        $result = $this->modelFicha->updateDataFicha($data);
        if ($result) {
            $msgType = array(
                'type' => 'success',
                'title' => 'AVISO',
                'msg' => 'Exito actualizando datos de la ficha',
            );
        } else {
            $msgType = array(
                'type' => 'error',
                'title' => 'AVISO',
                'msg' => 'No pudo actualizar datos de la ficha',
            );
        }

        $this->Ficha($msgType);
    }

//Control Programa de Formacion

    public function getDataNivelProgramaFormacion()
    {
        // Completa lista de Nivel Programa de Formacion
        if (!isset($_REQUEST['q']) && !isset($_REQUEST['id'])) {
            $output = $this->modelNivelFormacion->getAllNivelFormacion();
        }
        // Selecciona ID de Nivel Programa de Formacion
        elseif (isset($_REQUEST['id'])) {
            $output = $this->modelNivelFormacion->getNivelFormacionId($_REQUEST['id']);
        }
        // Selecciona caracteres en lista de Nivel Programa de Formacion
        elseif (isset($_REQUEST['q'])) {
            $output = $this->modelNivelFormacion->getNivelFormacionName($_REQUEST['q']);
        }

        $dataNivelFormacion = json_encode($output);
        echo $dataNivelFormacion;
    }
    public function getDataProgramaFormacion()
    {
        $dataFicha = json_encode($this->modelProgramaFormacion->getProgramaFormacion($_POST['idProgramaFormacion']));
        echo $dataFicha;
    }

    public function getAllDataProgramaFormacion()
    {
        $dataEstadoFicha = json_encode($this->modelProgramaFormacion->getAllProgramaFormacion());
        echo $dataEstadoFicha;
    }

    public function insertarProgramaFormacion()
    {
        $data = $_POST;
        $result = $this->modelProgramaFormacion->insertarProgramaFormacion($data);
        if ($result) {
            $msgType = array(
                'type' => 'success',
                'title' => 'AVISO',
                'msg' => 'Exito registrando nueva Programa de Formacion',
            );

        } else {
            $msgType = array(
                'type' => 'error',
                'title' => 'AVISO',
                'msg' => 'No pudo registrar nueva Programa de Formacion',
            );
        }
        $this->Fichas($msgType);
    }


}
