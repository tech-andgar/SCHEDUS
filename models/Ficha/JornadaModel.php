<?php
namespace Ficha;

require_once(realpath(dirname(__FILE__)) . '/../Ficha/RutaFichaModel.php');
require_once(realpath(dirname(__FILE__)) . '/../DB.php');

use Ficha\RutaFichaModel;
use DB;

/**
 * @access public
 * @author Afgarcia0479
 * @package Ficha
 */
class JornadaModel extends DB {
	/**
	 * @AttributeType int
	 */
	private $id_jornada;
	/**
	 * @AttributeType String
	 */
	private $name_jornada;
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
	 * @AssociationType Ficha\RutaFichaModel
	 * @AssociationMultiplicity 0..*
	 */
	public $ruta_ficha = array();

	/**
	 * @access public
	 * @return int
	 * @ReturnType int
	 */
	public function getId_jornada() {
		return $this->id_jornada;
	}

	/**
	 * @access public
	 * @param int id_jornada
	 * @return void
	 * @ParamType id_jornada int
	 * @ReturnType void
	 */
	public function setId_jornada($id_jornada) {
		$this->id_jornada = $id_jornada;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getName_jornada() {
		return $this->name_jornada;
	}

	/**
	 * @access public
	 * @param String name_jornada
	 * @return void
	 * @ParamType name_jornada String
	 * @ReturnType void
	 */
	public function setName_jornada($name_jornada) {
		$this->name_jornada = $name_jornada;
	}
}
?>