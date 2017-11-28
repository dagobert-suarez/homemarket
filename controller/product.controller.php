<?php
//envio de datos de productos
require_once "model/product.model.php"
class productController{
  private $products;

  public function __CONSTRUCT(){
    $this->products = new productModel();
  }
  function crear(){
    $data=$_POST['$data'];
    
  }
}

?>
