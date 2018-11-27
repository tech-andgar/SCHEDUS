<?php
require_once realpath(dirname(__FILE__)) . '/EstadoProgramaFormacionModel.php';
require_once realpath(dirname(__FILE__)) . '/NivelProgramaFormacionModel.php';
require_once realpath(dirname(__FILE__)) . '/ProyectoModel.php';
require_once realpath(dirname(__FILE__)) . '/CompetenciaModel.php';
require_once realpath(dirname(__FILE__)) . '/FichaModel.php';
require_once realpath(dirname(__FILE__)) . '/DB.php';

/**
 * @access public
 * @author Afgarcia0479
 * @package Programa de formación
 */
class ProgramaFormacionModel extends DB
{
    /**
     * @AttributeType int
     */
    private $id_programa_formacion;
    /**
     * @AttributeType String
     */
    private $codigo;
    /**
     * @AttributeType String
     */
    private $short_name_programa_formacion;
    /**
     * @AttributeType String
     */
    private $name_programa_formacion;
    /**
     * @AttributeType String
     */
    private $version_programa;
    /**
     * @AttributeType Timestamp
     */
    private $create_time;
    /**
     * @AttributeType Timestamp
     */
    private $update_time;
    /**
     * @AttributeType Integer
     */
    private $version;
    /**
     * @AssociationType Programa de formación\EstadoProgramaFormacionModel
     * @AssociationMultiplicity 0..1
     */
    public $cod_estado_programa_formacion;
    /**
     * @AssociationType Programa de formación\NivelProgramaFormacionModel
     * @AssociationMultiplicity 0..1
     */
    public $cod_nivel_programa_formacion;
    /**
     * @AssociationType Programa de formación\ProyectoModel
     * @AssociationMultiplicity 0..1
     */
    public $cod_proyecto;
    /**
     * @AssociationType Programa de formación\CompetenciaModel
     * @AssociationMultiplicity 0..*
     */
    public $competencia = array();
    /**
     * @AssociationType Ficha\FichaModel
     * @AssociationMultiplicity 0..*
     */
    public $ficha = array();

    /**
     * @access public
     * @return int
     * @ReturnType int
     */
    public function getId_programa_formacion()
    {
        return $this->id_programa_formacion;
    }

    /**
     * @access public
     * @param int id_programa_formacion
     * @return void
     * @ParamType id_programa_formacion int
     * @ReturnType void
     */
    public function setId_programa_formacion($id_programa_formacion)
    {
        $this->id_programa_formacion = $id_programa_formacion;
    }

    /**
     * @access public
     * @return String
     * @ReturnType String
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @access public
     * @param String codigo
     * @return void
     * @ParamType codigo String
     * @ReturnType void
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    /**
     * @access public
     * @return String
     * @ReturnType String
     */
    public function getShort_name_programa_formacion()
    {
        return $this->short_name_programa_formacion;
    }

    /**
     * @access public
     * @param String short_name_programa_formacion
     * @return void
     * @ParamType short_name_programa_formacion String
     * @ReturnType void
     */
    public function setShort_name_programa_formacion($short_name_programa_formacion)
    {
        $this->short_name_programa_formacion = $short_name_programa_formacion;
    }

    /**
     * @access public
     * @return String
     * @ReturnType String
     */
    public function getName_programa_formacion()
    {
        return $this->name_programa_formacion;
    }

    /**
     * @access public
     * @param String name_programa_formacion
     * @return void
     * @ParamType name_programa_formacion String
     * @ReturnType void
     */
    public function setName_programa_formacion($name_programa_formacion)
    {
        $this->name_programa_formacion = $name_programa_formacion;
    }

    /**
     * @access public
     * @return String
     * @ReturnType String
     */
    public function getVersion_programa()
    {
        return $this->version_programa;
    }

    /**
     * @access public
     * @param String version_programa
     * @return void
     * @ParamType version_programa String
     * @ReturnType void
     */
    public function setVersion_programa($version_programa)
    {
        $this->version_programa = $version_programa;
    }

