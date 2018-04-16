<?php
require_once("model/user.model.php");
class viewsController{
		private $userModel;
		public function __CONSTRUCT(){
		$this->userModel = new UserModel();
	}

	function  readTodos(){
		$result = $this->userModel->readTodos()[0];
		return $result	;
	}
	 function prove(){
		 $result = $this->userModel->prove()[0];
		 return $result;
	 }
	 function readBy($data){
		 $result = $this->userModel->readBy($data);
		 return $result;
	 }
	 function update(){
		 $data = $_POST['data'];
		 $data[]=$_SESSION['USER']['ID'];
		 $result = $this->userModel->update($data);
		 header("Location: settings-Super");
	 }

	//de la pagina principal
	function main(){
		require_once "views/include/scope.header-inicio.php";
		require_once "views/include/scope.footer.php";
	}
	// manual de usuario
	function explora(){
		require_once "views/include/manual/header.php";
		require_once "views/include/manual/modules/info.php";
		require_once "views/include/manual/footer.php";
	}
	function lorem(){
		require_once "views/include/manual/header.php";
		require_once "views/include/manual/modules/lorem.php";
		require_once "views/include/manual/footer.php";
	}
	function modulo2(){
		require_once "views/include/manual/header.php";
		require_once "views/include/manual/modules/modulo2.php";
		require_once "views/include/manual/footer.php";
	}
	function modulo3(){
		require_once "views/include/manual/header.php";
		require_once "views/include/manual/modules/modulo3.php";
		require_once "views/include/manual/footer.php";
	}
	function modulo4(){
		require_once "views/include/manual/header.php";
		require_once "views/include/manual/modules/modulo4.php";
		require_once "views/include/manual/footer.php";
	}
	function modulo5(){
		require_once "views/include/manual/header.php";
		require_once "views/include/manual/modules/modulo5.php";
		require_once "views/include/manual/footer.php";
	}
	function modulo6(){
		require_once "views/include/manual/header.php";
		require_once "views/include/manual/modules/modulo6.php";
		require_once "views/include/manual/footer.php";
	}

	//las sessiones del administrador del supermercado
	function inicioAdmin(){
		if (isset($_SESSION['USER']['rol']) && $_SESSION['USER']['rol']==2) {
			require_once "views/modules/admin/header-admin.php";
			require_once "views/modules/admin/Dashboard.php";
			require_once "views/modules/admin/footer_admin.php";
		}else {
			die();
			header("Location: inicio");
		}
	}

	function admin(){
		require_once "views/modules/admin/header-admin.php";
		require_once "views/modules/admin/footer_admin.php";
	}

	function Workers(){
		require_once "views/modules/admin/header-admin.php";
		require_once "views/modules/admin/Empleados.php";
		require_once "views/modules/admin/footer_admin.php";
	}

	function mySuper(){
		require_once "views/modules/admin/header-admin.php";
		require_once "views/modules/admin/mySuper.php";
		require_once "views/modules/admin/footer_admin.php";
	}
	function proveedores(){
		require_once "views/modules/admin/header-admin.php";
		require_once "views/modules/admin/proveedores.php";
		require_once "views/modules/admin/footer_admin.php";
	}	// Artuiculos
	 // -------------
		function articulos(){
		 require_once "views/modules/admin/header-admin.php";
		 require_once "views/modules/admin/articulos.php";
		 require_once "views/modules/admin/footer_admin.php";
	 }
	 // Información
 // -------------
	function informacion(){
	 require_once "views/modules/admin/header-admin.php";
	 require_once "views/modules/admin/informacion.php";
	 require_once "views/modules/admin/footer_admin.php";
 }
 // Notificaciones
 // --------------------------
 function notificaciones(){
	 require_once "views/modules/admin/header-admin.php";
	 require_once "views/modules/admin/notificaciones.php";
	 require_once "views/modules/admin/footer_admin.php";
 }
	 //los ajustes del Supermercado
	 // ----------------------- //
		function settingsSuper(){
			require_once "views/modules/admin/header-admin.php";
			require_once "views/modules/admin/updateADS.php";
			require_once "views/modules/admin/footer_admin.php";
		}
		// Supermercados
		// -----------------
		public function newSuper(){
			$data = $_POST['data'];

			if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0){
				  $allowed = array("jpg"=>"image/jpg", "jpeg"=>"image/jpeg","png"=>"image/png", "gif"=>"image/gif");
				  $filetype = $_FILES["file"]["type"];
				  $filesize = $_FILES["file"]["size"];
				  $extention = pathinfo($_FILES["file"]["name"]);
		          $extention = ".".$extention["extension"];

				  $var_rand = rand(10000,999999) * rand(10000,999999);
				  $tmp_name = md5($var_rand.$_FILES["file"]["name"]);

				  $filename = $tmp_name.$extention;

				  $extention = pathinfo($filename, PATHINFO_EXTENSION);

				  if (!array_key_exists($extention, $allowed)) {
					die("Error: favor seleccione un formato valido (.jpg, .png, .gif, jpeg)");
				  }
				  $maxsize= 2 * 1024 * 1024;
				  if($filesize > $maxsize){
					die("Error: el tamaño del archivo debe ser menor o igual a 2MB");
				  }
				  //mine type
		          if (in_array($filetype, $allowed)) {
		            if (file_exists("views/assets/image/super/".$filename)) {
		            die("lo sentimos ese archivo ya existe");
		          }else{
					  move_uploaded_file($_FILES["file"]["tmp_name"],"views/assets/image/super/".$filename);
					  $data[4] = $filename;
					}
				}else{
				  die("Error: no se puede reconocer la imagen intente nuevamente");
				}

			}else {
			  die("Error ".$_FILES["file"]["error"]);
			}

