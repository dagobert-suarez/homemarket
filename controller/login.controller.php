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
		$result = $this->users->user($_POST['email']);
		if ($result!=array()){
			$contra = $this->users->contra($result['doc_usu']);
			if (password_verify($_POST['contra'], $contra['contra'])) {
				$_SESSION['user']=$result['nom_usu'];
				    // echo "<h1>¡ingreso corretamente</h1>" ;
				    header('Location:cliente');
				} else {
				    echo '<h1>La contraseña no es válida</h1>.';
				}
		}else{
			echo '<h1>el usuario no existe por culpa de dago</h1>';
		}
	}
}
?>
