<?php

class SecurityModel extends DB
{

    public function __construct()
    {

    }

    /**
     * Comprobaría si la numero de documento del usuario (dni) en variable $user
     * correcta está registrado. Si es así, el usuario es válido y retorna verdadero.
     * Si no es así, retorno falso que esté configurado como
     * @author Andres Garcia
     * @access public
     */
    public static function LoginSession($user)
    {
        try {
            if ($user) {
                $stm = parent::conectar()->prepare(preparedSQL::USER1_QUERY_DNI);
                $stm->bindParam(1, $user->dni, PDO::PARAM_STR);
                $stm->execute();
                $_SESSION['user'] = $stm->fetch(PDO::FETCH_OBJ);
                $_SESSION['user']->conectado = 1;
                header('location:?c=' . $_SESSION['user']->name_rol);
                // return true;
            } else {
                // No autenticado ni encontrado DB, retorna falso
                // return false;
                header('location:?c=Inicio&m=NoAuthSession');
            }

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function securityCoordinador()
    {
        if (isset($_SESSION['user']->id_rol) && $_SESSION['user']->id_rol == '1') {
        }else{
            header('location:?c=inicio&m=noAuth');
        }
    }

    public function securityLider()
    {
        if (isset($_SESSION['user']->id_rol) && $_SESSION['user']->id_rol == '2') {
        }else{
            header('location:?c=inicio&m=noAuth');
        }
    }

    public function securityInstructor()
    {
        if (isset($_SESSION['user']->id_rol) && $_SESSION['user']->id_rol == '3') {
        }else{
            header('location:?c=inicio&m=noAuth');
        }
    }

    public function sessionDestroy()
    {
        // session_unset();
        session_destroy();
        // session_start();
        // session_regenerate_id(true);
        header('location:?c=Inicio&m=index');
        // exit();
    }





    // Import from WEB

    // [WIP] TODO
    /**
     * Comprobaría si la variable $_SESSION correcta está configurada. Si es así,
     * el usuario es válido y puede ver la página solicitada. Si no es así, redirija
     * al usuario usando la función header() a página Inicio con mensaje no autorizado
     * que esté configurado como
     * @author Andres Garcia
     * @access public
     */
    public function checkLogin()
    {
        // would check if the correct $_SESSION variable is set. If so, user is valid
        // and can view the requested page. If not, redirect the user using the header()
        // function to whatever $redirect is set to

        if (!$_SESSION['checkLogin']) {
            // Si no conectado usuario
            if (!isset($_SESSION['conectado'])) {
                // Redirecciona al Inicio
                $_SESSION['checkLogin'] = true;
                header('location:?c=Inicio&m=NoAuth');
            }
        }
    }

    public static function redirectRoleModule()
    {

    }

    // public static function isLogged($user)

    public function createSession()
    {
        session_start();
    }

    public function logUser($userId)
    {
        $_SESSION['userId'] = $userId;

        $selector = base64_encode(random_bytes(8));
        $token = bin2hex(random_bytes(32));

        $cookieValue = $selector . ':' . base64_encode($token);
        $hashedToken = hash('sha256', $token);

        $timestamp = time() + (86400 * 14);

        setcookie('authToken', $cookieValue, $timestamp, null, null, null, true);

        $stmt = parent::conectar()->query("INSERT INTO logins (login_selector, login_token, login_userId, login_expires) VALUES ('$selector', '$hashedToken', '$userId', '$timestamp')");
    }

    public function relogUser($userId)
    {
        $_SESSION['userId'] = $userId;
    }

    // public function isLogged()
    // {
    //     if (isset($_SESSION['id_usuario'])) {
    //         return true;
    //     } else {
    //         return false;

    // if (isset($_COOKIE['authToken'])) {
    //     list($selector, $token) = explode(':', $_COOKIE['authToken']);
    //     $stmt = parent::conectar()->prepare('SELECT * FROM logins WHERE login_selector = :login_selector');
    //     $stmt->bindValue(':login_selector', $selector);
    //     $stmt->execute();
    //     $results = $stmt->fetch();
    //     if ($results) {
    //         if (hash_equals($results['login_token'], hash('sha256', base64_decode($token)))) {
    //             $this->relogUser($results['login_userId']);
    //         } else {
    //             $this->logOut();
    //             return false;
    //         }
    //     } else {
    //         return false;
    //     }
    // } else {
    //     return false;
    // }
    // }
    // }

    public function logOut()
    {

        list($selector, $token) = explode(':', $_COOKIE['authToken']);

        $stmt = parent::conectar()->prepare('DELETE FROM logins WHERE login_selector = :login_selector');
        $stmt->bindValue(':login_selector', $selector);

        $stmt->execute();

        $stmt = parent::conectar()->prepare('DELETE FROM logins WHERE login_userId = :login_userId');
        $stmt->bindValue(':login_userId', $_SESSION['userId']);

        $stmt->execute();

        unset($_SESSION['userId']);
        setcookie('authToken', '', 1);
        unset($_COOKIE['authToken']);
    }

    public function getId()
    {
        return $_SESSION['userId'];
    }

}
