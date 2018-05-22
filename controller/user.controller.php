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
				echo json_encode("Email no valido");
				return;
			}
			$result = $this-> validarTelefono($data[4]);
			if ($result==false){
				echo json_encode('debe ingresar un telefono valido');
				return;
			}
			$result = $this-> validarNombre($data[0]);
			if ($result==false) {
				echo json_encode('nombre invalido');
				return;
			}
			$result = $this-> validarCaracter($data[0]);
			if ($result==false) {
				echo json_encode('nombre no valido');
				return;
			}
			$result = $this-> validarApe($data[1]);
			if ($result==false) {
				echo json_encode('apellido no valido');
				return;
			}
			$result = $this-> validarCaracterApe($data[1]);
			if ($result==false) {
				echo json_encode('apellido no valido');
				return;
			}
			$result = $this->validarPassword($data[7]);
			if (!$result==false) {
				echo json_encode('contraseña no cumple con lo pedido');
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

	function readByIdEm($data){
		$result = $this->users->readByIdEmple($data);
		return $result;
	}

	//---------inicio de sesion del cliente-------//
	function readBy($data){
		$result = $this->userModel->readBy($data);
		return $result;
	}
	function readAllEmp(){
		$result = $this->userModel->readAllEm();
		return $result;
	}



	//  function inicioCliente(){
  //   if (isset($_SESSION['USER']['rol']) && $_SESSION['USER']['rol']==1) {
	// 		require_once "views/modules/cliente/header.php";
	// 		require_once "views/modules/cliente/menuTopC.php";
	// 		require_once "views/modules/cliente/navigator.php";
	// 		require_once "views/modules/cliente/viewSuper.php";
	// 		require_once "views/modules/cliente/footer.php";
	// 		// require_once "views/modules/cliente/maps.php";
  //     // require_once "views/modules/cliente/navigator.php";
  //   }else{
  //     header("Location: inicio");
  //   }
  // }

	//los ajustes del cliente
	function updatecli(){
		$data = $_POST['data'];
		$data[]=$_SESSION['USER']['ID'];
		$result = $this->userModel->update($data);
		header("Location: Ajustes");
	}

	function actualizarEmpleado(){
		require_once "views/modules/admin/header-admin.php";
		require_once "views/modules/admin/updateEm.php";
		require_once "views/modules/admin/footer_admin.php";
	}
	function ajustes(){
		require_once "views/modules/cliente/header.php";
		require_once "views/modules/cliente/updateCliente.php";
		require_once "views/modules/cliente/footer.php";
	}

	function validarTelefono($data){
		if (filter_var($data,FILTER_VALIDATE_INT)===false && strlen($data)<7 || strlen($data)>11) {
			return false;
		}else{
			return true;
		}
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

	// Validar Nombre
	function validarNombre($data){
		if(strlen($data)<3 || strlen($data)>20){
			return false;
		}else{
			return true;
		}
	}
	// Validar nombre
	function validarCaracter($data){
		$patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";
		if (!preg_match ($patron_texto,$data)) {
			return false;
		}else{
			return true;
		}
	}

	// validar apellido
	function validarApe($data){
		if(strlen($data)<=3 || strlen($data)>20){
			return false;
		}else{
			return true;
		}
	}
	// Validar contraseña
	function validarCaracterApe($data){
		$permitidos = "abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
		for ($i=0; $i <strlen($data); $i++) {
			if (strpos($permitidos,substr($data,$i,1))==false) {
				return false;
			}else{
				return true;
			}
		}
	}

	//solo la parte de validar contraseña
	function validarPassword($data){
		if (strlen($data)<8) {
			return "La contraseña debe tener minimo 8 caracteres";
		}else{
			return false;
		}
		if(!preg_match('`[a-z]`', $data[7])){
			return "Debe tener una letra minuscula";
		}else{
			return false;
		}
		if(!preg_match('`[A-Z]`',$data[7])){
			return "Debe tener una letra mayuscula";
		}else{
			return false;
		}
		if(!preg_match('`[0-9]`', $data[7])){
			return "Debe tener un numero";
		}else{
			return false;
		}
		//esto es de otra cosa
				/*if(preg_match(), subject)){

				}else{

				}*/
	}
	function readbyusu(){
		$res = $this->users->readByCod($_SESSION['USER']['ID']);
		return $res;
		}

	function updateClie(){
	  $data = $_POST['data'];
		$data[]=$_SESSION['USER']['ID'];
		foreach ($data as $row) {
			if($row==""){
				$_SESSION['message']="campos vacios";
				header("Location: Ajustes");
				return;
			}
		}
		$result = $this->users->updateUser($data);
			if ($result==true) {
				$_SESSION['message']="Modificacion exitosa";
				$_SESSION['USER']['NAME']=$data[0];
				header("Location: Ajustes");
			}else{
				$_SESSION['message']="Ocurrio un error";
				header("Location: Ajustes");
			}
	}
	function contra(){
		$dataUser = $this->users->readContraseña($_SESSION['USER']['ID']);
			  $data = $_POST['dataCon'];
				$data[]=$_SESSION['USER']['ID'];
				foreach ($data as $row) {
					if($row==""){
						$_SESSION['message']="campos vacios";
						header("Location: Ajustes");
						return;
					}
				}
					if (password_verify($data[0], $dataUser['contra'])) {
							if ($data[1]==$data[2]) {
								$result = $this->users->updateUserContra(array(password_hash($data[1], PASSWORD_DEFAULT),$_SESSION['USER']['ID']));
								$_SESSION['message']="Modificacion exitosa";
								header("Location: Ajustes");
							}else{
								$_SESSION['message']="Las contraseñas son diferentes";
								header("Location: Ajustes");
							}
					}else{
						$_SESSION['message']="Contraseña actual no  valida";
						header("Location: Ajustes");
					}
				// if ($result==true) {
				// }else{
				// 	$_SESSION['message']="Ocurrio un error";
				// 	header("Location: Ajustes");
				// }
	}
}
?>
