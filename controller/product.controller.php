<?php
//envio de datos de productos
require_once ("model/product.model.php");

class ProductController{
  private $product;
  // vista de los supermercados
  function crear(){
    require_once "views/modules/worker/header.php";
    require_once "views/modules/worker/createProduct.php";
    require_once "views/modules/worker/footer.php";

  }
  // vista de las categorias
  function crearCategoria(){
    require_once "views/modules/worker/header.php";
    require_once "views/modules/worker/createCategory.php";
    require_once "views/modules/worker/footer.php";

  }

  //inicio de session del cliente donde muestra los productos
  function Productos(){
    require_once "views/modules/cliente/header.php";
    require_once "views/modules/cliente/navigator.php";
    require_once "views/modules/cliente/viewProduct.php";
    require_once "views/modules/cliente/footer.php";
  }

  //inicio de session del cliente donde muestra los supermercados
  function Supermercados(){
    require_once "views/modules/cliente/header.php";
    require_once "views/modules/cliente/menuTopC.php";
    require_once "views/modules/cliente/navigator.php";
    require_once "views/modules/cliente/viewSuper.php";
    require_once "views/modules/cliente/footer.php";
  }
  function mySuper(){
      require_once "views/modules/admin/header-admin.php";
      require_once "views/modules/admin/mySuper.php";
      require_once "views/modules/admin/footer_admin.php";
  }

  function Produtosviewsworker(){
    require_once "views/modules/worker/header.php";
    require_once "views/modules/worker/productosviews.php";
    require_once "views/modules/worker/footer.php";
  }

    public function __CONSTRUCT(){
        $this->product = new ProductModel();
    }

    function crearProduct(){
        $data = $_POST['data'];
         $result = $this->product->createProduct($data);
         echo '<script language="javascript">alert("creado con exito");</script>';
         echo "<script>window.location.href='nuevo-producto'</script>";
      }
      // ------------------- //


      //visualiza los productos en la pagina de cliente

      //envia el registro de categoria
      function createCategory(){
        $data = $_POST['data'];
        $result = $this->product->createCategory($data);
        echo '<script language="javascript">alert("<div class="exit">creado con exito</div>");</script>';
        echo "<script>window.location.href='nueva-categoria'</script>";

      }

  //visualiza los productos en la pagina de cliente
  function viewProducts(){
    $result = $this->product->readProducts();
    return  $result;

  }

// Categorias
// ------------

  //visualiza las  categorias en la pagina del admin
  function readCategory(){
    $result = $this->product->readCategory();
    return  $result;
  }
  public function updateCat(){
         $data =$_POST['data'];
         $result = $this->product->updateCat($data);
         // print_r
         // header("Location:")
     }

   public function updateProc(){
       $data =$_POST['data'];
       $result = $this->product->updateProc($data);
       // header("Location:")
   }
 public function deleteProductType(){
    $data = $_GET['data'];
    $result = $this->product->deleteProduct($data);
    echo '<script language="javascript">alert("ya se elimino");</script>';
    echo "<script>window.location.href='nueva-categoria'</script>";
  }
 public function deleteProd(){
    $data = $_GET['data'];
    $result = $this->product->deletePro($data);
    echo '<script language="javascript">alert("ya se elimino");</script>';
    echo "<script>window.location.href='Productosadmin'</script>";
  }
}
?>
