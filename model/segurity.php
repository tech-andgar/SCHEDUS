<?php 
class security extends database{
	public function loginData($id,$perfil){
		try {
			$stm = parent::conectar()->prepare(preparedSql::dataSession);
			$stm ->bindParam(1,$id,PDO::PARAM_STR);
			$stm ->execute();
			$_SESSION['user'] = $stm->fetchAll(PDO::FETCH_OBJ);
			$_SESSION['perfil'] = $perfil;
			if($_SESSION['perfil']==1){$_SESSION['nombre'] = "instructor";}
			if($_SESSION['perfil']==2){$_SESSION['nombre'] = "cliente";}
			header('location:?c='.$_SESSION['nombre'].'&m='.$_SESSION['nombre']);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	public function Sinstructor(){
		if ($_SESSION['perfil'] == 1) {
			
		}else{
			header('location:?c=index&m=inicio');
		}
	}
	public function Slider(){
		if ($_SESSION['perfil'] == 2) {
			
		}else{
			header('location:?c=index&m=inicio');
		}
	}
}
 ?>