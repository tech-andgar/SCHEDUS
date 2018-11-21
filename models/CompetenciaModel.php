<?php
require_once(realpath(dirname(__FILE__)) . '/ProgramaFormacionModel.php');
require_once(realpath(dirname(__FILE__)) . '/ResultadoAprendizajeModel.php');
require_once(realpath(dirname(__FILE__)) . '/DB.php');

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
	public function getAllCompetencia()
	{
		try {
			$stm = parent::conectar()->prepare(preparedSQL::GET_ALL_COMPETENCIA);
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ); // Retorno completa de lista de Programa de Formacion
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function getCompetenciaId($idProyecto)
	{
		try {
			$stm = parent::conectar()->prepare(preparedSQL::GET_COMPETENCIA_ID);
			$stm->bindParam(1, $idProyecto, PDO::PARAM_STR);
			$stm->execute();
			return $stm->fetch(PDO::FETCH_OBJ); // Retorno data Formacion de Programa
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function getCompetenciaName($nameProyecto)
	{
		try {
			$stm = parent::conectar()->prepare(preparedSQL::GET_COMPETENCIA_NAME);
			$nameProyecto = '%' . $nameProyecto . '%';
			$stm->bindParam(1, $nameProyecto, PDO::PARAM_STR);
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ); // Retorno data de seleccionadas lista de Formacion de Programa
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
}
?>