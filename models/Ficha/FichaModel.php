<?php
namespace Ficha;

require_once(realpath(dirname(__FILE__)) . '/../Ficha/EstadoFichaModel.php');
require_once(realpath(dirname(__FILE__)) . '/../Programa_de_formación/ProgramaFormacionModel.php');
require_once(realpath(dirname(__FILE__)) . '/../Ficha/GrupoModel.php');
require_once(realpath(dirname(__FILE__)) . '/../DB.php');

use Ficha\EstadoFichaModel;
use Programa_de_formación\ProgramaFormacionModel;
use Ficha\GrupoModel;
use DB;

/**
 * @access public
 * @author Afgarcia0479
 * @package Ficha
 */
class FichaModel extends DB {
	/**
	 * @AttributeType int
	 */
	private $id_ficha;
	/**
	 * @AttributeType String
	 */
	private $num_ficha;
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
	 * @AssociationType Ficha\EstadoFichaModel
	 * @AssociationMultiplicity 0..1
	 */
	public $cod_estado_ficha;
	/**
	 * @AssociationType Programa de formación\ProgramaFormacionModel
	 * @AssociationMultiplicity 0..1
	 */
	public $cod_programa_formacion;
	/**
	 * @AssociationType Ficha\GrupoModel
	 * @AssociationMultiplicity 0..*
	 */
	public $grupo = array();

	/**
	 * @access public
	 * @return int
	 * @ReturnType int
	 */
	public function getId_ficha() {
		return $this->id_ficha;
	}

	/**
	 * @access public
	 * @param int id_ficha
	 * @return void
	 * @ParamType id_ficha int
	 * @ReturnType void
	 */
	public function setId_ficha($id_ficha) {
		$this->id_ficha = $id_ficha;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getNum_ficha() {
		return $this->num_ficha;
	}

	/**
	 * @access public
	 * @param String num_ficha
	 * @return void
	 * @ParamType num_ficha String
	 * @ReturnType void
	 */
	public function setNum_ficha($num_ficha) {
		$this->num_ficha = $num_ficha;
	}
}
?>