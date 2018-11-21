<?php
require_once(realpath(dirname(__FILE__)) . '/ProgramaFormacionModel.php');
require_once(realpath(dirname(__FILE__)) . '/DB.php');

/**
 * @access public
 * @author Afgarcia0479
 * @package Programa_de_formación
 */
class NivelProgramaFormacionModel extends DB {
	/**
	 * @AttributeType int
	 */
	private $id_nivel_programa_formacion;
	/**
	 * @AttributeType String
	 */
	private $name_nivel_programa_formacion;
	/**
	 * @AttributeType String
	 */
	private $duracion;
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
	 * @AssociationType Programa de formación\ProgramaFormacionModel
	 * @AssociationMultiplicity 0..*
	 */
	public $programa_formacion = array();

	/**
	 * @access public
	 * @return int
	 * @ReturnType int
	 */
	public function getId_nivel_programa_formacion() {
		return $this->id_nivel_programa_formacion;
	}

	/**
	 * @access public
	 * @param int id_nivel_programa_formacion
	 * @return void
	 * @ParamType id_nivel_programa_formacion int
	 * @ReturnType void
	 */
	public function setId_nivel_programa_formacion($id_nivel_programa_formacion) {
		$this->id_nivel_programa_formacion = $id_nivel_programa_formacion;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getName_nivel_programa_formacion() {
		return $this->name_nivel_programa_formacion;
	}

	/**
	 * @access public
	 * @param String name_nivel_programa_formacion
	 * @return void
	 * @ParamType name_nivel_programa_formacion String
	 * @ReturnType void
	 */
	public function setName_nivel_programa_formacion($name_nivel_programa_formacion) {
		$this->name_nivel_programa_formacion = $name_nivel_programa_formacion;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getDuracion() {
		return $this->duracion;
	}

	/**
	 * @access public
	 * @param String duracion
	 * @return void
	 * @ParamType duracion String
	 * @ReturnType void
	 */
	public function setDuracion($duracion) {
		$this->duracion = $duracion;
	}

	public function getAllNivelFormacion()
    {
        try {
            $stm = parent::conectar()->prepare(preparedSQL::GET_ALL_NIVEL_FORMACION);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ); // Retorno completa de lista de Nivel de Formacion
        } catch (Exception $e) {
            die($e->getMessage());
        }
	}
	
	public function getNivelFormacionId($idNivelFormacion)
    {
        try {
            $stm = parent::conectar()->prepare(preparedSQL::GET_NIVEL_FORMACION_ID);
            $stm->bindParam(1, $idNivelFormacion, PDO::PARAM_STR);
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ); // Retorno data Nivel Formacion
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

	public function getNivelFormacionName($nameNivelFormacion)
    {
        try {
			$stm = parent::conectar()->prepare(preparedSQL::GET_NIVEL_FORMACION_NAME);
            $nameNivelFormacion = '%'.$nameNivelFormacion.'%';
            $stm->bindParam(1, $nameNivelFormacion, PDO::PARAM_STR);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ); // Retorno data de seleccionadas lista de Nivel Formacion
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
	
	public function updateDataNivelFormacion($data)
    {
        try {
            // Verificar hay datos en $data
			if (isset($data['id_nivel_programa_formacion']) &&
				isset($data['name_nivel_programa_formacion']) &&
				isset($data['duracion'])) {
                $name_nivel_programa_formacion = $data['name_nivel_programa_formacion'];
                $id_nivel_programa_formacion = $data['id_nivel_programa_formacion'];
                $duracion = $data['duracion'];
                $stm = parent::conectar()->prepare(preparedSQL::UPDATE_DATA_NIVEL_FORMACION);
                $stm->bindParam(1, $name_nivel_programa_formacion, PDO::PARAM_STR);
                $stm->bindParam(2, $duracion, PDO::PARAM_STR);
                $stm->bindParam(3, $id_nivel_programa_formacion, PDO::PARAM_STR);
                $stm->execute();
                return true;
            }
        } catch (Exception $e) {
            return false;
            die($e->getMessage());
        }
    }
}
?>