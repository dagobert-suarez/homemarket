<?php
//envio de datos de productos
require_once("model/product.model.php");

class ProductController{
  private $product;

  //inicio de session del cliente donde muestra los productos
  function Productos(){
    require_once "views/modules/cliente/header.php";
    require_once "views/modules/cliente/navigator.php";
    require_once "views/modules/cliente/viewProduct.php";
    require_once "views/modules/cliente/footer.php";
  }
  function historial(){
    require_once "views/modules/cliente/header.php";
    require_once "views/modules/cliente/historial.php";
    require_once "views/modules/cliente/footer.php";
  }

  function mySuper(){
      require_once "views/modules/admin/header-admin.php";
      require_once "views/modules/admin/mySuper.php";
      require_once "views/modules/admin/footer_admin.php";
  }

  function carrito(){
    require_once "views/modules/cliente/header.php";
    require_once "views/modules/cliente/carrito.php";
    require_once "views/modules/cliente/footer.php";
  }
  // Empleado
  // Crear Producto
  function crear(){
    require_once "views/modules/worker/header.php";
    require_once "views/modules/worker/createProduct.php";
    require_once "views/modules/worker/footer.php";
  }
  // Ver los productos empleado
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

  function crearCategory(){
    require_once "views/modules/superAdmin/header.php";
    require_once "views/modules/SuperAdmin/crearCategoria.php";
    require_once "views/modules/superAdmin/footer.php";

  }

  // updateProve
  function updateProvee(){
    require_once "views/modules/worker/header.php";
    require_once "views/modules/worker/updateprovee.php";
    require_once "views/modules/worker/footer.php";
  }

  function detalleProduct(){
    $data = $_POST['data'];
    $result=$this->product->readIdPro($data);
    echo json_encode($result);
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
          die("Error ".$_FILES["file"]["error"]);
        }
         $result = $this->product->createProduct($data);
         echo '<script language="javascript">alert("creado con exito");</script>';
         echo "<script>window.location.href='nuevo-producto'</script>";
      }

      function BySupermercado(){
        require_once "views/modules/cliente/header.php";
        require_once "views/modules/cliente/PorSupermercado.php";
        require_once "views/modules/cliente/footer.php";
      }
      function readbyProduct(){
        $re = $this->product->readByCod($_SESSION['USER']['ID']);
        return $re;
        }
      function viewProducts(){
          $result = $this->product->readProducts();
          return $result;
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
        // $img = $_FILES['file'];
        // $data[]=$img['name'];
        // copy($img['tmp_name'],"views/assets/image/productos/".$img['name']);
        $result = $this->product->updateProduct($data);
        echo '<script language="javascript">alert("Modificado con exito");</script>';
        echo "<script>window.location.href='Productos-empleado'</script>";
    }
      // crud productos
      public function deleteProduct(){
          $data = $_GET['data'];
          $result = $this->product->deletePro($data);
          unlink("views/assets/image/productos/".$filename);
          echo '<script language="javascript">alert("Deseas eliminar este producto ?");</script>';
          echo "<script>window.location.href='Productos-empleado'</script>";
      }

      function readIdProduct($data){
           $result=$this->product->readIdPro($data);
           return $result;
       }


      // CRUD Categorias
      //envia el registro de categoria
      function createCategory(){
        $data = $_POST['data'];
        $result = $this->product->createCategory($data);
        echo '<script language="javascript">alert("<div class="exit">Creada con exito</div>");</script>';
        echo "<script>window.location.href='crear-categoria'</script>";

      }
          //visualiza las  categorias en la pagina del empleado
          function readCategory(){
              $result = $this->product->readCategory();
              return  $result;
          }
          public function readByCategory($data){
              $result = $this->product->readByCat($data);
              return $result;
          }
          public function readCategoryJson(){
              $result = $this->product->readByCat($_POST['data']);
              $_SESSION['update_category']=$result[0];
              echo json_encode($result);
          }
          public function updateCategory(){
              $result = $this->product->updateCategory(array($_POST['data'],$_SESSION['update_category']));
              echo json_encode($result);
          }
          public function updateCat(){
              $data = $_POST['data'];
              $result = $this->product->updateCategory($data);
              header("Location:nueva-categoria");
          }
          public function deleteCat(){
              $data = $_POST['data'];
              $result = $this->product->deleteCat($data);
            echo json_encode($result);
          }
          public function detallecat(){
            $data = $_POST['data'];
            $result= $this->product->readByCat($data);
            echo json_encode($result);
          }

          // supermercados
           // Seleccionar por Supermercados
          function readByIdSup($data){
               $result=$this->product->readBySup($data);
               return $result;
           }

           // Seleccionar Todos los Supermercados
           function readAllSup(){
               $result = $this->product->readAllSup();
               return $result;
           }
           // ProveedoresEm
    			 // Crear Proveedor
    			 public function createProvee(){
    	 			$data = $_POST['data'];
    	 			$result = $this->product->createProvee($data);
                    echo '<script language="javascript">alert("Creado con exito");</script>';
                    echo "<script>window.location.href='ProveedoresEm'</script>";
            // print_r($data);
    	 	    	// header("Location: ProveedoresEm");
    	 			}
    				// selecionar todos proveedores
    				public function readAllProv(){
    					$result = $this->product->readAllProv();
    					return $result;
    				}
    				// Selecionar por provvedor
    				public function readByProv($data){
    					$result= $this->product->readByProv($data);
    					return $result;
    				}
    				// Actualizar Proveedor
    				public function updateProv(){
    					$data= $_POST['data'];
    					$result=$this->product->updateProv($data);

              echo '<script language="javascript">alert("Modificado con exito");</script>';
              echo "<script>window.location.href='ProveedoresEm'</script>";
    				}
    				// Eliminar Proveedor
    				public function deleteProvee(){
    					$data = $_GET['data'];
    					$result= $this->product->deleteProv($data);
    					header("Location:ProveedoresEm");
    				}
}
?>
