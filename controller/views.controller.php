<?php
require_once("model/user.model.php");
class viewsController{
		private $userModel;
	public function __CONSTRUCT(){
		$this->userModel = new UserModel();
	}
	function main(){
		require_once "views/include/scope.header.php";
		// require_once "views/modules/registrarse.php";
		require_once "views/include/scope.footer.php";
	}

	function master(){
		require_once "views/include/scope.header.php";
		require_once "views/modules/inicio.php";
		require_once "views/include/scope.footer.php";
	}
	function super(){
		require_once "views/include/scope.header.php";
		require_once "views/include/scope.prueba.php";
		require_once "views/include/scope.footer.php";
	}
	function registrosuper(){
		require_once "views/include/scope.header.php";
		require_once "views/modules/registrosuper.php";
		require_once "views/include/scope.footer.php";
	}
	function inicioCliente(){
		if (isset($_SESSION['USER']['rol']) && $_SESSION['USER']['rol']==1) {
					echo "vista de cliente ";

		}else{
			header("Location: inicio");
		}
	}
	function inicioAdmin(){
			require_once "views/modules/admin/header-admin.php";
			require_once "views/modules/admin/registrar_producto.php";
			require_once "views/modules/admin/footer_admin.php";
	}

	function admin(){
		require_once "views/modules/admin/header-admin.php";
		require_once "views/modules/admin/footer_admin.php";
	}


	// function ingreso(){
	// 	if (isset($_SESSION['user'])) {
	// 		echo $_SESSION['user'];
  //
	// 	}else{
	// 		header('Location: inicio');
	// 	}
	// }
}
?>
