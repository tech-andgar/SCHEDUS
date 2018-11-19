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
        $this->modelProyecto = parent::model('proyecto');
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
        $data['programaFormacion'] = $this->modelProgramaFormacion->getAllProgramaFormacion();
        $data['msgType'] = $msgType;
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

    public function Niveles()
    {
        parent::viewModule('lider', 'Niveles', 'Niveles');
    }

    public function Proyecto()
    {
        parent::viewModule('lider', 'Proyecto', 'Proyecto');
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
        var_dump($_POST);
        // $data = array(
        //     "dni" => $_POST['dni'],
        //     "nombre" => $_POST['nombre'],
        //     "apellido" => $_POST['apellido'],
        //     "email" => $_POST['email'],
        // );
        // $result = $this->modelInstructor->updateDataInstructor($data);
        // if ($result) {
        //     $msgType = array(
        //         'type' => 'success',
        //         'title' => 'AVISO',
        //         'msg' => 'Exito actualizado datos de instructor',
        //     );
        // } else {
        //     $msgType = array(
        //         'type' => 'error',
        //         'title' => 'AVISO',
        //         'msg' => 'No se pudo actualizar datos instructor',
        //     );
        // }

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
        // Completa lista de Programa de Formacion
        if (!isset($_REQUEST['q']) && !isset($_REQUEST['id']) && !isset($_REQUEST['codigo'])) {
            $output = $this->modelProgramaFormacion->getAllProgramaFormacion();
        }
        // Selecciona ID de Programa de Formacion
        elseif (isset($_REQUEST['id'])) {
            $output = $this->modelProgramaFormacion->getProgramaFormacionId($_REQUEST['id']);
        }
        elseif (isset($_REQUEST['codigo'])) {
            $output = $this->modelProgramaFormacion->getProgramaFormacionCodigo($_REQUEST['codigo']);
        }
        // Selecciona caracteres en lista de Programa de Formacion
        elseif (isset($_REQUEST['q'])) {
            $output = $this->modelProgramaFormacion->getProgramaFormacionName($_REQUEST['q']);
        }

        $dataFormacionPrograma = json_encode($output);
        echo $dataFormacionPrograma;
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
        $this->Programas($msgType);
    }

    public function updateDataProgramaFormacion()
    {
        $data = array(
            "txto_cod_programa" => $_POST['txto_cod_programa'],
            "txto_short_name_programa" => $_POST['txto_short_name_programa'],
            "txto_name_programa_formacion" => $_POST['txt_name_programa_formacion'],
            "txto_version_programa" => $_POST['txt_version_programa'],
            "txto_id_nivel_programa_formacion" => $_POST['txt_id_nivel_programa_formacion'],
            "txto_cod_proyecto" => $_POST['txt_cod_proyecto'],
        );
        $result = $this->modelInstructor->updateDataProgramaFormacion($data);
        if ($result) {
            $msgType = array(
                'type' => 'success',
                'title' => 'AVISO',
                'msg' => 'Exito actualizado datos de Programa de Formacion',
            );
        } else {
            $msgType = array(
                'type' => 'error',
                'title' => 'AVISO',
                'msg' => 'No se pudo actualizar Programa de Formacion',
            );
        }

        $this->Instructor($msgType);
    }

    // Control de Proyecto
    public function getDataProyecto()
    {
        // Completa lista de Proyecto
        if (!isset($_REQUEST['q']) && !isset($_REQUEST['id'])) {
            $output = $this->modelProyecto->getAllProyecto();
        }
        // Selecciona ID de Proyecto
        elseif (isset($_REQUEST['id'])) {
            $output = $this->modelProyecto->getProyectoId($_REQUEST['id']);
        }
        // Selecciona caracteres en lista de Proyecto
        elseif (isset($_REQUEST['q'])) {
            $output = $this->modelProyecto->getProyectoName($_REQUEST['q']);
        }

        $dataProyecto = json_encode($output);
        echo $dataProyecto;
    }


}
