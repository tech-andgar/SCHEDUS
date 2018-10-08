<?php
namespace Usuario;

require_once(realpath(dirname(__FILE__)) . '/../Usuario/UsuarioModel.php');
require_once(realpath(dirname(__FILE__)) . '/../DB.php');

use Usuario\UsuarioModel;
use DB;

/**
 * @access public
 * @author Afgarcia0479
 * @package Usuario
 */
class RolModel extends DB {
	/**
	 * @AttributeType int
	 */
	private $id_rol;
	/**
	 * @AttributeType String
	 */
	private $name_rol;
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
	public function getId_rol() {
		return $this->id_rol;
	}

	/**
	 * @access public
	 * @param int id_rol
	 * @return void
	 * @ParamType id_rol int
	 * @ReturnType void
	 */
	public function setId_rol($id_rol) {
		$this->id_rol = $id_rol;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getName_rol() {
		return $this->name_rol;
	}

	/**
	 * @access public
	 * @param String name_rol
	 * @return void
	 * @ParamType name_rol String
	 * @ReturnType void
	 */
	public function setName_rol($name_rol) {
		$this->name_rol = $name_rol;
	}
}
?>