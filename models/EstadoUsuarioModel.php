<?php
require_once(realpath(dirname(__FILE__)) . '/UsuarioModel.php');
require_once(realpath(dirname(__FILE__)) . '/DB.php');

/**
 * @access public
 * @author Afgarcia0479
 * @package Usuario
 */
class EstadoUsuarioModel extends DB {
	/**
	 * @AttributeType int
	 */
	private $id_estado_usuario;
	/**
	 * @AttributeType String
	 */
	private $name_estado_usuario;
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
	 * @AssociationType Usuario\UsuarioModel
	 * @AssociationMultiplicity 0..*
	 */
	public $usuario = array();

	/**
	 * @access public
	 * @return int
	 * @ReturnType int
	 */
	public function getId_estado_usuario() {
		return $this->id_estado_usuario;
	}

	/**
	 * @access public
	 * @param int id_estado_usuario
	 * @return void
	 * @ParamType id_estado_usuario int
	 * @ReturnType void
	 */
	public function setId_estado_usuario($id_estado_usuario) {
		$this->id_estado_usuario = $id_estado_usuario;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getName_estado_usuario() {
		return $this->name_estado_usuario;
	}

	/**
	 * @access public
	 * @param String name_estado_usuario
	 * @return void
	 * @ParamType name_estado_usuario String
	 * @ReturnType void
	 */
	public function setName_estado_usuario($name_estado_usuario) {
		$this->name_estado_usuario = $name_estado_usuario;
	}
}
?>