<?php
require_once realpath(dirname(__FILE__)) . '/EstadoUsuarioModel.php';
require_once realpath(dirname(__FILE__)) . '/RolModel.php';
require_once realpath(dirname(__FILE__)) . '/HorarioAsignadaModel.php';
require_once realpath(dirname(__FILE__)) . '/DB.php';

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
   * Verificar password de Usuario
   * @author Andres Garcia
   * @param $array es $_POST
   * @access public
   * @param data
   */
  public function VerificarPassword($user, $password) {
    return $user['password'] == $password;
    // return $verify = password_verify($password, $results['user_password']);

  }

  /**
   * Verificar Login desde <FORM> al DB
   * @author Andres Garcia
   * @param $array es $_POST
   * @access public
   * @param data
   */
  public function verificarLogin(array $data) {

    try {
      // Verificar hay datos dni y password en $data
      if (isset($data['dni']) && isset($data['password'])) {
        $dni = $data['dni'];
        $password = $data['password'];

        // Verificar longuitud cadena de caracteres del dni y password
        // if (strlen($dni) > 0 && strlen($password) > 0) {

        $stm = parent::conectar()->prepare(preparedSQL::GET_USER_DNI);
        $stm->bindParam(1, $dni, PDO::PARAM_STR);
        $stm->execute();
        $user = $stm->fetch(PDO::FETCH_OBJ);

        // Encontrado usuario
        if ($user) {

          // var_dump($password);
          // var_dump($user);
          // Comprobar Password
          if ($user->password == $password) {
            // Correcto password
            // header('Location: dashboard.php');
            return $user;

          }
          // Incorrecta password
          else {
            //handle wrong password
            // header('Location: ?c=Inicio&m=wrongPassword');
            return false;
          }

        } else {
          // No encontrado usuario
          //handle no user found
          // header('Location: ?c=Inicio&m=noUserFound');
          return false;
        }

        // } else {
        //   // 0 caracteres de dni y password

        // }

      } else {
        // No hay datos dni y password en $data
        //handle no data user
        // header('Location: ?c=Inicio&m=noDataUser');
        return false;

      }

    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  /**
   * Verificar Email desde <FORM> al DB
   * @author Andres Garcia
   * @param $array es $_POST
   * @access public
   * @param data
   */
  public function verificarEmail(array $data) {
    try {
      // Verificar hay datos email
      if (isset($data['emailRecovery'])) {
        $email = $data['emailRecovery'];

        $stm = parent::conectar()->prepare(preparedSQL::GET_USER_EMAIL);
        $stm->bindParam(1, $email, PDO::PARAM_STR);
        $stm->execute();
        $user = $stm->fetch(PDO::FETCH_OBJ);

        // Encontrado usuario
        if ($user) {
          // Comprobar estado del usuario
          if ($user->id_estado_usuario == 2) { // 2 Activo
            return $user;
          }
          // Estado del usuario Inactivo
          else {
            return false;
          }

        } else {
          // No encontrado usuario
          return false;
        }
      } else {
        // No hay datos email en $data
        return false;
      }

    } catch (Exception $e) {
      die($e->getMessage());
    }
  }
}
?>