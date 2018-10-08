<?php
namespace Programa_de_formación;

require_once(realpath(dirname(__FILE__)) . '/../Programa_de_formación/EstadoProgramaFormacionModel.php');
require_once(realpath(dirname(__FILE__)) . '/../Programa_de_formación/NivelProgramaFormacionModel.php');
require_once(realpath(dirname(__FILE__)) . '/../Programa_de_formación/ProyectoModel.php');
require_once(realpath(dirname(__FILE__)) . '/../Programa_de_formación/CompetenciaModel.php');
require_once(realpath(dirname(__FILE__)) . '/../Ficha/FichaModel.php');
require_once(realpath(dirname(__FILE__)) . '/../DB.php');

use Programa_de_formación\EstadoProgramaFormacionModel;
use Programa_de_formación\NivelProgramaFormacionModel;
use Programa_de_formación\ProyectoModel;
use Programa_de_formación\CompetenciaModel;
use Ficha\FichaModel;
use DB;

/**
 * @access public
 * @author Afgarcia0479
 * @package Programa de formación
 */
class ProgramaFormacionModel extends DB {
	/**
	 * @AttributeType int
	 */
	private $id_programa_formacion;
	/**
	 * @AttributeType String
	 */
	private $codigo;
	/**
	 * @AttributeType String
	 */
	private $short_name_programa_formacion;
	/**
	 * @AttributeType String
	 */
	private $name_programa_formacion;
	/**
	 * @AttributeType String
	 */
	private $version_programa;
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
	 * @AssociationType Programa de formación\EstadoProgramaFormacionModel
	 * @AssociationMultiplicity 0..1
	 */
	public $cod_estado_programa_formacion;
	/**
	 * @AssociationType Programa de formación\NivelProgramaFormacionModel
	 * @AssociationMultiplicity 0..1
	 */
	public $cod_nivel_programa_formacion;
	/**
	 * @AssociationType Programa de formación\ProyectoModel
	 * @AssociationMultiplicity 0..1
	 */
	public $cod_proyecto;
	/**
	 * @AssociationType Programa de formación\CompetenciaModel
	 * @AssociationMultiplicity 0..*
	 */
	public $competencia = array();
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
	public function getId_programa_formacion() {
		return $this->id_programa_formacion;
	}

	/**
	 * @access public
	 * @param int id_programa_formacion
	 * @return void
	 * @ParamType id_programa_formacion int
	 * @ReturnType void
	 */
	public function setId_programa_formacion($id_programa_formacion) {
		$this->id_programa_formacion = $id_programa_formacion;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getCodigo() {
		return $this->codigo;
	}

	/**
	 * @access public
	 * @param String codigo
	 * @return void
	 * @ParamType codigo String
	 * @ReturnType void
	 */
	public function setCodigo($codigo) {
		$this->codigo = $codigo;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getShort_name_programa_formacion() {
		return $this->short_name_programa_formacion;
	}

	/**
	 * @access public
	 * @param String short_name_programa_formacion
	 * @return void
	 * @ParamType short_name_programa_formacion String
	 * @ReturnType void
	 */
	public function setShort_name_programa_formacion($short_name_programa_formacion) {
		$this->short_name_programa_formacion = $short_name_programa_formacion;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getName_programa_formacion() {
		return $this->name_programa_formacion;
	}

	/**
	 * @access public
	 * @param String name_programa_formacion
	 * @return void
	 * @ParamType name_programa_formacion String
	 * @ReturnType void
	 */
	public function setName_programa_formacion($name_programa_formacion) {
		$this->name_programa_formacion = $name_programa_formacion;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getVersion_programa() {
		return $this->version_programa;
	}

	/**
	 * @access public
	 * @param String version_programa
	 * @return void
	 * @ParamType version_programa String
	 * @ReturnType void
	 */
	public function setVersion_programa($version_programa) {
		$this->version_programa = $version_programa;
	}
}
?>