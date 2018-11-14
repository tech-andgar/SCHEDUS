<?php
require_once(realpath(dirname(__FILE__)) . '/ProgramaFormacionModel.php');
require_once(realpath(dirname(__FILE__)) . '/DB.php');

/**
 * @access public
 * @author Afgarcia0479
 * @package Programa de formación
 */
class EstadoProgramaFormacionModel extends DB {
	/**
	 * @AttributeType int
	 */
	private $id_estado_programa_formacion;
	/**
	 * @AttributeType String
	 */
	private $name_estado_programa_formacion;
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
	 * @access public
	 * @return int
	 * @ReturnType int
	 */
	public function getId_estado_programa_formacion() {
		return $this->id_estado_programa_formacion;
	}

	/**
	 * @access public
	 * @param int id_estado_programa_formacion
	 * @return void
	 * @ParamType id_estado_programa_formacion int
	 * @ReturnType void
	 */
	public function setId_estado_programa_formacion($id_estado_programa_formacion) {
		$this->id_estado_programa_formacion = $id_estado_programa_formacion;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getName_estado_programa_formacion() {
		return $this->name_estado_programa_formacion;
	}

	/**
	 * @access public
	 * @param String name_estado_programa_formacion
	 * @return void
	 * @ParamType name_estado_programa_formacion String
	 * @ReturnType void
	 */
	public function setName_estado_programa_formacion($name_estado_programa_formacion) {
		$this->name_estado_programa_formacion = $name_estado_programa_formacion;
	}

	public function getAllEstadoProgramasFormacion()
    {
        try {
            $stm = parent::conectar()->prepare(preparedSQL::GET_ALL_ESTADO_PROGRAMAS_FORMACION);
            $stm->execute();
            $fichas = $stm->fetchAll(PDO::FETCH_OBJ);
            return $fichas; // Retorno completa de lista de ProgramasFormacion
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function getEstadoProgramasFormacion($idEstadoProgramasFormacions)
    {
        try {
            $stm = parent::conectar()->prepare(preparedSQL::GET_ESTADO_PROGRAMA_FORMACION_ID);
            $stm->bindParam(1, $idEstadoProgramasFormacions, PDO::PARAM_STR);
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ); // Retorno data instructor
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
?>