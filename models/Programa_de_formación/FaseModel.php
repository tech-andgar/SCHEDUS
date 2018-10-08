<?php
namespace Programa_de_formación;

require_once(realpath(dirname(__FILE__)) . '/../Programa_de_formación/ActividadProyectoModel.php');
require_once(realpath(dirname(__FILE__)) . '/../DB.php');

use Programa_de_formación\ActividadProyectoModel;
use DB;

/**
 * @access public
 * @author Afgarcia0479
 * @package Programa_de_formación
 */
class FaseModel extends DB {
	/**
	 * @AttributeType int
	 */
	private $id_fase;
	/**
	 * @AttributeType String
	 */
	private $name_fase;
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
	 * @AssociationType Programa de formación\ActividadProyectoModel
	 * @AssociationMultiplicity 0..*
	 */
	public $actividad_proyecto = array();

	/**
	 * @access public
	 * @return int
	 * @ReturnType int
	 */
	public function getId_fase() {
		return $this->id_fase;
	}

	/**
	 * @access public
	 * @param int id_fase
	 * @return void
	 * @ParamType id_fase int
	 * @ReturnType void
	 */
	public function setId_fase($id_fase) {
		$this->id_fase = $id_fase;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getName_fase() {
		return $this->name_fase;
	}

	/**
	 * @access public
	 * @param String name_fase
	 * @return void
	 * @ParamType name_fase String
	 * @ReturnType void
	 */
	public function setName_fase($name_fase) {
		$this->name_fase = $name_fase;
	}
}
?>