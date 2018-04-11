<?php
require_once "model/login.model.php";
class LoginController{
	private $users;


    public function __CONSTRUCT(){
        $this->users = new LoginModel();
    }

		function validar_usuario(){
			$result = $this->users->user($_POST['email']);
		if ($result!=array()){
			$result = array("true","");
		}else{
			$result = array("false","El Usuario no existe");
		}

	echo json_encode($result);
}

  // function validar_password(){
	// 	$result = $this->pass->contra($_POST['doc_usu']);
	// 	if ($ressult!=array()) {
	// 		$result = array("true","");
	// 	}else{
	// 		$result = array("false","contraseña invalida");
	// 	}
	// 	echo json_encode($result);
	// }

	function validar(){
		$correo = $_POST['email'];
		$pass = $_POST['contra'];
		$result = $this->users->user($_POST['email']);

		if ($result!=array()){
			$contra = $this->users->contra($result['id_usu']);
			 // print_r($result);
			if (password_verify($pass, $result['contra'])) {
				$_SESSION['USER']['rol']=$result['id_rol'];
				$_SESSION['USER']['ID']=$result['id_usu'];
				$_SESSION['USER']['NAME']=$result['nom_usu'];
				    // echo "<h1>¡ingreso corretamente</h1>" ;
						// die($_SESSION['USER']['rol']);
						if ($_SESSION['USER']['rol']==1) {
								$_SESSION['USER']['CLIENT'] = true;
								header ('Location: inicioCliente');
						}elseif ($_SESSION['USER']['rol']==2) {
							$_SESSION['USER']['CLIENT'] = true;
							header ('Location: inicioAdmin');
						}elseif (($_SESSION['USER']['rol']==3)) {
							$_SESSION['USER']['CLIENT'] = true;
							header ('Location: InicioWorker');
						}
						else {
							header ('Location:InicioSuperAdmin');
						}
				} else {
					// echo '<script language="javascript">alert("<div class="exit">crontraseña incorrecta</div>");</script>';
					echo '<script languaje>alert("contraseña incorrecta")</script>';
					// echo "Contraseña incorrecta !intente nuevamente¡";
					echo "<script>window.location.href='inicio'</script>";
					// $result = array("false","contraseña incorrecta");

				}
		}else{
			echo '<h1>el usuario no existe</h1>';
		}
	}
}
#editar de USUARIO
#..................................
// public function editarUsuarioController(){
//
// 	$datosController = $_GET["id"];
// 	$respuesta = datos::editarUsuarioModel($datosController, "usuario");
// 	echo '<input type="hidden" value="'.$respuesta["id"].'">
// 				<input type="text" value="'.$respuesta["usuario"].'" name="usuarioEditar" required>
// 				<input type="text" value="'.$respuesta["password"].'" name="passwordEditar" required>
// 				<input type="email" value="'.$respuesta["email"].'" name="emailEditar" required>
				// <input type="submit" value="Actualizar">' ;
// }
#Actualizar de USUARIO
#..................................
// public function ActualizarUsuarioController(){
// 			if(isset($_POST["usuarioEditar"])){
// 				if (preg_match('/^[a-zA-Z0-9]*$/',$_POST["usuarioEditar"])&&
// 						preg_match('/^[a-zA-Z0-9]*$/',$_POST["passwordEditar"])&&
// 						preg_match('/^[^0-9][a-zA-Z0-9]+([.][a-zA-Z0-9]+)*[@][a-zA-Z0-9]+([.][a-zA-Z0-9]+)*[.][a-zA-Z]{2,4}$/',$_POST["emailEditar"])){
// 							$encriptar = crypt($_POST["passwordIngreso"],'$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
// 				$datosController = array($_POST ["usuarioEditar"],
// 																 $encriptar,
// 																 $_POST ["emailEditar"]);
// 				$respuesta = datos::actualizarUsuarioModel($datosController, "usuario");
// 				if ($respuesta == "success") {
// 					$_SESSION["message"]="Modificado";
// 					header ("location:usuario");
//
// 				}
// 				else {
// 					echo "error";
// 				}
// 			}
// 		}
// }

?>
