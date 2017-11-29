<?php
//envio de datos de productos
require_once 'model/product.model.php';

class productController{
  private $product;


    public function __CONSTRUCT(){
        $this->product = new ProductModel();
    }


  function newProduct(){
    $data = $_POST["data"];
    $result = $this->$pdo->createProduct($data);
    header("Location: inicioCliente");

}

  function readCategory(){
    $data = $_POST["data"];
    $result = $this->pdo->readCategory($data);
    return $result;
  }
  function viewProducts(){
    $result = $this->product->readProducts();
    return $result;
  }

  function inicioCliente(){
		if (isset($_SESSION['USER']['rol']) && $_SESSION['USER']['rol']==1) {
					require_once "views/modules/cliente/header.php";
					require_once "views/modules/cliente/footer.php";
		}else{
			header("Location: inicio");
		}
	}

}

?>
