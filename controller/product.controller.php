<?php
//envio de datos de productos
require_once("model/product.model.php");

class ProductController{
  private $product;
  // vista de los supermercados
  // Cliente
  //inicio de session del cliente donde muestra los supermercados
  function Supermercados(){
      require_once "views/modules/cliente/header.php";
      require_once "views/modules/cliente/menuTopC.php";
      require_once "views/modules/cliente/navigator.php";
      require_once "views/modules/cliente/viewSuper.php";
      require_once "views/modules/cliente/footer.php";
  }
  //inicio de session del cliente donde muestra los productos
  function Productos(){
    require_once "views/modules/cliente/header.php";
    require_once "views/modules/cliente/navigator.php";
    require_once "views/modules/cliente/viewProduct.php";
    require_once "views/modules/cliente/footer.php";
  }

  function mySuper(){
      require_once "views/modules/admin/header-admin.php";
      require_once "views/modules/admin/mySuper.php";
      require_once "views/modules/admin/footer_admin.php";
  }
  // Empleado
  // -------------
  // Crear Producto
  function crear(){
    require_once "views/modules/worker/header.php";
    require_once "views/modules/worker/createProduct.php";
    require_once "views/modules/worker/footer.php";

  }
  // Ver los producto empleado
  function Produtosviewsworker(){
    require_once "views/modules/worker/header.php";
    require_once "views/modules/worker/productosviews.php";
    require_once "views/modules/worker/footer.php";
  }
  // Actualizar productos
  function updateProductos(){
      require_once "views/modules/worker/header.php";
      require_once "views/modules/worker/updateproduct.php";
      require_once "views/modules/worker/footer.php";
  }
  // Crear categoria
  function crearCategoria(){
    require_once "views/modules/worker/header.php";
    require_once "views/modules/worker/createCategory.php";
    require_once "views/modules/worker/footer.php";
  }

    public function __CONSTRUCT(){
        $this->product = new ProductModel();
    }

    function crearProduct(){
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
                die("Error: favor seleccione un formato valido (.jpg, .png, .gif, .jpeg)");
              }
              $maxsize= 2 * 1024 * 1024;
              if($filesize > $maxsize){
                die("Error: el tamaño del archivo debe ser menor o igual a 2MB");
              }
              //mine type
              if (in_array($filetype, $allowed)) {
                if (file_exists("views/assets/image/productos/".$filename)) {
                die("lo sentimos ese archivo ya existe");
              }else{
                  move_uploaded_file($_FILES["file"]["tmp_name"],"views/assets/image/productos/".$filename);
                  $data[7] = $filename;
                  // $data[4] = $filename;
                }
            }else{
              die("Error: no se puede reconocer la imagen intente nuevamente");
            }

        }else {
          // die("Error ".$_FILES["file"]["error"]);
        }
         $result = $this->product->createProduct($data);
         echo '<script language="javascript">alert("creado con exito");</script>';
         echo "<script>window.location.href='nuevo-producto'</script>";
      }
      // ------------------- //

      function viewProducts(){
          $result = $this->product->readProducts();
          return  $result;
      }
      public function readByIdproc($data){
          $result=$this->product->readByproc($data);
          return $result;
          // $id = $_GET["data"];
          // $result = $this->product->readByproc($id);
          // return $result;
      }

      public function updateProc(){
          $data = $_POST['data'];
          $result = $this->product->updateProc($data);
          // print_r($data);

          echo '<script language="javascript">alert("Modificado con exito");</script>';
          echo "<script>window.location.href='Productos-empleado'</script>";
          header("Location: Productos-empleado");
      }
      // crud productos

      public function deleteProduct(){
          $data = $_GET['data'];
          $result = $this->product->deletePro($data);
          echo '<script language="javascript">alert("Deseas eliminar este producto ?");</script>';
          echo "<script>window.location.href='Productos-empleado'</script>";
      }

      //visualiza los productos en la pagina de cliente

      // Categorias
      //envia el registro de categoria
      function createCategory(){
        $data = $_POST['data'];
        $result = $this->product->createCategory($data);
        echo '<script language="javascript">alert("<div class="exit">Creada con exito</div>");</script>';
        echo "<script>window.location.href='nueva-categoria'</script>";

      }
          // crud categorias
          //visualiza las  categorias en la pagina del empleado
          function readCategory(){
              $result = $this->product->readCategory();
              return  $result;
          }
          public function readByCategory($data){
              $result = $this->product->readByCat($data);
              return $result;
          }
          public function updateCat(){
              $data = $_POST['data'];
              $result = $this->product->updateCategory($data);
              header("Location:nueva-categoria");
          }

          // supermercados
           // Seleccionar por Supermercados
          function readBySup(){
               $result=$this->product->readBySup();
               return $result;
           }
           // Seleccionar Todos los Supermercados
           function readAllSup(){
               $result = $this->product->readAllSup();
               return $result;
           }
}
?>
