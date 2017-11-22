<?php
require_once "model/user.model.php";
class UserController{
	private $users;

    public function __CONSTRUCT(){
        $this->users = new UserModel();
    }

	function crear(){
		$data=$_POST['data'];
		$data[11]=password_hash($data[11], PASSWORD_DEFAULT);
		$token = md5($data[0].$data[1]);
		$result = $this->users->createUser($data,$token);
		echo $result;

$response = $_POST['g-recaptcha-response'];
$secret_key = '6LdgiTkUAAAAAEc2e9YlcEiyD8nSWZu1YXc3SDWP';
$ip_user = $_SERVER['REMOTE_ADDR'];
$validation = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret_key&response=$response&remoteip=$ip_user");
$result = json_decode($validation);

	}

}
?>
