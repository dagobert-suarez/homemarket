<?php
require_once "model/user.model.php";
class UserController{
	private $users;

    public function __CONSTRUCT(){
        $this->users = new UserModel();
    }
//todo estos, son las validaciones en los campos de registrarse en la landin
	function crear(){
		$data=$_POST['data'];
		$response = $_POST['cap'];
		$secret_key = '6LdgiTkUAAAAAEc2e9YlcEiyD8nSWZu1YXc3SDWP';
		$ip_user = $_SERVER['REMOTE_ADDR'];
		$validation = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret_key&response=$response&remoteip=$ip_user");
		$result = json_decode($validation);
		if ($result->success==true) {
			$i = 0;
			foreach ($data as $row) {
				$result = $this->validarEspacio($data[$i]);
				if ($result==false) {
					echo json_encode('Llene todos los campos');
					return;
				}
				$i++;
			}

			$result = $this->validarEmail($data[6]);
			if ($result==false) {
				echo json_encode($result);
				return;
			}

			$result = $this->validarPassword($data[8]);
			if (!$result==false) {
				echo json_encode('contraseña no valida');
				return;
			}
			//antes de esta joda
			$data[8]=password_hash($data[8], PASSWORD_DEFAULT);
			$token = md5($data[0].$data[1]);

			$result = $this->users->createUser($data,$token);
			echo json_encode($result);
		}else{
			echo json_encode('falta hacer el recapchat');//hacer recapchat
		}
	}
//los ajustes del cliente
	function ajustes(){
		require_once "views/modules/cliente/header.php";
		require_once "views/modules/cliente/updateCliente.php";
		require_once "views/modules/cliente/footer.php";
	}

		function validarEspacio($data){
		if($data==''){
			return false;
		}else{
			return true;
		}
	}

	function validarEmail($data){
	if(filter_var($data, FILTER_VALIDATE_EMAIL)===false){
		return false;
	}else{
		return true;
	}
}

	//
	// function caracterMax($data){
	// 	if(strelen($data[0])>50){
	// 		echo "excedio el maximo de caracteres ";
	// 	}else{
	// 		return false;
	// 	}
	//
	// 	if(strelen($data[1])>50){
	// 		echo "excedio el maximo de caracteres ";
	// 	}else{
	// 		return false;
	// 	}
	//
	// 	if(strelen($data[4])>7){
	// 		echo "excedio el maximo de caracteres ";
	// 	}else{
	// 		return false;
	// 	}
	//
	// 	if(strelen($data[5])>50){
	// 		echo "excedio el maximo de caracteres ";
	// 	}else{
	// 		return false;
	// 	}
	// }

//solo la parte de validar contraseña
	function validarPassword($data){
		if (strlen($data)<8) {
			return "la contraseña debe tener minimo 8 caracteres";
		}else{
			return false;
		}
		if(!preg_match('`[a-z]`', $data[8])){
			return "debe tener una letra minuscula";
		}else{
			return false;
		}

		if(!preg_match('`[A-Z]`',$data[8])){
			return "debe tener una letra mayuscula";
		}else{
			return false;
		}

		if(!preg_match('`[0-9]`', $data[8])){
			return "debe tener un numero";
		}else{
			return false;
		}
//esto es de otra cosa
		/*if(preg_match(), subject)){

		}else{

		}*/
	}

}
?>
