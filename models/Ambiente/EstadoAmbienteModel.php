<?php
namespace Ambiente;

require_once(realpath(dirname(__FILE__)) . '/../Ambiente/AmbienteModel.php');
require_once(realpath(dirname(__FILE__)) . '/../DB.php');

use Ambiente\AmbienteModel;
use DB;

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
}
?>