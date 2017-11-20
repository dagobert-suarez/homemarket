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
	function createUser($data,$token){
			 try{
				 	$sql = "INSERT INTO cliente VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
					$query = $this->pdo->prepare($sql);
					$query->execute(array($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7],$data[8],$data[9],$data[10],1));
				 	$sql = "INSERT INTO acceso VALUES (?,?,?)";
					$query = $this->pdo->prepare($sql);
					$query->execute(array($data[11],$token,$data[0]));

					$msn = "Guardado con exito";
					}catch (PDOException $e) {
						die($e->getMessage());
				  }
					return $msn;
			 }

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
}
?>
