<?php
namespace Programa_de_formación;

require_once(realpath(dirname(__FILE__)) . '/../Programa_de_formación/ProgramaFormacionModel.php');
require_once(realpath(dirname(__FILE__)) . '/../Programa_de_formación/ResultadoAprendizajeModel.php');
require_once(realpath(dirname(__FILE__)) . '/../DB.php');

use Programa_de_formación\ProgramaFormacionModel;
use Programa_de_formación\ResultadoAprendizajeModel;
use DB;

/**
 * @access public
 * @author Afgarcia0479
 * @package Programa_de_formación
 */
class CompetenciaModel extends DB {
	/**
	 * @AttributeType int
	 */
	private $id_competencia;
	/**
	 * @AttributeType int
	 */
	private $codigo_competencia;
	/**
	 * @AttributeType String
	 */
	private $num_competencia2;
	/**
	 * @AttributeType String
	 */
	private $name_competencia;
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
	 * @AssociationMultiplicity 0..1
	 */
	public $cod_programa_formacion;
	/**
	 * @AssociationType Programa de formación\ResultadoAprendizajeModel
	 * @AssociationMultiplicity 0..*
	 */
	public $resultado_aprendizaje = array();

	/**
	 * @access public
	 * @return int
	 * @ReturnType int
	 */
	public function getId_competencia() {
		return $this->id_competencia;
	}

	/**
	 * @access public
	 * @param int id_competencia
	 * @return void
	 * @ParamType id_competencia int
	 * @ReturnType void
	 */
	public function setId_competencia($id_competencia) {
		$this->id_competencia = $id_competencia;
	}

	/**
	 * @access public
	 * @return int
	 * @ReturnType int
	 */
	public function getCodigo_competencia() {
		return $this->codigo_competencia;
	}

	/**
	 * @access public
	 * @param int codigo_competencia
	 * @return void
	 * @ParamType codigo_competencia int
	 * @ReturnType void
	 */
	public function setCodigo_competencia($codigo_competencia) {
		$this->codigo_competencia = $codigo_competencia;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getNum_competencia2() {
		return $this->num_competencia2;
	}

	/**
	 * @access public
	 * @param String num_competencia2
	 * @return void
	 * @ParamType num_competencia2 String
	 * @ReturnType void
	 */
	public function setNum_competencia2($num_competencia2) {
		$this->num_competencia2 = $num_competencia2;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getName_competencia() {
		return $this->name_competencia;
	}

	/**
	 * @access public
	 * @param String name_competencia
	 * @return void
	 * @ParamType name_competencia String
	 * @ReturnType void
	 */
	public function setName_competencia($name_competencia) {
		$this->name_competencia = $name_competencia;
	}
}
?>