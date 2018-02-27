<?php
require_once("model/user.model.php");
class viewsController{
		private $userModel;
	public function __CONSTRUCT(){
		$this->userModel = new UserModel();
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

	//todo sobre admin
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

	function newWorker(){
		require_once "views/modules/admin/header-admin.php";
		require_once "views/modules/admin/createNewWorker.php";
		require_once "views/modules/admin/footer_admin.php";
	}

//todo sobre el empleado
	function InicioWorker(){
		if (isset($_SESSION['USER']['rol']) && $_SESSION['USER']['rol']==3) {
			require_once "views/modules/worker/header.php";
			// require_once "views/modules/worker/worker.php";
			require_once "views/modules/worker/footer.php";
		}else {
			die();
			header ('Location: inicio');
		}
	}

//todo sobre el superadmin
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
