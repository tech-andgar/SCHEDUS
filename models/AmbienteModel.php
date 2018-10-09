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
}
?>