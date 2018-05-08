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
	function readByCod($data){
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
	function readContraseña($data){
			 try{
				 $sql = "SELECT * FROM acceso WHERE id_usu = ?";
				 $query = $this->pdo->prepare($sql);
				 $query->execute(array($data));
					 $msn = $query->fetch(PDO::FETCH_BOTH);
					}catch (PDOException $e) {
						die($e->getMessage());
				  }
					return $msn;
			 }
	function readSuper(){
			 try{
				 $sql = "SELECT * FROM supermercado INNER JOIN ciudad ON supermercado.cod_ciu = ciudad.cod_ciu ";
				 $query = $this->pdo->prepare($sql);
				 $query->execute();
					 $msn = $query->fetchAll(PDO::FETCH_BOTH);
					}catch (PDOException $e) {
						die($e->getMessage());
				  }
					return $msn;
			 }
	function readBy($data){
		try {
				$sql= "SELECT * FROM usuario WHERE id_usu = ?";
				$query=$this->pdo->prepare($sql);
				$query->execute(array($data));
				$result = $query->fetch(PDO::FETCH_BOTH);
		} catch (PDOException $e) {
				$result = $e->getMessage();
		}
		return $result;
			 }
	function readAllEm(){
		try {
			$sql="SELECT * FROM usuario WHERE id_rol = 3";
			$query=$this->pdo->prepare($sql);
			$query->execute();
			$result= $query->fetchALL(PDO::FETCH_BOTH);
		} catch (PDOException $e) {
			$result = $e->getMessage();
		}
		return $result;
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
				 $sql = "call modificarUsu(?,?,?,?,?)";
				 $query = $this->pdo->prepare($sql);
				 $query->execute(array($data[0],$data[1],$data[2],$data[3],$data[4]));
				 $msn = "modificado con exito";
	      }catch(PDOException $e){
	        $msn = $e->getMessage();
			 }
		 }
			 // Crear Supermercado
			  function createSuper($data){
				 try{
					 $sql="call crear_sup(?,?,?,?,?,?)";
					 $query=$this->pdo->prepare($sql);
					 $query->execute(array($data[0], $data[1], $data[2], $data[3], $data[4] ) ) ;
					 $msn ="Guardado Exitoxamente";
				 } catch(PDOException $e){
					 $msn = $e->getMessage();
				 }

				 return $result;
			 }
			 // Seleccionar todos los supermercados
			  function readAllSup(){
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
			  function readBySup($data){
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
			  function updateSup($data){
				 try{
					 $sql="call modificarSup(?,?,?,?,?)";
					 $query=$this->pdo->prepare($sql);
					 $query->execute(array($data[0], $data[1], $data[2], $data[3], $data[4]));
					 $msn = "Modificado Exitosamente";
				 } catch (PDOException $e){
					 $msn = $e->getMessage();
				 }
				 return $msn;
			 }
			 // Eliminar Supermercados
			  function deleteSup($data){
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
			  function readTodos(){
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

			// Proveedores
			// ---------------------
			 function createProvee($data){
				try{
					$sql=" INSERT INTO proveedores (nom_prov,dir_prov,tel_prov) VALUES (?,?,?)";
					$query=$this->pdo->prepare($sql);
					$query->execute(array($data[0],$data[1],$data[2])) ;
					$msn ="Guardado Exitoxamente";
				} catch(PDOException $e){
					$msn = $e->getMessage();
				}
					return $msn;
			}
			// Selecionar Todos los Proveedores
			  function readAllProv(){
				 try{
					 $sql="SELECT * FROM proveedores";
					 $query=$this->pdo->prepare($sql);
					 $query->execute();
					 $result = $query->fetchALL(PDO::FETCH_BOTH);
				 } catch (PDOException $e){
					 $result = $e->getMessage();
				 }
				 return $result;
			 }
			 // Selecionar por Proveedor
			  function readByProv(){
				 try{
					 $sql="SELECT * FROM proveedores WHERE id_prov = ?";
					 $query=$this->pdo->prepare($sql);
					 $query->execute();
					 $result = $query->fetch(PDO::FETCH_BOTH);
				 } catch (PDOException $e){
					 $result = $e->getMessage();
				 }
				 return $result;
			 }
			 // Actualizar Proveedor
			  function updateProv(){
				 try{
					 $sql="UPDATE proveedores SET nom_prov = ? , dir_prov = ?, tel_prov = ? ";
					 $query=$this->pdo->prepare($sql);
					 $query->execute(array($data[0], $data[1], $data[2]));
					 $msn= "Modificado Exitosamente";
				 } catch (PDOException $e){
					 $msn= $e->getMessage();
				 }
				 return $msn;
			 }
			 // actualizar usuario
			  function updateUser($data){
				 try{
					 $sql="UPDATE usuario SET nom_usu = ? , ape_usu = ?, fec_nac_usu = ?, tel_usu = ? WHERE id_usu = ?";
					 $query=$this->pdo->prepare($sql);
					 $query->execute(array($data[0], $data[1], $data[2], $data[3], $data[4]));
					 $msn= true;
				 } catch (PDOException $e){
					 $msn= $e->getMessage();
				 }
				 return $msn;
			 }
			  function updateUserContra($data){
				 try{
					 $sql="UPDATE acceso SET contra = ?  WHERE id_usu = ?";
					 $query=$this->pdo->prepare($sql);
					 $query->execute(array($data[0], $data[1]));
					 $msn= true;
				 } catch (PDOException $e){
					 $msn= $e->getMessage();
				 }
				 return $msn;
			 }
			 // Eliminar Proveedor
			  function deleteProv($data){
				 try{
					 $sql= "DELETE FROM proveedores WHERE id_prov = ?";
					 $query=$this->pdo->prepare($sql);
					 $query->execute(array($data));
					 $msn="Eliminado Exitosamente";
				 }catch (PDOException $e){
					 $msn= $e->getMessage();
				 }
				 return $msn;
			 }


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
			}

			// categorias
			// -------------------
			// Categorias supermercados
			function crearCategoria($data){
		      try{
		        $sql = "call crear_categoria(?)";
		        $query = $this->pdo->prepare($sql);
		        $query->execute(array($data[0]));
		        $msn = "registro con exito";
		      }catch (PDOException $e) {
		       $msn = $e->getMessage();
		      }
		      return $msn;
		    }
			//llama los tipos de categorias en la bd
			function readCategory(){
				try{
					$sql="SELECT id_tip_pro,nom_tip_pro FROM tipo_producto ";
					$query=$this->pdo->prepare($sql);
					$query->execute();
					$result = $query->fetchALL(PDO::FETCH_BOTH);
				} catch (PDOException $e) {
					$result = $e->getMessage();
				}
				return $result;
			}
			// Actualizar Categorias
			// Eliminar Categorias
			function deletecate($data){
				try{
					$sql="DELETE FROM tipo_producto WHERE id_tip_pro = ?";
					$query=$this->pdo->prepare($sql);
					$query->execute(array($data));
					$msn= "Eliminado Exitoxamente";
				} catch (PDOException $e){
					$msn = $e->getMessage();
				}
				return $msn;
			}


			// Ciudades
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