			$result = $this->userModel->createSuper($data);
			echo '<script language="javascript">alert("creado con exito");</script>';
			echo "<script>window.location.href='mi-supermercado'</script>";
	        // header("Location: mi-supermercado");

			}
			// Seleccionar Todos los Supermercados
			public function readAllSup(){
				$result = $this->userModel->readAllSup();
				return $result;
			}
			 // Seleccionar por Supermercados
			 public function readBySup(){
				 $resut = $this->userModel->readBySup();
				 return $resut;
			 }
			 // Actualizar Supermercado
			 public function updateSup(){
				 	$data = $_POST['data'];
					$result = $this->userModel->updateSup($data);
					header("Location: mi-supermercado");
			 }
			 // Eliminar Supermercado
			 public function deleteSup(){
				 $data = $_GET['data'];
				 $result = $this->userModel->deleteSup($data);
				 header("Location: mi-supermercado") ;
			 }

			 // Proveedores
			 // --------------------------
			 // Crear Proveedor
			 public function newProvee(){
	 			$data = $_POST['data'];
	 			$result = $this->userModel->createProvee($data);
	 	    	header("Location: Proveedores");
	 			}
				// selecionar todos proveedores
				public function readAllProv(){
					$result= $this->userModel->readAllProv();
					return $result;
				}
				// Selecionar por provvedor
				public function readByProv(){
					$result= $this->userModel->readByProv();
					return $result;
				}
				// Actualizar Proveedor
				public function updateProv(){
					$data= $_POST['data'];
					$result=$this->userModel->updateProv($data);
					return $result;
				}
				// Eliminar Proveedor
				public function deleteProv(){
					$data = $_GET['data'];
					$result= $this->userModel->deleteProv($data);
					header("Location: Proveedores");
				}
				// Categorias
				//  Crear categorias  desde Supermercado
				function crearCategoria(){
				  $data = $_POST['data'];
				  $result = $this->userModel->crearCategoria($data);
					header("Location: mi-supermercado");
				}
				function readCategory(){
					$result = $this->userModel->readCategory();
					return  $result;
				}
				public function readByCategory($data){
					$result = $this->userModel->readByCat($data);
					return $result;
				}
				public function updateCat(){
					$data = $_POST['data'];
					$result = $this->userModel->updateCategory($data);
					header("Location:mi-supermercado");
				}
				public function deletecate(){
					$data = $_GET['data'];
					$resut = $this->userModel->deletecate($data);
					header("Location: mi-supermercado");
				}






//las sessiones del empeado - inicio
// --------------------- //
	function InicioWorker(){
		if (isset($_SESSION['USER']['rol']) && $_SESSION['USER']['rol']==3) {
			require_once "views/modules/worker/header.php";
			require_once "views/modules/worker/mainWork.php";
			require_once "views/modules/worker/footer.php";
		}else {
			die();
			header ('Location: inicio');
		}
	}
	function selectCates(){
		$result = $this->userModel->selectCates()[0];
		return $result;
	}
	function selectProdu(){
		$result = $this->userModel->selectProdu()[0];
		return $result;
	}


	// Actualizar los datos del Empleados
	function updateEm(){
		$data = $_POST['data'];
		$data[]=$_SESSION['USER']['ID'];
		$result = $this->userModel->update($data);
		header("Location: settings-worker");
	}

	//los ajustes del empleado
	// ------------------------------
	 function settingsworker(){
		 require_once "views/modules/worker/header.php";
		 require_once "views/modules/worker/updateWorker.php";
		 require_once "views/modules/worker/footer.php";
	 }
	 // Retrasos
	 // ---------
	 function retrasos(){
		 require_once "views/modules/worker/header.php";
		 require_once "views/modules/worker/retrasos.php";
		 require_once "views/modules/worker/footer.php";
	 }
	 // Pedidos
	 // ---------
	 function pedidos(){
		 require_once "views/modules/worker/header.php";
		 require_once "views/modules/worker/pedidos.php";
		 require_once "views/modules/worker/footer.php";
	 }
	 // Provedores
	 // ---------
	 function proveedoresEm(){
		 require_once "views/modules/worker/header.php";
		 require_once "views/modules/worker/proveedores.php";
		 require_once "views/modules/worker/footer.php";
	 }

//todo sobre el superadmin
// ---------------------------//
	function InicioSuperAdmin(){
		if (isset($_SESSION['USER']['rol']) && $_SESSION['USER']['rol']==4) {
			require_once "views/modules/superAdmin/header.php";
			// require_once "views/modules/superAdmin/superAdmin.php";
			require_once "views/modules/superAdmin/footer.php";
		}
		// else {
		// 	die();
		// 	header ('Location: inicio');
		// }
	}

	function mainSuper(){
		require_once "views/modules/superAdmin/header.php";
		require_once "views/modules/superAdmin/superAdmin.php";
		require_once "views/modules/superAdmin/footer.php";
	}



	// function ingreso(){
	// 	if (isset($_SESSION['user'])) {
	// 		echo $_SESSION['user'];
  //
	// 	}else{
	// 		header('Location: inicio');
	// 	}
	// require_once "views/modules/admin/createProduct.php";
	// }
}
?>
