<?php
class SecurityModel extends DB
{
    public function loginData($dni, $cod_rol)
    {
        try {

            $stm = parent::conectar()->prepare(preparedSQL::user_id1);
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
            }
            header('location:?c=' . $_SESSION['nombre'] . '&m=' . $_SESSION['nombre']);
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
