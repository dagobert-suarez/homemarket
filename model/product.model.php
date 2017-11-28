<?php
// envio a la base de datos de los productos

class ProductModel{
  private $pdo;
  public function __CONSTRUCT(){
    try {
      $this->pdo = DataBase::openDB();
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }

  function createProduct($data)

}

?>
