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
			return $stm->fetchAll(PDO::FETCH_OBJ); // Retorno completa de lista de Competencia
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public static function getLastCompetenciaId()
	{
		try {
			$stm = parent::conectar()->prepare(preparedSQL::GET_LAST_COMPETENCIA_ID);
			$stm->execute();
			return $stm->fetch(PDO::FETCH_OBJ); // Retorno numero de id ultima de Competencia
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
			return $stm->fetch(PDO::FETCH_OBJ); // Retorno data Competencia
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
			return $stm->fetchAll(PDO::FETCH_OBJ); // Retorno data de seleccionadas lista de Competencia
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function insertarCompetencia(array $data)
    {
        try {
            // Verificar hay datos en $data
            if (
				isset($data['cod_programa_formacion']) &&
				isset($data['codigo_competencia']) &&
				isset($data['num_competencia2']) &&
				isset($data['name_competencia'])
			){
				$competencia = $this->getLastCompetenciaId();
				$id_competencia = $competencia->id_competencia;
				$id_competencia++;
				$cod_programa_formacion = $data['cod_programa_formacion'];
				$codigo_competencia = $data['codigo_competencia'];
				$num_competencia2 = $data['num_competencia2'];
				$name_competencia = $data['name_competencia'];
                $stm = parent::conectar()->prepare(preparedSQL::INSERT_NEW_COMPETENCIA);
                $stm->bindParam(1, $id_competencia, PDO::PARAM_STR);
                $stm->bindParam(2, $cod_programa_formacion, PDO::PARAM_STR);
                $stm->bindParam(3, $codigo_competencia, PDO::PARAM_STR);
                $stm->bindParam(4, $num_competencia2, PDO::PARAM_STR);
                $stm->bindParam(5, $name_competencia, PDO::PARAM_STR);
                $stm->execute();
                return true;
            }
        } catch (Exception $e) {
            return false;
            die($e->getMessage());
        }
    }
}
?>