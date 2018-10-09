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
}
?>