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
	 function maLass(){
		 $result = $this->userModel->maLass()[0];
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
		// require_once "views/modules/registrarse.php"
		require_once "views/include/scope.footer.php";
	}

	function master(){
		require_once "views/include/scope.header.php";
		require_once "views/modules/inicio.php";
		require_once "views/include/scope.footer.php";
	}

	// function registrosuper(){
	// 	require_once "views/include/scope.header.php";
	// 	require_once "views/modules/registrosuper.php";
	// 	require_once "views/include/scope.footer.php";
	// }

	function explora(){
		require_once "views/include/manual/header.php";
		require_once "views/include/manual/manual.php";
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
			require_once "views/modules/superAdmin/superAdmin.php";
			require_once "views/modules/superAdmin/footer.php";
		}else {
			die();
			header ('Location: inicio');
		}
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
