<?php
require_once(realpath(dirname(__FILE__)) . '/HorarioAsignadaModel.php');
require_once(realpath(dirname(__FILE__)) . '/DB.php');

/**
 * @access public
 * @author Afgarcia0479
 * @package Horario
 */
class EstadoHorarioAsignadaModel extends DB {
	/**
	 * @AttributeType int
	 */
	private $id_estado_horario_asignada;
	/**
	 * @AttributeType String
	 */
	private $name_estado_horario_asignada;
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
	 * @AssociationType Horario\HorarioAsignadaModel
	 * @AssociationMultiplicity 0..*
	 */
	public $horario_asignada = array();

	/**
	 * @access public
	 * @return int
	 * @ReturnType int
	 */
	public function getId_estado_horario_asignada() {
		return $this->id_estado_horario_asignada;
	}

	/**
	 * @access public
	 * @param int id_estado_horario_asignada
	 * @return void
	 * @ParamType id_estado_horario_asignada int
	 * @ReturnType void
	 */
	public function setId_estado_horario_asignada($id_estado_horario_asignada) {
		$this->id_estado_horario_asignada = $id_estado_horario_asignada;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getName_estado_horario_asignada() {
		return $this->name_estado_horario_asignada;
	}

	/**
	 * @access public
	 * @param String name_estado_horario_asignada
	 * @return void
	 * @ParamType name_estado_horario_asignada String
	 * @ReturnType void
	 */
	public function setName_estado_horario_asignada($name_estado_horario_asignada) {
		$this->name_estado_horario_asignada = $name_estado_horario_asignada;
	}
}
?>