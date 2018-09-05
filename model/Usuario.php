<?php

class Usuario extends database
{
    public function loginUser($data)
    {
        try {
            $sql_query = "SELECT * FROM usuario WHERE dni = ? AND password = ?";
			$stm = parent::conectar()->prepare($sql_query);
			$stm ->bindParam(1,$data['dni'],PDO::PARAM_STR);
			$stm ->bindParam(2,$data['password'],PDO::PARAM_STR);
            $stm ->execute();
            $_SESSION['user'] = $stm->fetchAll(PDO::FETCH_OBJ);
            $num_row = $stm->rowCount();
            return ($num_row == 1) ? true : false ;
			
			// $_SESSION['perfil'] = $perfil;
			// if($_SESSION['perfil']==1){$_SESSION['nombre'] = "instructor";}
			// if($_SESSION['perfil']==2){$_SESSION['nombre'] = "cliente";}
			// header('location:?c='.$_SESSION['nombre'].'&m='.$_SESSION['nombre']);
		} catch (Exception $e) {
			die($e->getMessage());
		}
    }
}


?>