<?php
class viewsController{
	function main(){
		require_once "views/include/scope.header.php";
		require_once "views/modules/registrarse.php";
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

	function ingreso(){
		if (isset($_SESSION['user'])) {
			echo $_SESSION['user'];

		}else{
			header('Location: inicio');
		}
	}
}
?>
