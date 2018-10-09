<?php
namespace Ficha;

require_once(realpath(dirname(__FILE__)) . '/../Ficha/JornadaModel.php');
require_once(realpath(dirname(__FILE__)) . '/../Ficha/GrupoModel.php');
require_once(realpath(dirname(__FILE__)) . '/../Horario/HorarioAsignadaModel.php');
require_once(realpath(dirname(__FILE__)) . '/../DB.php');

use Ficha\JornadaModel;
use Ficha\GrupoModel;
use Horario\HorarioAsignadaModel;
use DB;

/**
 * @access public
 * @author Afgarcia0479
 * @package Ficha
 */
class RutaFichaModel extends DB {
	/**
	 * @AttributeType int
	 */
	private $id_ruta_ficha;
	/**
	 * @AttributeType String
	 */
	private $name_ruta_ficha;
	/**
	 * @AttributeType String
	 */
	private $num_ruta_ficha;
	/**
	 * @AttributeType Date
	 */
	private $fecha_inicio;
	/**
	 * @AttributeType Date
	 */
	private $fecha_fin;
	/**
	 * @AttributeType String
	 */
	private $observaciones;
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
	 * @AssociationType Ficha\JornadaModel
	 * @AssociationMultiplicity 0..1
	 */
	public $cod_jornada;
	/**
	 * @AssociationType Ficha\GrupoModel
	 * @AssociationMultiplicity 0..*
	 */
	public $grupo = array();
	/**
	 * @AssociationType Horario\HorarioAsignadaModel
	 * @AssociationMultiplicity 0..*
	 */
	public $horario_asignada = array();
}
?>