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

	}

}
?>
