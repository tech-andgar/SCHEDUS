<?php
require_once(realpath(dirname(__FILE__)) . '/FichaModel.php');
require_once(realpath(dirname(__FILE__)) . '/DB.php');

/**
 * @access public
 * @author Afgarcia0479
 * @package Ficha
 */
class EstadoFichaModel extends DB {
	/**
	 * @AttributeType int
	 */
	private $id_estado_ficha;
	/**
	 * @AttributeType String
	 */
	private $name_estado_ficha;
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
	 * @AssociationType Ficha\FichaModel
	 * @AssociationMultiplicity 0..*
	 */
	public $ficha = array();

	/**
	 * @access public
	 * @return int
	 * @ReturnType int
	 */
	public function getId_estado_ficha() {
		return $this->id_estado_ficha;
	}

	/**
	 * @access public
	 * @param int id_estado_ficha
	 * @return void
	 * @ParamType id_estado_ficha int
	 * @ReturnType void
	 */
	public function setId_estado_ficha($id_estado_ficha) {
		$this->id_estado_ficha = $id_estado_ficha;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getName_estado_ficha() {
		return $this->name_estado_ficha;
	}

	/**
	 * @access public
	 * @param String name_estado_ficha
	 * @return void
	 * @ParamType name_estado_ficha String
	 * @ReturnType void
	 */
	public function setName_estado_ficha($name_estado_ficha) {
		$this->name_estado_ficha = $name_estado_ficha;
	}


	public function getAllEstadoFicha()
    {
        try {
            $stm = parent::conectar()->prepare(preparedSQL::GET_ALL_ESTADO_FICHAS);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);// Retorno completa de lista de Fichas
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function getEstadoFichaId($idEstadoFicha)
    {
        try {
            $stm = parent::conectar()->prepare(preparedSQL::GET_ESTADO_FICHA_ID);
            $stm->bindParam(1, $idEstadoFicha, PDO::PARAM_STR);
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ); // Retorno data Estado de Ficha
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

	public function getEstadoFichaName($nameEstadoFicha)
    {
        try {
			$stm = parent::conectar()->prepare(preparedSQL::GET_ESTADO_FICHA_NAME);
            $nameEstadoFicha = '%'.$nameEstadoFicha.'%';
            $stm->bindParam(1, $nameEstadoFicha, PDO::PARAM_STR);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ); // Retorno data de seleccionadas lista de Estado de Fichas
        } catch (Exception $e) {
            die($e->getMessage());
        }
	}

	public function insertarEstadoFicha(array $data)
    {
        // var_dump($_POST);
        try {
            // Verificar hay datos en $data
            if (
                isset($data['name_estado_ficha'])) {
                $name_estado_ficha = $data['name_estado_ficha'];
                $stm = parent::conectar()->prepare(preparedSQL::INSERT_NEW_ESTADO_FICHA);
                $stm->bindParam(1, $name_estado_ficha, PDO::PARAM_STR);
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