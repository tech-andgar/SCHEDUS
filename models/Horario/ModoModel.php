<?php
namespace Horario;

require_once(realpath(dirname(__FILE__)) . '/../Horario/HorarioAsignadaModel.php');
require_once(realpath(dirname(__FILE__)) . '/../DB.php');

use Horario\HorarioAsignadaModel;
use DB;

/**
 * @access public
 * @author Afgarcia0479
 * @package Horario
 */
class ModoModel extends DB {
	/**
	 * @AttributeType int
	 */
	private $id_modo;
	/**
	 * @AttributeType String
	 */
	private $name_modo;
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
	public function getId_modo() {
		return $this->id_modo;
	}

	/**
	 * @access public
	 * @param int id_modo
	 * @return void
	 * @ParamType id_modo int
	 * @ReturnType void
	 */
	public function setId_modo($id_modo) {
		$this->id_modo = $id_modo;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getName_modo() {
		return $this->name_modo;
	}

	/**
	 * @access public
	 * @param String name_modo
	 * @return void
	 * @ParamType name_modo String
	 * @ReturnType void
	 */
	public function setName_modo($name_modo) {
		$this->name_modo = $name_modo;
	}
}
?>