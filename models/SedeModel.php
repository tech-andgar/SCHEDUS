<?php
require_once(realpath(dirname(__FILE__)) . '/AmbienteModel.php');
require_once(realpath(dirname(__FILE__)) . '/DB.php');

/**
 * @access public
 * @author Afgarcia0479
 * @package Ambiente
 */
class SedeModel extends DB {
	/**
	 * @AttributeType int
	 */
	private $id_sede;
	/**
	 * @AttributeType String
	 */
	private $name_sede;
	/**
	 * @AttributeType String
	 */
	private $direccion;
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
	 * @AssociationType Ambiente\AmbienteModel
	 * @AssociationMultiplicity 0..*
	 */
	public $ambiente = array();

	/**
	 * @access public
	 * @return int
	 * @ReturnType int
	 */
	public function getId_sede() {
		return $this->id_sede;
	}

	/**
	 * @access public
	 * @param int id_sede
	 * @return void
	 * @ParamType id_sede int
	 * @ReturnType void
	 */
	public function setId_sede($id_sede) {
		$this->id_sede = $id_sede;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getName_sede() {
		return $this->name_sede;
	}

	/**
	 * @access public
	 * @param String name_sede
	 * @return void
	 * @ParamType name_sede String
	 * @ReturnType void
	 */
	public function setName_sede($name_sede) {
		$this->name_sede = $name_sede;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getDireccion() {
		return $this->direccion;
	}

	/**
	 * @access public
	 * @param String direccion
	 * @return void
	 * @ParamType direccion String
	 * @ReturnType void
	 */
	public function setDireccion($direccion) {
		$this->direccion = $direccion;
	}

	//
	// ─── SEDE ───────────────────────────────────────────────────────────────────
	//

	public function getAllSede()
    {
        try {
			$stm = parent::conectar()->prepare(preparedSQL::GET_ALL_SEDE);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ); // Retorno completa de lista de Sede
        } catch (Exception $e) {
            die($e->getMessage());
        }
	}

	public function getSedeId($idSede)
    {
        try {
            $stm = parent::conectar()->prepare(preparedSQL::GET_SEDE_ID);
            $stm->bindParam(1, $idSede, PDO::PARAM_STR);
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ); // Retorno data Sede
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

	public function getSedeName($nameSede)
    {
        try {
			$stm = parent::conectar()->prepare(preparedSQL::GET_SEDE_NAME);
            $nameSede = '%'.$nameSede.'%';
            $stm->bindParam(1, $nameSede, PDO::PARAM_STR);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ); // Retorno data de seleccionadas lista de Sede
        } catch (Exception $e) {
            die($e->getMessage());
        }
	}
}
?>