<?php
namespace Programa_de_formación;

require_once(realpath(dirname(__FILE__)) . '/../Programa_de_formación/FaseModel.php');
require_once(realpath(dirname(__FILE__)) . '/../Programa_de_formación/ProyectoModel.php');
require_once(realpath(dirname(__FILE__)) . '/../DB.php');

use Programa_de_formación\FaseModel;
use Programa_de_formación\ProyectoModel;
use DB;

/**
 * @access public
 * @author Afgarcia0479
 * @package Programa_de_formación
 */
class ActividadProyectoModel extends DB {
	/**
	 * @AttributeType int
	 */
	private $id_actividad_proyecto;
	/**
	 * @AttributeType String
	 */
	private $num_actividad_proyecto;
	/**
	 * @AttributeType String
	 */
	private $name_actividad_proyecto;
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
	 * @AssociationType Programa de formación\FaseModel
	 * @AssociationMultiplicity 0..1
	 */
	public $cod_fase;
	/**
	 * @AssociationType Programa de formación\ProyectoModel
	 * @AssociationMultiplicity 0..1
	 */
	public $cod_proyecto;

	/**
	 * @access public
	 * @return int
	 * @ReturnType int
	 */
	public function getId_actividad_proyecto() {
		return $this->id_actividad_proyecto;
	}

	/**
	 * @access public
	 * @param int id_actividad_proyecto
	 * @return void
	 * @ParamType id_actividad_proyecto int
	 * @ReturnType void
	 */
	public function setId_actividad_proyecto($id_actividad_proyecto) {
		$this->id_actividad_proyecto = $id_actividad_proyecto;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getNum_actividad_proyecto() {
		return $this->num_actividad_proyecto;
	}

	/**
	 * @access public
	 * @param String num_actividad_proyecto
	 * @return void
	 * @ParamType num_actividad_proyecto String
	 * @ReturnType void
	 */
	public function setNum_actividad_proyecto($num_actividad_proyecto) {
		$this->num_actividad_proyecto = $num_actividad_proyecto;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getName_actividad_proyecto() {
		return $this->name_actividad_proyecto;
	}

	/**
	 * @access public
	 * @param String name_actividad_proyecto
	 * @return void
	 * @ParamType name_actividad_proyecto String
	 * @ReturnType void
	 */
	public function setName_actividad_proyecto($name_actividad_proyecto) {
		$this->name_actividad_proyecto = $name_actividad_proyecto;
	}
}
?>