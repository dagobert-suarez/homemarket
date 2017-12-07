<?php
//envio de datos de productos
require_once 'model/product.model.php';

class ProductController{
  private $product;


    public function __CONSTRUCT(){
        $this->product = new ProductModel();
    }

//llama los datos de categoria
  function readCategory(){
    $data = $_POST["data"];
    $result = $this->pdo->readCategory($data);
    return $result;
  }
  //visualiza los productos
  function viewProducts(){
    $result = $this->product->readProducts();
    return $result;
  }
  // crar nuevo super
  function crear(){
    require_once "views/modules/admin/header-admin.php";
    require_once "views/modules/admin/createProduct.php";
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

}

?>
