<?php
require_once(realpath(dirname(__FILE__)) . '/EstadoHorarioAsignadaModel.php');
require_once(realpath(dirname(__FILE__)) . '/DiasModel.php');
require_once(realpath(dirname(__FILE__)) . '/TrimestreModel.php');
require_once(realpath(dirname(__FILE__)) . '/ModoModel.php');
require_once(realpath(dirname(__FILE__)) . '/UsuarioModel.php');
require_once(realpath(dirname(__FILE__)) . '/ResultadoAprendizajeModel.php');
require_once(realpath(dirname(__FILE__)) . '/RutaFichaModel.php');
require_once(realpath(dirname(__FILE__)) . '/AmbienteModel.php');
require_once(realpath(dirname(__FILE__)) . '/DB.php');

/**
 * @access public
 * @author Afgarcia0479
 * @package Horario
 */
class HorarioAsignadaModel extends DB {
	/**
	 * @AttributeType int
	 */
	private $id_horas_asignadas;
	/**
	 * @AttributeType String
	 */
	private $trimestre_ficha;
	/**
	 * @AttributeType Time
	 */
	private $hora_inicio;
	/**
	 * @AttributeType Time
	 */
	private $hora_fin;
	/**
	 * @AttributeType Boolean
	 */
	private $completado;
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
	 * @AssociationType Horario\EstadoHorarioAsignadaModel
	 * @AssociationMultiplicity 0..1
	 */
	public $cod_estado_horario;
	/**
	 * @AssociationType Horario\DiasModel
	 * @AssociationMultiplicity 0..1
	 */
	public $cod_dias;
	/**
	 * @AssociationType Horario\TrimestreModel
	 * @AssociationMultiplicity 0..1
	 */
	public $cod_trimestre_horario;
	/**
	 * @AssociationType Horario\ModoModel
	 * @AssociationMultiplicity 0..1
	 */
	public $cod_modo;
	/**
	 * @AssociationType Usuario\UsuarioModel
	 * @AssociationMultiplicity 0..1
	 */
	public $cod_instructor;
	/**
	 * @AssociationType Programa de formación\ResultadoAprendizajeModel
	 * @AssociationMultiplicity 0..1
	 */
	public $cod_resultado_aprendizaje;
	/**
	 * @AssociationType Ficha\RutaFichaModel
	 * @AssociationMultiplicity 0..1
	 */
	public $cod_ruta_ficha;
	/**
	 * @AssociationType Ambiente\AmbienteModel
	 * @AssociationMultiplicity 0..1
	 */
	public $cod_ambiente;

	/**
	 * @access public
	 * @return int
	 * @ReturnType int
	 */
	public function getId_horas_asignadas() {
		return $this->id_horas_asignadas;
	}

	/**
	 * @access public
	 * @param int id_horas_asignadas
	 * @return void
	 * @ParamType id_horas_asignadas int
	 * @ReturnType void
	 */
	public function setId_horas_asignadas($id_horas_asignadas) {
		$this->id_horas_asignadas = $id_horas_asignadas;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getTrimestre_ficha() {
		return $this->trimestre_ficha;
	}

	/**
	 * @access public
	 * @param String trimestre_ficha
	 * @return void
	 * @ParamType trimestre_ficha String
	 * @ReturnType void
	 */
	public function setTrimestre_ficha($trimestre_ficha) {
		$this->trimestre_ficha = $trimestre_ficha;
	}

	/**
	 * @access public
	 * @return Time
	 * @ReturnType Time
	 */
	public function getHora_inicio() {
		return $this->hora_inicio;
	}

	/**
	 * @access public
	 * @param Time hora_inicio
	 * @return void
	 * @ParamType hora_inicio Time
	 * @ReturnType void
	 */
	public function setHora_inicio(Time &$hora_inicio) {
		$this->hora_inicio = $hora_inicio;
	}

	/**
	 * @access public
	 * @return Time
	 * @ReturnType Time
	 */
	public function getHora_fin() {
		return $this->hora_fin;
	}

	/**
	 * @access public
	 * @param Time hora_fin
	 * @return void
	 * @ParamType hora_fin Time
	 * @ReturnType void
	 */
	public function setHora_fin(Time &$hora_fin) {
		$this->hora_fin = $hora_fin;
	}

	/**
	 * @access public
	 * @return Boolean
	 * @ReturnType Boolean
	 */
	public function getCompletado() {
		return $this->completado;
	}

	/**
	 * @access public
	 * @param Boolean completado
	 * @return void
	 * @ParamType completado Boolean
	 * @ReturnType void
	 */
	public function setCompletado($completado) {
		$this->completado = $completado;
	}
}
?>