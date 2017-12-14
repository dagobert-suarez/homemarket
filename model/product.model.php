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
//crear un nuevo producto: envia datos a bd
  function createProduct(){
    try{
      $sql="INSERT INTO productos VALUES (?,?,?,?,?,?)";
      $query = $this->pdo->prepare($sql);
      $query->execute(array($data[0],$data[1],$data[2],$data[3],$data[4],$data[5]));

      $msn = "registro con exito";
    }catch (PDOException $e) {
      die($e->getMessage());
    }
    return $msn;
  }

//llama los tipos de categorias en la bd
  function readCategory(){
    try{
    $sql="SELECT id_tip_pro,nom_tip_pro FROM tipo_producto ";
    $query=$this->pdo->prepare($sql);
    $query->execute();
    $result = $query->fetchALL(PDO::FETCH_BOTH);
    } catch (PDOException $e) {
          $result = $e->getMessage();
      }
      return $result;
  }

  //llama todos los productos en la bd
  function readProducts(){
    try{
    $sql="SELECT * FROM productos ";
    $query=$this->pdo->prepare($sql);
    $query->execute();
    $result = $query->fetchALL(PDO::FETCH_BOTH);
    } catch (PDOException $e) {
          $result = $e->getMessage();
      }
      return $result;
  }

}

?>
