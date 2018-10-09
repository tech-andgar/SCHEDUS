<?php
require_once 'models/preparedSQL.php';

class SecurityModel extends DB
{
    public function __construct()
    {

    }

    public function loginData($dni = null, $cod_rol = null)
    {
        try {
            if ($cod_rol == null || $dni == null) {
                header('location:?c=Inicio');
            } else {
                $stm = parent::conectar()->prepare(preparedSQL::USER1_QUERY_DNI);
                $stm->bindParam(1, $dni, PDO::PARAM_STR);
                $stm->execute();
                $_SESSION['user'] = $stm->fetch(PDO::FETCH_OBJ);
                $_SESSION['perfil'] = $cod_rol;
                switch ($_SESSION['perfil']) {
                    case '1':
                        $_SESSION['nombre'] = 'Coordinador';
                        break;
                    case '2':
                        $_SESSION['nombre'] = 'Lider';
                        break;
                    case '3':
                        $_SESSION['nombre'] = 'Instructor';
                        break;
                    default:
                        header('location:?c=Inicio');
                        break;
                }
                header('location:?c=' . $_SESSION['nombre']);
            }

            $stm = parent::conectar()->prepare(preparedSQL::USER1_QUERY_DNI);
            $stm->bindParam(1, $dni, PDO::PARAM_STR);
            $stm->execute();
            $_SESSION['user'] = $stm->fetch(PDO::FETCH_OBJ);
            $_SESSION['perfil'] = $cod_rol;
            switch ($_SESSION['perfil']) {
                case '1':
                    $_SESSION['nombre'] = 'Coordinador';
                    break;
                case '2':
                    $_SESSION['nombre'] = 'Lider';
                    break;
                case '3':
                    $_SESSION['nombre'] = 'Instructor';
                    break;
                default:
                    header('location:?c=Inicio');
                    break;
            }
            header('location:?c=' . $_SESSION['nombre']);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function SecurityInstructor()
    {
        if ($_SESSION['perfil'] == 1) {
            # code...
        } else {

            header('location:?c=Index&m=index');
        }
    }
    public function SecurityLider()
    {
        if ($_SESSION['perfil'] == 2) {
            # code...
        } else {
            header('location:?c=Index&m=index');
        }
    }
}
