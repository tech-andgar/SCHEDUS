<?php
require_once(realpath(dirname(__FILE__)) . '/ProgramaFormacionModel.php');
require_once(realpath(dirname(__FILE__)) . '/ActividadProyectoModel.php');
require_once(realpath(dirname(__FILE__)) . '/DB.php');

/**
 * @access public
 * @author Afgarcia0479
 * @package Programa_de_formación
 */
class ProyectoModel extends DB {
	/**
	 * @AttributeType int
	 */
	private $id_proyecto;
	/**
	 * @AttributeType String
	 */
	private $name_proyecto;
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
	 * @AssociationType Programa de formación\ActividadProyectoModel
	 * @AssociationMultiplicity 0..*
	 */
	public $actividad_proyecto = array();

	/**
	 * @access public
	 * @return int
	 * @ReturnType int
	 */
	public function getId_proyecto() {
		return $this->id_proyecto;
	}

	/**
	 * @access public
	 * @param int id_proyecto
	 * @return void
	 * @ParamType id_proyecto int
	 * @ReturnType void
	 */
	public function setId_proyecto($id_proyecto) {
		$this->id_proyecto = $id_proyecto;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getName_proyecto() {
		return $this->name_proyecto;
	}

	/**
	 * @access public
	 * @param String name_proyecto
	 * @return void
	 * @ParamType name_proyecto String
	 * @ReturnType void
	 */
	public function setName_proyecto($name_proyecto) {
		$this->name_proyecto = $name_proyecto;
	}


	public function getAllProyecto()
	{
		try {
			$stm = parent::conectar()->prepare(preparedSQL::GET_ALL_PROYECTO);
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ); // Retorno completa de lista de Programa de Formacion
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function getProyectoId($idProyecto)
	{
		try {
			$stm = parent::conectar()->prepare(preparedSQL::GET_PROYECTO_ID);
			$stm->bindParam(1, $idProyecto, PDO::PARAM_STR);
			$stm->execute();
			return $stm->fetch(PDO::FETCH_OBJ); // Retorno data Formacion de Programa
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function getProyectoName($nameProyecto)
	{
		try {
			$stm = parent::conectar()->prepare(preparedSQL::GET_PROYECTO_NAME);
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