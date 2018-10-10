<?php


class SecurityModel extends DB
{

    public function __construct()
    {
        $this->validateUser($_SESSION);
    }

    public function validateUser($user)
    {
        try {
            if ($user) {
                $stm = parent::conectar()->prepare(preparedSQL::USER1_QUERY_DNI);
                $stm->bindParam(1, $user['dni'], PDO::PARAM_STR);
                $stm - execute();
                $_SESSION['user'] = $stm->fetch(PDO::FETCH_OBJ);
                return true;
            } else {
                // No autenticado ni encontrado DB, retorna falso
                header('location:?c=Inicio&m=NoAuth');
                // return false;
            }

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    //TODO [WIP] NEED FIX 
    public static function redirectRoleModule()
    {
        var_dump($_SESSION);
        // exit();

        // switch ($_SESSION['id_rol']) {
        //     case '1':
        //         $_SESSION['name_rol'] = 'Coordinador';
        //         break;
        //     case '2':
        //         $_SESSION['name_rol'] = 'Lider';
        //         break;
        //     case '3':
        //         $_SESSION['name_rol'] = 'Instructor';
        //         break;
        //     default:
        //         header('location:?c=Inicio');
        //         break;
        // }
        header('location:?c=' . $_SESSION['name_rol']);
    }

    public function securityInstructor()
    {
        if ($_SESSION['id_rol'] == 1) {
            # code...
        } else {

            header('location:?c=Index&m=index');
        }
    }
    public function securityLider()
    {
        if ($_SESSION['id_rol'] == 2) {
            # code...
        } else {
            header('location:?c=Index&m=index');
        }
    }

    // Import from WEB
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

    public function isLogged()
    {
        if (isset($_SESSION['id_usuario'])) {
            return true;
        } else {
            return false;

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
        }
    }

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
