<?php
class LoginModel{
	private $pdo;
	public function __CONSTRUCT(){
		try {
		  $this->pdo = DataBase::openDB();
		  $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	//consultando el usuario
	function user($nombre){
		try {
		$sql = "SELECT * FROM usuario INNER JOIN acceso ON usuario.id_usu = acceso.id_usu WHERE usuario.email_usu = ?  ";
				$query = $this->pdo->prepare($sql);
				$query->execute(array($nombre));
				$result = $query->fetch(PDO::FETCH_BOTH);
				return $result;
		}catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	//consultando id del supermercado para la variable de sesión
	function supermercado($id_rol){
		try {
		$sql = "SELECT usuario_supermercado.id_sup FROM usuario INNER JOIN usuario_supermercado ON
					(usuario.id_usu = usuario_supermercado.id_usu)
					and usuario.id_rol = ?  ";
					$query = $this->pdo->prepare($sql);
					$query->execute(array($id_rol));
					$result = $query->fetch(PDO::FETCH_BOTH);
					return $result;
		}catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	//consultando contraseña
	function contra($usu){
		try {
				$sql = "SELECT * FROM acceso WHERE id_usu = ? ";
				$query = $this->pdo->prepare($sql);
				$query->execute(array($usu));
				$result = $query->fetch(PDO::FETCH_BOTH);
				return $result;
		}catch (PDOException $e) {
			die($e->getMessage());
		}
	}
}
?>
