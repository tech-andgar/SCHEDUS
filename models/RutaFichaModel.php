<?php
require_once(realpath(dirname(__FILE__)) . '/JornadaModel.php');
require_once(realpath(dirname(__FILE__)) . '/GrupoModel.php');
require_once(realpath(dirname(__FILE__)) . '/HorarioAsignadaModel.php');
require_once(realpath(dirname(__FILE__)) . '/DB.php');

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

	/**
	 * @access public
	 * @return int
	 * @ReturnType int
	 */
	public function getId_ruta_ficha() {
		return $this->id_ruta_ficha;
	}

	/**
	 * @access public
	 * @param int id_ruta_ficha
	 * @return void
	 * @ParamType id_ruta_ficha int
	 * @ReturnType void
	 */
	public function setId_ruta_ficha($id_ruta_ficha) {
		$this->id_ruta_ficha = $id_ruta_ficha;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getName_ruta_ficha() {
		return $this->name_ruta_ficha;
	}

	/**
	 * @access public
	 * @param String name_ruta_ficha
	 * @return void
	 * @ParamType name_ruta_ficha String
	 * @ReturnType void
	 */
	public function setName_ruta_ficha($name_ruta_ficha) {
		$this->name_ruta_ficha = $name_ruta_ficha;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getNum_ruta_ficha() {
		return $this->num_ruta_ficha;
	}

	/**
	 * @access public
	 * @param String num_ruta_ficha
	 * @return void
	 * @ParamType num_ruta_ficha String
	 * @ReturnType void
	 */
	public function setNum_ruta_ficha($num_ruta_ficha) {
		$this->num_ruta_ficha = $num_ruta_ficha;
	}

	/**
	 * @access public
	 * @return Date
	 * @ReturnType Date
	 */
	public function getFecha_inicio() {
		return $this->fecha_inicio;
	}

	/**
	 * @access public
	 * @param Date fecha_inicio
	 * @return void
	 * @ParamType fecha_inicio Date
	 * @ReturnType void
	 */
	public function setFecha_inicio(Date &$fecha_inicio) {
		$this->fecha_inicio = $fecha_inicio;
	}

	/**
	 * @access public
	 * @return Date
	 * @ReturnType Date
	 */
	public function getFecha_fin() {
		return $this->fecha_fin;
	}

	/**
	 * @access public
	 * @param Date fecha_fin
	 * @return void
	 * @ParamType fecha_fin Date
	 * @ReturnType void
	 */
	public function setFecha_fin(Date &$fecha_fin) {
		$this->fecha_fin = $fecha_fin;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getObservaciones() {
		return $this->observaciones;
	}

	/**
	 * @access public
	 * @param String observaciones
	 * @return void
	 * @ParamType observaciones String
	 * @ReturnType void
	 */
	public function setObservaciones($observaciones) {
		$this->observaciones = $observaciones;
	}

	public function getAllRutaFichas()
	{
		try {
			$stm = parent::conectar()->prepare(preparedSQL::GET_ALL_RUTA_FICHA);
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ); // Retorno completa de lista de Ruta de ficha
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	// public function getRutaFichaId($idRutaFicha)
	// {
	// 	try {
	// 		$stm = parent::conectar()->prepare(preparedSQL::GET_PROYECTO_ID);
	// 		$stm->bindParam(1, $idRutaFicha, PDO::PARAM_STR);
	// 		$stm->execute();
	// 		return $stm->fetch(PDO::FETCH_OBJ); // Retorno data Formacion de Programa
	// 	} catch (Exception $e) {
	// 		die($e->getMessage());
	// 	}
	// }

	// public function getRutaFichaName($nameRutaFicha)
	// {
	// 	try {
	// 		$stm = parent::conectar()->prepare(preparedSQL::GET_PROYECTO_NAME);
	// 		$nameRutaFicha = '%' . $nameRutaFicha . '%';
	// 		$stm->bindParam(1, $nameRutaFicha, PDO::PARAM_STR);
	// 		$stm->execute();
	// 		return $stm->fetchAll(PDO::FETCH_OBJ); // Retorno data de seleccionadas lista de Formacion de Programa
	// 	} catch (Exception $e) {
	// 		die($e->getMessage());
	// 	}
	// }
}
?>