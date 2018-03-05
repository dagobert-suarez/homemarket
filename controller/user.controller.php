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
		// print_r($data);
		// die();
		// if ($data[0]=="") {
		// 	echo json_encode("Campo");
		// }
		// return;
		// 741569
			$i = 0;
			foreach ($data as $row) {
				$result = $this->validarEspacio($data[$i]);
				if ($result==false) {
					echo json_encode('Tienes que llenar todos los campos');
					return;
				}
				$i++;
			}

			$result = $this->validarEmail($data[5]);
			if ($result==false) {
				echo json_encode("correo escrito mal");
				return;
			}

			$result = $this->validarPassword($data[7]);
			if (!$result==false) {
				echo json_encode('al parecer la contraseña no es valida');
				return;
			}
			//antes de esta joda
			$data[7]=password_hash($data[7], PASSWORD_DEFAULT);
			$token = md5($data[0].$data[1]);

			$result = $this->users->createUser($data,$token);
			if ($result==true) {
				$dataUser = $this->users->readByCorreo($data[5]);
				$dataUser = $this->users->crearAcceso(array($token,$data[7],$dataUser['id_usu']));
				if ($dataUser==true) {
					echo json_encode(true);
				}else{
					echo json_encode("Vaya que mala suerte, intentelo de nuevo");
				}
			}
	}

	//---------inicio de sesion del cliente-------//
	// --------------------------------------------- //
    function inicioCliente(){
      if (isset($_SESSION['USER']['rol']) && $_SESSION['USER']['rol']==1) {
        require_once "views/modules/cliente/header.php";
        require_once "views/modules/cliente/navigator.php";
        // require_once "views/modules/cliente/maps.php";
        require_once "views/modules/cliente/footer.php";
      }else{
        header("Location: inicio");
      }
    }
	//los ajustes del cliente
	// ----------------------- //
	function ajustes(){
		require_once "views/modules/cliente/header.php";
		require_once "views/modules/cliente/updateCliente.php";
		require_once "views/modules/cliente/footer.php";
	}

	//los ajustes del empleado
	// ----------------------- //
	 function settingsworker(){
		 require_once "views/modules/worker/header.php";
		 require_once "views/modules/worker/ajustesEm.php";
		 require_once "views/modules/worker/footer.php";
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


//solo la parte de validar contraseña
	function validarPassword($data){
		if (strlen($data)<8) {
			return "la contraseña debe tener minimo 8 caracteres";
		}else{
			return false;
		}
		if(!preg_match('`[a-z]`', $data[7])){
			return "debe tener una letra minuscula";
		}else{
			return false;
		}

		if(!preg_match('`[A-Z]`',$data[7])){
			return "debe tener una letra mayuscula";
		}else{
			return false;
		}

		if(!preg_match('`[0-9]`', $data[7])){
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
