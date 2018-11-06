<?php
class LiderModel extends DB
{
/**
 * insertar Instructor desde <FORM> al DB
 * @author Andres Garcia
 * @param $array es $_POST
 * @access public
 * @param data
 */
    public function insertarInstructor(array $data)
    {
        try {
            // Verificar hay datos en $data
            if (
                isset($data['dni']) &&
                isset($data['email']) &&
                isset($data['nombre_instructor']) &&
                isset($data['apellido_instructor'])
            ) {
                $dni = $data['dni'];
                $nombre_instructor = $data['nombre_instructor'];
                $apellido_instructor = $data['apellido_instructor'];
                $email = $data['email'];
                $stm = parent::conectar()->prepare(preparedSQL::INSTRUCTOR_NEW);
                $stm->bindParam(1, $dni, PDO::PARAM_STR);
                $stm->bindParam(2, $nombre_instructor, PDO::PARAM_STR);
                $stm->bindParam(3, $apellido_instructor, PDO::PARAM_STR);
                $stm->bindParam(4, $email, PDO::PARAM_STR);
                $stm->execute();
                return true;
            }
        } catch (Exception $e) {
            return false;
            die($e->getMessage());
        }
    }

    public function getAllInstructores()
    {
        try {
            $stm = parent::conectar()->prepare(preparedSQL::GET_ALL_INSTRUCTORES);
            $stm->execute();
            $users = $stm->fetchAll(PDO::FETCH_OBJ);
            return $users; // Retorno completa de lista de instructores
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function getInstructor($idInstructor)
    {
        try {
            $stm = parent::conectar()->prepare(preparedSQL::GET_INSTRUCTOR);
            $stm->bindParam(1, $idInstructor, PDO::PARAM_STR);
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ); // Retorno data instructor
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


    public function updateDataInstructor($data)
    {
        try {
            // Verificar hay datos en $data
            if (isset($data['dni']) && isset($data['nombre']) && isset($data['apellido']) && isset($data['email'])) {
                $dni = $data['dni'];
                $nombre = $data['nombre'];
                $apellido = $data['apellido'];
                $email  = $data['email'];
                $stm = parent::conectar()->prepare(preparedSQL::UPDATE_DATA_INSTRUCTOR);
                $stm->bindParam(1, $nombre, PDO::PARAM_STR);
                $stm->bindParam(2, $apellido, PDO::PARAM_STR);
                $stm->bindParam(3, $email, PDO::PARAM_STR);
                $stm->bindParam(4, $dni, PDO::PARAM_STR);
                $stm->execute();
                return true;
            }
        } catch (Exception $e) {
            return false;
            die($e->getMessage());
        }
    }

    public function updatedStatusInstructor($data)
    {
        try {
            // Verificar hay datos en $data
            if (isset($data['status']) && isset($data['id_instructor'])) {
                $status = $data['status'];
                $id_instructor = $data['id_instructor'];
                $stm = parent::conectar()->prepare(preparedSQL::UPDATE_STATUS_INSTRUCTOR);
                $stm->bindParam(1, $status, PDO::PARAM_STR);
                $stm->bindParam(2, $id_instructor, PDO::PARAM_STR);
                $stm->execute();
                return true;
            }
        } catch (Exception $e) {
            return false;
            die($e->getMessage());
        }
    }

}
