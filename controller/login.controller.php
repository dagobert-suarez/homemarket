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

	function validar(){
		$correo = $_POST['email'];
		$pass = $_POST['contra'];
		$result = $this->users->user($_POST['email']);

		if ($result!=array()){
			$contra = $this->users->contra($result['doc_usu']);
			 // print_r($result);
			if (password_verify($pass, $result['contra'])) {
				$_SESSION['USER']['rol']=$result['id_rol'];
				$_SESSION['USER']['ID']=$result['doc_usu'];
				    // echo "<h1>¡ingreso corretamente</h1>" ;
						// die($_SESSION['USER']['rol']);
						if ($_SESSION['USER']['rol']==1) {
								$_SESSION['USER']['CLIENT'] = true;
								header ('Location: cliente');
						}else {
							header ('Location:admin');
						}
				} else {
				    echo '<h1>La contraseña es incorrecta</h1>.';
				}
		}else{
			echo '<h1>el usuario no existe/h1>';
		}
	}
}
?>
