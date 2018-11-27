<?php
require_once(realpath(dirname(__FILE__)) . '/SedeModel.php');
require_once(realpath(dirname(__FILE__)) . '/EstadoAmbienteModel.php');
require_once(realpath(dirname(__FILE__)) . '/HorarioAsignadaModel.php');
require_once(realpath(dirname(__FILE__)) . '/DB.php');

/**
 * @access public
 * @author Afgarcia0479
 * @package Ambiente
 */
class AmbienteModel extends DB {
	/**
	 * @AttributeType int
	 */
	private $id_ambiente;
	/**
	 * @AttributeType String
	 */
	private $num_ambiente;
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
	 * @AssociationType Ambiente\SedeModel
	 * @AssociationMultiplicity 0..1
	 */
	public $cod_sede;
	/**
	 * @AssociationType Ambiente\EstadoAmbienteModel
	 * @AssociationMultiplicity 0..1
	 */
	public $cod_estado_ambiente;
	/**
	 * @AssociationType Horario\HorarioAsignadaModel
	 * @AssociationMultiplicity 0..*
	 */
	public $horario_asignada = array();

	/**
	 * @access public
	 * @return int
	 * @ReturnType int
	 */
	public function getId_ambiente() {
		return $this->id_ambiente;
	}

	/**
	 * @access public
	 * @param int id_ambiente
	 * @return void
	 * @ParamType id_ambiente int
	 * @ReturnType void
	 */
	public function setId_ambiente($id_ambiente) {
		$this->id_ambiente = $id_ambiente;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getNum_ambiente() {
		return $this->num_ambiente;
	}

	/**
	 * @access public
	 * @param String num_ambiente
	 * @return void
	 * @ParamType num_ambiente String
	 * @ReturnType void
	 */
	public function setNum_ambiente($num_ambiente) {
		$this->num_ambiente = $num_ambiente;
	}
	//
	// ─── AMBIENTE ───────────────────────────────────────────────────────────────────
	//
	public function getAllAmbiente()
    {
        try {
			$stm = parent::conectar()->prepare(preparedSQL::GET_ALL_AMBIENTE);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ); // Retorno completa de lista de Ambientes
        } catch (Exception $e) {
            die($e->getMessage());
        }
	}

	public function getAmbienteId($idNivelFormacion)
    {
        try {
            $stm = parent::conectar()->prepare(preparedSQL::GET_AMBIENTE_ID);
            $stm->bindParam(1, $idNivelFormacion, PDO::PARAM_STR);
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ); // Retorno data Ambientes
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

	public function getAmbienteName($nameNivelFormacion)
    {
        try {
			$stm = parent::conectar()->prepare(preparedSQL::GET_AMBIENTE_NAME);
            $nameNivelFormacion = '%'.$nameNivelFormacion.'%';
            $stm->bindParam(1, $nameNivelFormacion, PDO::PARAM_STR);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ); // Retorno data de seleccionadas lista de Ambientes
        } catch (Exception $e) {
            die($e->getMessage());
        }
	}

	
}
?>