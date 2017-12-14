<?php
//envio de datos de productos
require_once 'model/product.model.php';

class ProductController{
  private $product;


    public function __CONSTRUCT(){
        $this->product = new ProductModel();
    }

    function crearProduct(){
      $data = $_POST['data'];
      $result = $this->product->createProduct($data);
      header("Location: nuevo-producto");
      }

      //visualiza los productos en la pagina de cliente

      function createCategory(){
        $data = $_POST['data'];
        $result = $this->product->createCategory($data);
        header("Location: nueva-categoria");
        }

  //visualiza los productos en la pagina de cliente
  function viewProducts(){
    $result = $this->product->readProducts();
    return  $result;

  }
  //visualiza las  categorias en la pagina del admin
  function readCategory(){
    $result = $this->product->readCategory();
    return  $result;

  }
  // vista de los supermercados
  function crear(){
    require_once "views/modules/admin/header-admin.php";
    require_once "views/modules/admin/createProduct.php";
    require_once "views/modules/admin/footer_admin.php";

  }
   // vista de las categorias
    function crearCategoria(){
      require_once "views/modules/admin/header-admin.php";
      require_once "views/modules/admin/createCategory.php";
      require_once "views/modules/admin/footer_admin.php";

    }
//inicio de sesion del cliente
  function inicioCliente(){
		if (isset($_SESSION['USER']['rol']) && $_SESSION['USER']['rol']==1) {
					require_once "views/modules/cliente/header.php";
					require_once "views/modules/cliente/footer.php";
		}else{
			header("Location: inicio");
		}
	}
  //inicio de session del cliente donde muestra los productos
  function Productos(){
    require_once "views/modules/cliente/header.php";
    require_once "views/modules/cliente/viewProduct.php";
    require_once "views/modules/cliente/footer.php";
  }

  //inicio de session del cliente donde muestra los supermercados
  function Supermercados(){
    require_once "views/modules/cliente/header.php";
    require_once "views/modules/cliente/viewSuper.php";
    require_once "views/modules/cliente/footer.php";
  }

  function Produtosviewsadmin(){
    require_once "views/modules/admin/header-admin.php";
    require_once "views/modules/admin/productosviews.php";
    require_once "views/modules/admin/footer_admin.php";
  }
}


?>
