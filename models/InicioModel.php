<?php
class InicioModel extends DB{

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
	
	public function usuarioData($correo){
		try {
			$stm = parent::conectar()->prepare("SELECT * FROM `user` WHERE `username`= ?");
			$stm -> bindParam(1,$correo);
			$stm -> execute();
			return $stm -> fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());	
		}
	}
}