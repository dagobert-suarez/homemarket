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

				 $sql = "call crear_usu(?,?,?,?,?,?,?,?,?,?,?,?)";
				 $query = $this->pdo->prepare($sql);
				 $query->execute(array($data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7],$data[9],'no',$data[8],$token));

					$msn = "Guardado con exito";
					}catch (PDOException $e) {
						die($e->getMessage());
				  }
					return $msn;
			 }
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
}
?>
