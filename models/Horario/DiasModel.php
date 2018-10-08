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
class DiasModel extends DB {
	/**
	 * @AttributeType int
	 */
	private $id_dias;
	/**
	 * @AttributeType String
	 */
	private $name_dias;
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
	public function getId_dias() {
		return $this->id_dias;
	}

	/**
	 * @access public
	 * @param int id_dias
	 * @return void
	 * @ParamType id_dias int
	 * @ReturnType void
	 */
	public function setId_dias($id_dias) {
		$this->id_dias = $id_dias;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getName_dias() {
		return $this->name_dias;
	}

	/**
	 * @access public
	 * @param String name_dias
	 * @return void
	 * @ParamType name_dias String
	 * @ReturnType void
	 */
	public function setName_dias($name_dias) {
		$this->name_dias = $name_dias;
	}
}
?>