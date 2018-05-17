<?php
require_once("model/user.model.php");
class supermercadoController{
  private $userModel;
  public function __CONSTRUCT(){
    $this->userModel = new UserModel();
  }
  public function newSuper(){
    $data = $_POST['data'];
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0){
      $allowed = array("jpg"=>"image/jpg", "jpeg"=>"image/jpeg","png"=>"image/png", "gif"=>"image/gif");
      $filetype = $_FILES["file"]["type"];
      $filesize = $_FILES["file"]["size"];
      $extention = pathinfo($_FILES["file"]["name"]);
      $extention = ".".$extention["extension"];
      $var_rand = rand(10000,999999) * rand(10000,999999);
      $tmp_name = md5($var_rand.$_FILES["file"]["name"]);
      $filename = $tmp_name.$extention;
      $extention = pathinfo($filename, PATHINFO_EXTENSION);

      if (!array_key_exists($extention, $allowed)) {
        die("Error: favor seleccione un formato valido (.jpg, .png, .gif, jpeg)");
      }
      $maxsize= 2 * 1024 * 1024;
      if($filesize > $maxsize){
        die("Error: el tamaño del archivo debe ser menor o igual a 2MB");
      }
        //mine type
      if (in_array($filetype, $allowed)) {
        if (file_exists("views/assets/image/super/".$filename)) {
          die("lo sentimos ese archivo ya existe");
        }else{
          move_uploaded_file($_FILES["file"]["tmp_name"],"views/assets/image/super/".$filename);
          $data[4] = $filename;
        }
      }else{
        die("Error: no se puede reconocer la imagen intente nuevamente");
      }

    }else {
      die("Error ".$_FILES["file"]["error"]);
    }

    $result = $this->userModel->createSuper($data);
    echo '<script language="javascript">alert("creado con exito");</script>';
    echo "<script>window.location.href='mi-supermercado'</script>";
        // header("Location: mi-supermercado");
  } 
}
?>
