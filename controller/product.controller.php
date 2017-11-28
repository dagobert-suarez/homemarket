<?php
//envio de datos de productos
require_once 'model/product.model.php';

class productController{

  function newProduct(){
    $data = $_POST["data"];
    $result = $this->$pdo->createProduct($data);
    header("Location: inicioCliente");

}

  function readCategory(){
    $data = $_POST["data"];
    $result = $this->$pdo->readCategory($data);
    return $result;
  }



}

?>
