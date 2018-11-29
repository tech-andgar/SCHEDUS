<?php
require_once(realpath(dirname(__FILE__)) . '/RutaFichaModel.php');
require_once(realpath(dirname(__FILE__)) . '/DB.php');

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

	public function getAllJornada()
    {
        try {
            $stm = parent::conectar()->prepare(preparedSQL::GET_ALL_JORNADA);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ); // Retorno completa de lista de Jornadas
        } catch (Exception $e) {
            die($e->getMessage());
        }
	}
	
	public function getJornadaId($idJornada)
    {
        try {
            $stm = parent::conectar()->prepare(preparedSQL::GET_JORNADA_ID);
            $stm->bindParam(1, $idJornada, PDO::PARAM_STR);
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ); // Retorno data Jornadas
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

	public function getJornadaName($nameJornada)
    {
        try {
			$stm = parent::conectar()->prepare(preparedSQL::GET_JORNADA_NAME);
            $nameJornada = '%'.$nameJornada.'%';
            $stm->bindParam(1, $nameJornada, PDO::PARAM_STR);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ); // Retorno data de seleccionadas lista de Jornadas
        } catch (Exception $e) {
            die($e->getMessage());
        }
	}
	
	public function insertarJornada(array $data)
    {
		// var_dump($_POST);
        try {
			// Verificar hay datos en $data
            if (
                isset($data['name_jornada'])) {
                $name_jornada = $data['name_jornada'];
                $stm = parent::conectar()->prepare(preparedSQL::INSERT_NEW_JORNADA);
                $stm->bindParam(1, $name_jornada, PDO::PARAM_STR);
                $stm->execute();
                return true;
            }
        } catch (Exception $e) {
            return false;
            die($e->getMessage());
        }
	}
	

	public function updateDataJornada($data)
    {
        try {
			/* var_dump($data); */
            // Verificar hay datos en $data
			if (isset($data['id_jornada']) &&
				isset($data['name_jornada'])) {
                $name_jornada = $data['name_jornada'];
                $id_jornada = $data['id_jornada'];
                $stm = parent::conectar()->prepare(preparedSQL::UPDATE_DATA_JORNADA_ID);
                $stm->bindParam(1, $name_jornada, PDO::PARAM_STR);
                $stm->bindParam(2, $id_jornada, PDO::PARAM_STR);
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