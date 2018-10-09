<?php
require_once(realpath(dirname(__FILE__)) . '/ProgramaFormacionModel.php');
require_once(realpath(dirname(__FILE__)) . '/DB.php');

/**
 * @access public
 * @author Afgarcia0479
 * @package Programa_de_formación
 */
class NivelProgramaFormacionModel extends DB {
	/**
	 * @AttributeType int
	 */
	private $id_nivel_programa_formacion;
	/**
	 * @AttributeType String
	 */
	private $name_nivel_programa_formacion;
	/**
	 * @AttributeType String
	 */
	private $duracion;
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
	 * @AssociationType Programa de formación\ProgramaFormacionModel
	 * @AssociationMultiplicity 0..*
	 */
	public $programa_formacion = array();

	/**
	 * @access public
	 * @return int
	 * @ReturnType int
	 */
	public function getId_nivel_programa_formacion() {
		return $this->id_nivel_programa_formacion;
	}

	/**
	 * @access public
	 * @param int id_nivel_programa_formacion
	 * @return void
	 * @ParamType id_nivel_programa_formacion int
	 * @ReturnType void
	 */
	public function setId_nivel_programa_formacion($id_nivel_programa_formacion) {
		$this->id_nivel_programa_formacion = $id_nivel_programa_formacion;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getName_nivel_programa_formacion() {
		return $this->name_nivel_programa_formacion;
	}

	/**
	 * @access public
	 * @param String name_nivel_programa_formacion
	 * @return void
	 * @ParamType name_nivel_programa_formacion String
	 * @ReturnType void
	 */
	public function setName_nivel_programa_formacion($name_nivel_programa_formacion) {
		$this->name_nivel_programa_formacion = $name_nivel_programa_formacion;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getDuracion() {
		return $this->duracion;
	}

	/**
	 * @access public
	 * @param String duracion
	 * @return void
	 * @ParamType duracion String
	 * @ReturnType void
	 */
	public function setDuracion($duracion) {
		$this->duracion = $duracion;
	}
}
?>