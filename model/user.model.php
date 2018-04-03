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

	//crear un usuario: envia datos de registro a bd ajampla
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

			 // consulta en usuario el email
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
	function readBy($data){
			 try{
				 $sql = "SELECT * FROM usuario WHERE id_usu = ?";
				 $query = $this->pdo->prepare($sql);
				 $query->execute(array($data));
					 $msn = $query->fetch(PDO::FETCH_BOTH);
					}catch (PDOException $e) {
						die($e->getMessage());
				  }
					return $msn;
			 }

			 //para crear la contraseña
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
	function update($data){
			 try{
				 $sql = "call modificarUsuario(?,?,?,?,?)";
				 $query = $this->pdo->prepare($sql);
				 $query->execute($data);
					 $msn = true;
					}catch (PDOException $e) {
						die($e->getMessage());
				  }
					return $msn;
			 }
			 // Crear Supermercado
			 public function createSuper($data){
				 try{
					 $sql="INSERT INTO supermercado(nom_sup, dir_sup, tel_sup, cod_ciu,logo_sup)
					 			VALUES (?,?,?,?,?)";
					 $query=$this->pdo->prepare($sql);
					 $query->execute(array($data[0], $data[1], $data[2], $data[3], $data[4] ) ) ;
					 $msn ="Guardado Exitoxamente";
				 } catch(PDOException $e){
					 $msn = $e->getMessage();
				 }

				 return $result;
			 }
			 // Seleccionar todos
			 public function readAllSup(){
				 try{
					 $sql="SELECT * FROM supermercado";
					 $query=$this->pdo->prepare($sql);
					 $query->execute();
					 $result = $query->fetchALL(PDO::FETCH_BOTH);
				 } catch (PDOException $e){
					 $result = $e->getMessage();
				 }
				 return $result;
			 }
			 // Seleccionar por Supermercado
			 public function readBySup($data){
				 try{
					$sql="SELECT * FROM supermercado WHERE id_sup = ?";
					$query=$this->pdo->prepare($sql);
					$query->execute(array($data));
					$result = $query->fetch(PDO::FETCH_BOTH);
				} catch(PDOException $e){
					$result = $e->getMessage();
				}
				return $result;
			 }
			 // Actualizar Supermercados
			 public function updateSup($data){
				 try{
					 $sql="UPDATE supermercado SET nom_sup = ? , dir_sup = ? , tel_sup = ? cod_ciu = ? , logo_sup = ?";
					 $query=$this->pdo->prepare($sql);
					 $query->execute(array($data[0], $data[1], $data[2], $data[3], $data[4]));
					 $msn = "Modificado Exitosamente";
				 } catch (PDOException $e){
					 $msn = $e->getMessage();
				 }
				 return $msn;
			 }
			 // Eliminar Supermercados
			 public function deleteSup($data){
				 try {
					 $sql="DELETE FROM supermercado WHERE id_sup = ?";
					 $query=$this->pdo->prepare($sql);
					 $query->execute(array($data));
					 $msn="Eliminado Exitoxamente";
				 } catch (PDOException $e) {
					 $msn = $e->getMessage();
				 }
				 return $msn;
			 }


			 //hace la consulta del numero de supermercados
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
			 // llama todo los  empleados (cantidad)de empleados
			function prove(){
				try{
					$sql= "SELECT COUNT(*) FROM proveedores";
					$query=$this->pdo->prepare($sql);
					$query->execute();
					$result=  $query->fetch(PDO::FETCH_BOTH);
				}catch(PDOException $e){
					$result = $e-> getMessage();
				}
				return $result;
				// return 1;
			}

// llama las ciudades registradas en bd
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

//llama los dos primeros roles que hay en bd
	function readRol(){
		try{
		$sql="SELECT id_rol,nom_rol FROM rol limit 2";
		$query=$this->pdo->prepare($sql);
	    $query->execute();
	    $result = $query->fetchALL(PDO::FETCH_BOTH);
	    } catch (PDOException $e) {
	          $result = $e->getMessage();
	      }
	      return $result;
  }

	// para probar en el worker - llama solo el rol del empleado
	function readRolWorker(){
		try{
			$sql="SELECT id_rol,nom_rol FROM rol limit 1 offset 2";
			$query=$this->pdo->prepare($sql);
			$query->execute();
			$result = $query->fetchALL(PDO::FETCH_BOTH);
		} catch (PDOException $e){
			$result = $e->getMessage();
		}
		return $result;
	}
	function selectCates(){
	    try{
	        $sql= "SELECT COUNT(*) FROM tipo_producto";
	        $query=$this->pdo->prepare($sql);
	        $query->execute();
	        $result=  $query->fetch(PDO::FETCH_BOTH);
	    }catch(PDOException $e){
	        $result = $e-> getMessage();
	    }
		return $result;
	}
	function selectProdu(){
		try{
			$sql= "SELECT COUNT(*) FROM productos";
			$query=$this->pdo->prepare($sql);
			$query->execute();
			$result= $query->fetch(PDO::FETCH_BOTH);
		}catch(PDOException $e){
			$result = $e-> getMessage();
		}
		return $result;
	}

	// function readEm(){
	// 	try{
	// 		$sql = "SELECT id_usu,id_rol FROM usuario";
	// 		$query=$this->pdo->prepare($sql);
	// 		$query->execute();
	// 		$result = $query->fetchALL(PDO::FETCH_BOTH);
	// 		}catch (PDOException $e){
	// 		$result = $e->getMessage();
	// 		}
	// 		return $result;
	// 		var_dump $result;
	// 		}

}
?>
