<?php
require_once(realpath(dirname(__FILE__)) . '/AmbienteModel.php');
require_once(realpath(dirname(__FILE__)) . '/DB.php');

/**
 * @access public
 * @author Afgarcia0479
 * @package Ambiente
 */
class EstadoAmbienteModel extends DB {
	/**
	 * @AttributeType int
	 */
	private $id_estado_ambiente;
	/**
	 * @AttributeType String
	 */
	private $name_estado_ambiente;
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
	public function getId_estado_ambiente() {
		return $this->id_estado_ambiente;
	}

	/**
	 * @access public
	 * @param int id_estado_ambiente
	 * @return void
	 * @ParamType id_estado_ambiente int
	 * @ReturnType void
	 */
	public function setId_estado_ambiente($id_estado_ambiente) {
		$this->id_estado_ambiente = $id_estado_ambiente;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getName_estado_ambiente() {
		return $this->name_estado_ambiente;
	}

	/**
	 * @access public
	 * @param String name_estado_ambiente
	 * @return void
	 * @ParamType name_estado_ambiente String
	 * @ReturnType void
	 */
	public function setName_estado_ambiente($name_estado_ambiente) {
		$this->name_estado_ambiente = $name_estado_ambiente;
	}

	//
	// ─── ESTADO AMBIENTE ───────────────────────────────────────────────────────────────────
	//

	public function getAllEstadoAmbiente()
    {
        try {
			$stm = parent::conectar()->prepare(preparedSQL::GET_ALL_ESTADO_AMBIENTE);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ); // Retorno completa de lista de Estado Ambiente
        } catch (Exception $e) {
            die($e->getMessage());
        }
	}

	public function getEstadoAmbienteId($idEstadoAmbiente)
    {
        try {
            $stm = parent::conectar()->prepare(preparedSQL::GET_ESTADO_AMBIENTE_ID);
            $stm->bindParam(1, $idEstadoAmbiente, PDO::PARAM_STR);
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ); // Retorno data Estado Ambiente
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

	public function getEstadoAmbienteName($nameEstadoAmbiente)
    {
        try {
			$stm = parent::conectar()->prepare(preparedSQL::GET_ESTADO_AMBIENTE_NAME);
            $nameEstadoAmbiente = '%'.$nameEstadoAmbiente.'%';
            $stm->bindParam(1, $nameEstadoAmbiente, PDO::PARAM_STR);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ); // Retorno data de seleccionadas lista de Aula
        } catch (Exception $e) {
            die($e->getMessage());
        }
	}

}
?>