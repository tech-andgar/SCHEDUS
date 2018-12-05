<?php
require_once(realpath(dirname(__FILE__)) . '/CompetenciaModel.php');
require_once(realpath(dirname(__FILE__)) . '/HorarioAsignadaModel.php');
require_once(realpath(dirname(__FILE__)) . '/DB.php');

/**
 * @access public
 * @author Afgarcia0479
 * @package Programa_de_formación
 */
class ResultadoAprendizajeModel extends DB {
	/**
	 * @AttributeType int
	 */
	private $id_resultado_aprendizaje;
	/**
	 * @AttributeType String
	 */
	private $num_resultado_aprendizaje1;
	/**
	 * @AttributeType String
	 */
	private $num_resultado_aprendizaje2;
	/**
	 * @AttributeType String
	 */
	private $name_resultado_aprendizaje;
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
	 * @AssociationType Programa de formación\CompetenciaModel
	 * @AssociationMultiplicity 0..1
	 */
	public $cod_competencia;
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
	public function getId_resultado_aprendizaje() {
		return $this->id_resultado_aprendizaje;
	}

	/**
	 * @access public
	 * @param int id_resultado_aprendizaje
	 * @return void
	 * @ParamType id_resultado_aprendizaje int
	 * @ReturnType void
	 */
	public function setId_resultado_aprendizaje($id_resultado_aprendizaje) {
		$this->id_resultado_aprendizaje = $id_resultado_aprendizaje;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getNum_resultado_aprendizaje1() {
		return $this->num_resultado_aprendizaje1;
	}

	/**
	 * @access public
	 * @param String num_resultado_aprendizaje1
	 * @return void
	 * @ParamType num_resultado_aprendizaje1 String
	 * @ReturnType void
	 */
	public function setNum_resultado_aprendizaje1($num_resultado_aprendizaje1) {
		$this->num_resultado_aprendizaje1 = $num_resultado_aprendizaje1;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getNum_resultado_aprendizaje2() {
		return $this->num_resultado_aprendizaje2;
	}

	/**
	 * @access public
	 * @param String num_resultado_aprendizaje2
	 * @return void
	 * @ParamType num_resultado_aprendizaje2 String
	 * @ReturnType void
	 */
	public function setNum_resultado_aprendizaje2($num_resultado_aprendizaje2) {
		$this->num_resultado_aprendizaje2 = $num_resultado_aprendizaje2;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getName_resultado_aprendizaje() {
		return $this->name_resultado_aprendizaje;
	}

	/**
	 * @access public
	 * @param String name_resultado_aprendizaje
	 * @return void
	 * @ParamType name_resultado_aprendizaje String
	 * @ReturnType void
	 */
	public function setName_resultado_aprendizaje($name_resultado_aprendizaje) {
		$this->name_resultado_aprendizaje = $name_resultado_aprendizaje;
	}

	public function getAllResultadoAprendizaje()
    {
        try {
            $stm = parent::conectar()->prepare(preparedSQL::GET_ALL_RESULTADO_APRENDIZAJE);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);// Retorno completa de lista de Resultado Aprendizaje
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function getResultadoAprendizajeId($idResultadoAprendizaje)
    {
        try {
            $stm = parent::conectar()->prepare(preparedSQL::GET_RESULTADO_APRENDIZAJE_ID);
            $stm->bindParam(1, $idResultadoAprendizaje, PDO::PARAM_STR);
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ); // Retorno data Resultado Aprendizaje
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

	public function getResultadoAprendizajeName($nameResultadoAprendizaje)
    {
        try {
			$stm = parent::conectar()->prepare(preparedSQL::GET_RESULTADO_APRENDIZAJE_NAME);
            $nameResultadoAprendizaje = '%'.$nameResultadoAprendizaje.'%';
            $stm->bindParam(1, $nameResultadoAprendizaje, PDO::PARAM_STR);
            $stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ); // Retorno data de seleccionadas lista de Formacion de Programa
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
}
?>