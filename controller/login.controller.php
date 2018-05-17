<?php
require_once "model/login.model.php";
class LoginController{
	private $users;

    public function __CONSTRUCT(){
        $this->users = new LoginModel();
    	}

		//valida que el correo exista
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

			$result_idsup = $this->users->supermercado($result['id_rol']);
			$_SESSION['SUPERMERCADO']['supermarket']=$result_idsup['id_sup'];

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
						echo '<script languaje>alert("contraseña incorrecta")</script>';
						echo "<script>window.location.href='inicio'</script>";
					}
			}else{
				echo '<h1>el usuario no existe</h1>';
			}
		}
		function enviar(){

			if(mail($_POST['mail_txt'],'Recuperar tú Contraseña','En el siguiente enlace podrá recuperar su contraseña http://localhost/homemarket/recupera')){
				// header("location:inicio");
				echo "<script>
                alert('enviado');
                window.location= 'inicio'
    </script>";
		echo "enviado";
			}else{
				echo "ocurrio un error";
				
				}
			}
			function recuperar(){
				require_once "views/include/recuperar.php";
			}
}

?>
