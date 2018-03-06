<?php
class UserModel{
	private $pdo;
	public function __CONSTRUCT(){
				try {
				  $this->pdo = DataBase::openDB();
				  $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				} catch (PDOException $e) {
					die($e->getMessage());
				}
	}
	//crear un usuario: envia datos de registro a bd
	function createUser($data,$token){
			 try{
				 $sql = "call crear_usu(?,?,?,?,?,?,?,?)";
				 $query = $this->pdo->prepare($sql);
				 $query->execute(array($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[8]));
					$msn = true;
					}catch (PDOException $e) {
						die($e->getMessage());
				  }
					return $msn;
			 }

	function readByCorreo($data){
			 try{
				 $sql = "SELECT * FROM usuario WHERE email_usu = ?";
				 $query = $this->pdo->prepare($sql);
				 $query->execute(array($data));
					 $msn = $query->fetch(PDO::FETCH_BOTH);
					}catch (PDOException $e) {
						die($e->getMessage());
				  }
					return $msn;
			 }
	function crearAcceso($data){
			 try{
				 $sql = "call CrearAcceso(?,?,?)";
				 $query = $this->pdo->prepare($sql);
				 $query->execute($data);
					 $msn = true;
					}catch (PDOException $e) {
						die($e->getMessage());
				  }
					return $msn;
			 }

			 public function readTodos(){
				 try {
					 $sql="SELECT COUNT(*) FROM supermercado";
					 $query=$this->pdo->prepare($sql);
					 $query->execute();
					 $result =  $query->fetch(PDO::FETCH_BOTH);
				 } catch (PDOException $e) {
						 $result = $e->getMessage();
				 }
					return $result;
			 }
			 // actualizar  datos del usuario
			// function updateWorker(){
			//
			// }
//llama los datos que estan en la tabla ciudad
	function readCities(){
		try{
		$sql="SELECT cod_ciu,nom_ciu FROM ciudad ";
		$query=$this->pdo->prepare($sql);
    $query->execute();
    $result = $query->fetchALL(PDO::FETCH_BOTH);
    } catch (PDOException $e) {
          $result = $e->getMessage();
      }
      return $result;
  }

//llama los datos de rol
	function readRol(){
		try{
		$sql="SELECT id_rol,nom_rol FROM rol ";
		$query=$this->pdo->prepare($sql);
    $query->execute();
    $result = $query->fetchALL(PDO::FETCH_BOTH);
    } catch (PDOException $e) {
          $result = $e->getMessage();
      }
      return $result;
  }
	// function readEm(){
	// 	try{
	// 		$sql = "SELECT id_usu,id_rol FROM usuario";
	// 		$query=$this->pdo->prepare($sql);
	// 		$query->execute();
	// 		$result = $query->fetchALL(PDO::FETCH_BOTH);
	// 	}catch (PDOException $e){
	// 		$result = $e->getMessage();
	// 	}
	// 	return $result;
	// 	var_dump $result;
	// }

}
?>
