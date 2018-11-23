<?php
require_once(realpath(dirname(__FILE__)) . '/HorarioAsignadaModel.php');
require_once(realpath(dirname(__FILE__)) . '/DB.php');

/**
 * @access public
 * @author Afgarcia0479
 * @package Horario
 */
class TrimestreModel extends DB {
	/**
	 * @AttributeType int
	 */
	private $id_trimestre;
	/**
	 * @AttributeType String
	 */
	private $name_trimestre;
	/**
	 * @AttributeType Date
	 */
	private $fecha_inicio;
	/**
	 * @AttributeType Date
	 */
	private $fecha_fin;
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
	 * @AssociationType Horario\HorarioAsignadaModel
	 * @AssociationMultiplicity 0..*
	 */
	public $horario_asignada = array();

	/**
	 * @access public
	 * @return int
	 * @ReturnType int
	 */
	public function getId_trimestre() {
		return $this->id_trimestre;
	}

	/**
	 * @access public
	 * @param int id_trimestre
	 * @return void
	 * @ParamType id_trimestre int
	 * @ReturnType void
	 */
	public function setId_trimestre($id_trimestre) {
		$this->id_trimestre = $id_trimestre;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getName_trimestre() {
		return $this->name_trimestre;
	}

	/**
	 * @access public
	 * @param String name_trimestre
	 * @return void
	 * @ParamType name_trimestre String
	 * @ReturnType void
	 */
	public function setName_trimestre($name_trimestre) {
		$this->name_trimestre = $name_trimestre;
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

	public function getAllTrimestre()
	{
		try {
			$stm = parent::conectar()->prepare(preparedSQL::GET_ALL_TRIMESTRE);
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ); // Retorno completa de lista de Trimestres Programa
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function getTrimestreId($idTrimestre)
	{
		try {
			$stm = parent::conectar()->prepare(preparedSQL::GET_TRIMESTRE_ID);
			$stm->bindParam(1, $idTrimestre, PDO::PARAM_STR);
			$stm->execute();
			return $stm->fetch(PDO::FETCH_OBJ); // Retorno data Formacion de Trimestres Programa
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function getTrimestreName($nameTrimestre)
	{
		try {
			$stm = parent::conectar()->prepare(preparedSQL::GET_TRIMESTRE_NAME);
			$nameTrimestre = '%' . $nameTrimestre . '%';
			$stm->bindParam(1, $nameTrimestre, PDO::PARAM_STR);
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ); // Retorno data de seleccionadas lista de Formacion de Trimestres Programa
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
}
?>