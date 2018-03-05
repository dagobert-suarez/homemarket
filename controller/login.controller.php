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
					echo "<script>window.location.href='inicio'</script>";
				}
		}else{
			echo '<h1>el usuario no existe</h1>';
		}
	}
}
?>
