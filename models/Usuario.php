<?php

class UsuarioModel extends Database
{
    /**
     * By Andres Garcia
     * Verificar Login desde <FORM> al DB
     * @param $array es $_POST
     */
    public function VerificarLogin($array)
    {
        try {
            $sql_query = "SELECT * FROM usuario WHERE dni = ? AND password = ?";
            $stm = parent::conectar()->prepare($sql_query);
            $stm->bindParam(1, $array['dni'], PDO::PARAM_STR);
            $stm->bindParam(2, $array['password'], PDO::PARAM_STR);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