    public function getAllProgramaFormacion()
    {
        try {
            $stm = parent::conectar()->prepare(preparedSQL::GET_ALL_PROGRAMA_FORMACION);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ); // Retorno completa de lista de Programa de Formacion
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function getProgramaFormacionId($idProgramaFormacion)
    {
        try {
            $stm = parent::conectar()->prepare(preparedSQL::GET_PROGRAMA_FORMACION_ID);
            $stm->bindParam(1, $idProgramaFormacion, PDO::PARAM_STR);
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ); // Retorno data Formacion de Programa
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function getProgramaFormacionCodigo($codigoProgramaFormacion)
    {
        try {
            $stm = parent::conectar()->prepare(preparedSQL::GET_PROGRAMA_FORMACION_CODIGO);
            $stm->bindParam(1, $codigoProgramaFormacion, PDO::PARAM_STR);
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ); // Retorno data Formacion de Programa
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function getProgramaFormacionName($nameProgramaFormacion)
    {
        try {
            $stm = parent::conectar()->prepare(preparedSQL::GET_PROGRAMA_FORMACION_NAME);
            $nameProgramaFormacion = '%' . $nameProgramaFormacion . '%';
            $stm->bindParam(1, $nameProgramaFormacion, PDO::PARAM_STR);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ); // Retorno data de seleccionadas lista de Formacion de Programa
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    /**
     * Actulizar programa desde <FORM> al DB
     * @author Andres Garcia
     * @param $array es $_POST
     * @access public
     * @param data
     */

    public function insertarProgramaFormacion(array $data)
    {
        try {
            // Verificar hay datos en $data
            if (
                isset($data['txt_cod_programa']) &&
                isset($data['txt_short_name_programa']) &&
                isset($data['txt_name_programa_formacion']) &&
                isset($data['txt_version_programa']) &&
                isset($data['txt_id_nivel_programa_formacion']) &&
                isset($data['txt_cod_proyecto'])) {
                $codigoPrograma = $data['txt_cod_programa'];
                $shortNamePrograma = mb_strtoupper($data['txt_short_name_programa'], 'UTF-8');
                $nameProgramaFormacion = mb_strtoupper($data['txt_name_programa_formacion'], 'UTF-8');
                $versionPrograma =  mb_strtoupper($data['txt_version_programa'], 'UTF-8');
                $idNivelProgramaFormacion = $data['txt_id_nivel_programa_formacion'];
                $codProyecto = $data['txt_cod_proyecto'];
                $stm = parent::conectar()->prepare(preparedSQL::INSERT_NEW_PROGRAMA_FORMACION);
                $stm->bindParam(1, $codigoPrograma, PDO::PARAM_STR);
                $stm->bindParam(2, $shortNamePrograma, PDO::PARAM_STR);
                $stm->bindParam(3, $nameProgramaFormacion, PDO::PARAM_STR);
                $stm->bindParam(4, $versionPrograma, PDO::PARAM_STR);
                $stm->bindParam(5, $idNivelProgramaFormacion, PDO::PARAM_STR);
                $stm->bindParam(6, $codProyecto, PDO::PARAM_STR);
                $stm->execute();
                return true;
            }
        } catch (Exception $e) {
            return false;
            die($e->getMessage());
        }
    }

    public function updateDataProgramaFormacion($data)
    {
        try {
            // Verificar hay datos en $data
			if (isset($data['txt_upd_cod_programa']) &&
				isset($data['txt_upd_short_name_programa']) &&
				isset($data['txt_upd_name_programa_formacion']) &&
				isset($data['txt_upd_version_programa']) &&
				isset($data['txt_upd_id_nivel_programa_formacion']) &&
				isset($data['txt_upd_cod_proyecto']))
				{
                $txt_upd_cod_programa = $data['txt_upd_cod_programa'];
                $txt_upd_short_name_programa = $data['txt_upd_short_name_programa'];
                $txt_upd_name_programa_formacion = $data['txt_upd_name_programa_formacion'];
				$txt_upd_version_programa = $data['txt_upd_version_programa'];
				$txt_upd_id_nivel_programa_formacion = $data['txt_upd_id_nivel_programa_formacion'];
				$txt_upd_cod_proyecto = $data['txt_upd_cod_proyecto'];
                $stm = parent::conectar()->prepare(preparedSQL::UPDATE_DATA_PROGRAMA_FORMACION);
                $stm->bindParam(1, $txt_upd_short_name_programa, PDO::PARAM_STR);
                $stm->bindParam(2, $txt_upd_name_programa_formacion, PDO::PARAM_STR);
                $stm->bindParam(3, $txt_upd_version_programa, PDO::PARAM_STR);
				$stm->bindParam(4, $txt_upd_cod_programa, PDO::PARAM_STR);
				$stm->bindParam(5, $txt_upd_id_nivel_programa_formacion, PDO::PARAM_STR);
				$stm->bindParam(6, $txt_upd_cod_proyecto, PDO::PARAM_STR);
                $stm->execute();
                return true;
            }
        } catch (Exception $e) {
            return false;
            die($e->getMessage());
        }
    }

    public function updateStatusProgramaFormacion($data)
    {
        try {
            // Verificar hay datos en $data
            if (isset($data['cod_estado_programa_formacion']) && isset($data['id_programa_formacion'])) {
                $cod_estado_programa_formacion = $data['cod_estado_programa_formacion'];
                $id_programa_formacion = $data['id_programa_formacion'];
                $stm = parent::conectar()->prepare(preparedSQL::UPDATE_STATUS_PROGRAMA_FORMACION);
                $stm->bindParam(1, $cod_estado_programa_formacion, PDO::PARAM_STR);
                $stm->bindParam(2, $id_programa_formacion, PDO::PARAM_STR);
                $stm->execute();
                return true;
            }
        } catch (Exception $e) {
            return false;
            die($e->getMessage());
        }
    }
}
