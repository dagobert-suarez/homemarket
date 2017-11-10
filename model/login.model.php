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
 
	function user($nombre){
		try {
				$sql = "SELECT * FROM cliente WHERE email_cli = ? ";
				$query = $this->pdo->prepare($sql);
				$query->execute(array($nombre));
				$result = $query->fetch(PDO::FETCH_BOTH);
				return $result;
		}catch (PDOException $e) {
			die($e->getMessage());
		}

	}

	function contra($usu){
		try {
				$sql = "SELECT * FROM acceso WHERE doc_cli = ? ";
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