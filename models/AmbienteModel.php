<?php
require_once(realpath(dirname(__FILE__)) . '/SedeModel.php');
require_once(realpath(dirname(__FILE__)) . '/EstadoAmbienteModel.php');
require_once(realpath(dirname(__FILE__)) . '/HorarioAsignadaModel.php');
require_once(realpath(dirname(__FILE__)) . '/DB.php');

/**
 * @access public
 * @author Afgarcia0479
 * @package Ambiente
 */
class AmbienteModel extends DB {
	/**
	 * @AttributeType int
	 */
	private $id_ambiente;
	/**
	 * @AttributeType String
	 */
	private $num_ambiente;
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
	 * @AssociationType Ambiente\SedeModel
	 * @AssociationMultiplicity 0..1
	 */
	public $cod_sede;
	/**
	 * @AssociationType Ambiente\EstadoAmbienteModel
	 * @AssociationMultiplicity 0..1
	 */
	public $cod_estado_ambiente;
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
	public function getId_ambiente() {
		return $this->id_ambiente;
	}

	/**
	 * @access public
	 * @param int id_ambiente
	 * @return void
	 * @ParamType id_ambiente int
	 * @ReturnType void
	 */
	public function setId_ambiente($id_ambiente) {
		$this->id_ambiente = $id_ambiente;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getNum_ambiente() {
		return $this->num_ambiente;
	}

	/**
	 * @access public
	 * @param String num_ambiente
	 * @return void
	 * @ParamType num_ambiente String
	 * @ReturnType void
	 */
	public function setNum_ambiente($num_ambiente) {
		$this->num_ambiente = $num_ambiente;
	}
	//
	// ─── AMBIENTE ───────────────────────────────────────────────────────────────────
	//
	public function getAllAmbiente()
    {
        try {
			$stm = parent::conectar()->prepare(preparedSQL::GET_ALL_AMBIENTE);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ); // Retorno completa de lista de Ambientes
        } catch (Exception $e) {
            die($e->getMessage());
        }
	}

	public function getAmbienteId($idNivelFormacion)
    {
        try {
            $stm = parent::conectar()->prepare(preparedSQL::GET_AMBIENTE_ID);
            $stm->bindParam(1, $idNivelFormacion, PDO::PARAM_STR);
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ); // Retorno data Ambientes
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

	public function getAmbienteName($nameNivelFormacion)
    {
        try {
			$stm = parent::conectar()->prepare(preparedSQL::GET_AMBIENTE_NAME);
            $nameNivelFormacion = '%'.$nameNivelFormacion.'%';
            $stm->bindParam(1, $nameNivelFormacion, PDO::PARAM_STR);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ); // Retorno data de seleccionadas lista de Ambientes
        } catch (Exception $e) {
            die($e->getMessage());
        }
	}

	public function insertaAmbienteFormacion(array $data)
    {
        try {
			// var_dump($data);
            // Verificar hay datos en $data
            if (
                isset($data['num_ambiente']) &&
                isset($data['name_sede']))
            {
                $num_ambiente = $data['num_ambiente'];
                $name_sede = $data['name_sede'];
                $stm = parent::conectar()->prepare(preparedSQL::INSERT_NEW_AMBIENTE);
                $stm->bindParam(1, $num_ambiente, PDO::PARAM_STR);
                $stm->bindParam(2, $name_sede, PDO::PARAM_STR);
                $stm->execute();
                return true;
            }
        } catch (Exception $e) {
            return false;
            die($e->getMessage());
        }
    }
	public function updateDataCompetencia($data)
    {
        try {
			// var_dump($data);
			// Verificar hay datos en $data
            if (isset($data['id_competencia'])
			&& isset($data['cod_programa_formacion'])
			&& isset($data['codigo_competencia'])
			&& isset($data['num_competencia2'])
			&& isset($data['name_competencia'])) {
				$txt_upd_cod_programa_formacion = $data['cod_programa_formacion'];
				$txt_upd_cod_competencia1 = $data['codigo_competencia'];
				$txt_upd_cod_competencia2 = $data['num_competencia2'];
				$txt_upd_name_competencia = $data['name_competencia'];
                $txt_upd_id_competencia = $data['id_competencia'];
                $stm = parent::conectar()->prepare(preparedSQL::UPDATE_DATA_COMPETENCIA_ID);
				$stm->bindParam(1, $txt_upd_cod_programa_formacion, PDO::PARAM_STR);
				$stm->bindParam(2, $txt_upd_cod_competencia1, PDO::PARAM_STR);
				$stm->bindParam(3, $txt_upd_cod_competencia2, PDO::PARAM_STR);
				$stm->bindParam(4, $txt_upd_name_competencia, PDO::PARAM_STR);
                $stm->bindParam(5, $txt_upd_id_competencia, PDO::PARAM_STR);
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