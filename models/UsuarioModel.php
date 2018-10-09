<?php
require_once(realpath(dirname(__FILE__)) . '/EstadoUsuarioModel.php');
require_once(realpath(dirname(__FILE__)) . '/RolModel.php');
require_once(realpath(dirname(__FILE__)) . '/HorarioAsignadaModel.php');
require_once(realpath(dirname(__FILE__)) . '/DB.php');

/**
 * @access public
 * @author Afgarcia0479
 * @package Usuario
 */
class UsuarioModel extends DB {
	/**
	 * @AttributeType int
	 */
	private $id_usuario;
	/**
	 * @AttributeType string
	 */
	private $documento;
	/**
	 * @AttributeType String
	 */
	private $nombre;
	/**
	 * @AttributeType String
	 */
	private $apellido;
	/**
	 * @AttributeType String
	 */
	private $email;
	/**
	 * @AttributeType String
	 */
	private $password;
	/**
	 * @AttributeType Integer
	 */
	private $version;
	/**
	 * @AttributeType Timestamp
	 */
	private $create_time;
	/**
	 * @AttributeType Timestamp
	 */
	private $update_time;
	/**
	 * @AssociationType Usuario\EstadoUsuarioModel
	 * @AssociationMultiplicity 0..1
	 */
	public $cod_estado_usuario;
	/**
	 * @AssociationType Usuario\RolModel
	 * @AssociationMultiplicity 0..1
	 */
	public $cod_rol;
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
	public function getId_usuario() {
		return $this->id_usuario;
	}

	/**
	 * @access public
	 * @param int id_usuario
	 * @return void
	 * @ParamType id_usuario int
	 * @ReturnType void
	 */
	public function setId_usuario($id_usuario) {
		$this->id_usuario = $id_usuario;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getDocumento() {
		return $this->documento;
	}

	/**
	 * @access public
	 * @param string documento
	 * @return void
	 * @ParamType documento string
	 * @ReturnType void
	 */
	public function setDocumento($documento) {
		$this->documento = $documento;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getNombre() {
		return $this->nombre;
	}

	/**
	 * @access public
	 * @param String nombre
	 * @return void
	 * @ParamType nombre String
	 * @ReturnType void
	 */
	public function setNombre($nombre) {
		$this->nombre = $nombre;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getApellido() {
		return $this->apellido;
	}

	/**
	 * @access public
	 * @param String apellido
	 * @return void
	 * @ParamType apellido String
	 * @ReturnType void
	 */
	public function setApellido($apellido) {
		$this->apellido = $apellido;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * @access public
	 * @param String email
	 * @return void
	 * @ParamType email String
	 * @ReturnType void
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * @access public
	 * @return String
	 * @ReturnType String
	 */
	public function getPassword() {
		return $this->password;
	}

	/**
	 * @access public
	 * @param String password
	 * @return void
	 * @ParamType password String
	 * @ReturnType void
	 */
	public function setPassword($password) {
		$this->password = $password;
	}

	/**
	 * Verificar Login desde <FORM> al DB
	 * @author Andres Garcia
     * @param $array es $_POST
	 * @access public
	 * @param data
	 */
	public function VerificarLogin(array $data) {
		try {
            $sql_query = "SELECT * FROM usuario WHERE documento = ? AND password = ?";
			$stm = parent::conectar()->prepare($sql_query);
            $stm->bindParam(1, $data['dni'], PDO::PARAM_STR);
            $stm->bindParam(2, $data['password'], PDO::PARAM_STR);
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
	}
}
?>