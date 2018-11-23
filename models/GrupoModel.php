<?php
require_once(realpath(dirname(__FILE__)) . '/FichaModel.php');
require_once(realpath(dirname(__FILE__)) . '/RutaFichaModel.php');
require_once(realpath(dirname(__FILE__)) . '/DB.php');

/**
 * @access public
 * @author Afgarcia0479
 * @package Ficha
 */
class GrupoModel extends DB {
	/**
	 * @AttributeType int
	 */
	private $id_grupo;
	/**
	 * @AttributeType String
	 */
	private $num_grupo;
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
	 * @AssociationMultiplicity 0..1
	 */
	public $cod_ficha;
	/**
	 * @AssociationType Ficha\RutaFichaModel
	 * @AssociationMultiplicity 0..1
	 */
	public $cod_ruta_ficha;

	/**
	 * @access public
	 * @return int
	 * @ReturnType int
	 */
	public function getId_grupo() {
		return $this->id_grupo;
	}

	/**
	 * @access public
	 * @param int id_grupo
	 * @return void
	 * @ParamType id_grupo int
	 * @ReturnType void
	 */
	public function setId_grupo($id_grupo) {
		$this->id_grupo = $id_grupo;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getNum_grupo() {
		return $this->num_grupo;
	}

	/**
	 * @access public
	 * @param String num_grupo
	 * @return void
	 * @ParamType num_grupo String
	 * @ReturnType void
	 */
	public function setNum_grupo($num_grupo) {
		$this->num_grupo = $num_grupo;
	}
	public function getAllGrupos()
    {
        try {
            $stm = parent::conectar()->prepare(preparedSQL::GET_ALL_GRUPO);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ); // Retorno completa de lista de Grupo de Formacion
        } catch (Exception $e) {
            die($e->getMessage());
        }
	}


	public static function getGrupoIdRutaFicha($idRutaFicha)
    {
        try {
			$stm = parent::conectar()->prepare(preparedSQL::GET_GRUPO_ID_RUTA_FICHA);
            $stm->bindParam(1, $idRutaFicha, PDO::PARAM_STR);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ); // Retorno seleccionado lista de Grupo de Ficha por filtro de ID Ruta de Ficha
        } catch (Exception $e) {
            die($e->getMessage());
        }
	}


}

?>