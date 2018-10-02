<?php
class Security extends Database{

	public function loginData($dni, $cod_rol){
		try {
			$sql_query = "SELECT * FROM usuario WHERE dni = ?";
			$stm = parent::conectar()->prepare($sql_query);
			$stm->bindParam(1,$dni,PDO::PARAM_STR);
			$stm ->execute();
			$_SESSION['user'] = $stm->fetchAll(PDO::FETCH_OBJ);
			$_SESSION['perfil'] = $cod_rol;
			switch ($_SESSION['perfil']) {
				case '1':
					$_SESSION['nombre'] = 'Instructor';
					break;
				case '2':
					$_SESSION['nombre'] = 'Lider';
					break;
			}
			header('location:?c='.$_SESSION['nombre'].'&m='.$_SESSION['nombre']);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function SecurityInstructor(){
		if ($_SESSION['perfil'] == 1) {
			# code...
		}else {

			header('location:?c=Index&m=index');
		}
	}
	public function SecurityLider(){
		if ($_SESSION['perfil'] == 2) {
			# code...
		}else {
			header('location:?c=Index&m=index');
		}
	}
}