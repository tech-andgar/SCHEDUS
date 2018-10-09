<?php
require_once(realpath(dirname(__FILE__)) . '/FichaModel.php');
require_once(realpath(dirname(__FILE__)) . '/DB.php');

/**
 * @access public
 * @author Afgarcia0479
 * @package Ficha
 */
class EstadoFichaModel extends DB {
	/**
	 * @AttributeType int
	 */
	private $id_estado_ficha;
	/**
	 * @AttributeType String
	 */
	private $name_estado_ficha;
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
	 * @AssociationType Ficha\FichaModel
	 * @AssociationMultiplicity 0..*
	 */
	public $ficha = array();

	/**
	 * @access public
	 * @return int
	 * @ReturnType int
	 */
	public function getId_estado_ficha() {
		return $this->id_estado_ficha;
	}

	/**
	 * @access public
	 * @param int id_estado_ficha
	 * @return void
	 * @ParamType id_estado_ficha int
	 * @ReturnType void
	 */
	public function setId_estado_ficha($id_estado_ficha) {
		$this->id_estado_ficha = $id_estado_ficha;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getName_estado_ficha() {
		return $this->name_estado_ficha;
	}

	/**
	 * @access public
	 * @param String name_estado_ficha
	 * @return void
	 * @ParamType name_estado_ficha String
	 * @ReturnType void
	 */
	public function setName_estado_ficha($name_estado_ficha) {
		$this->name_estado_ficha = $name_estado_ficha;
	}
}
?>