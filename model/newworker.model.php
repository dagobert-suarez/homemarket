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
  function createProduct($data){
    try{
      $sql = "INSERT INTO productos(cod_pro,nom_pro,des_pro,mar_pro,id_tip_pro) VALUE (?,?,?,?,?)";
      $query = $this->pdo->prepare($sql);
      $query->execute(array($data[0],$data[1],$data[2],$data[3],$data[4]));

      $msn = "registro con exito";
    }catch (PDOException $e) {
      die($e->getMessage());
    }
    return $msn;
  }
//crear una nueva categori envia datos a bd
  function createCategory($data){
    try{
      $sql = "INSERT INTO tipo_producto(id_tip_pro,nom_tip_pro) VALUE (?,?)";
      $query = $this->pdo->prepare($sql);
      $query->execute(array($data[0],$data[1]));

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

  //elimina el tipo de categoria
  public function deleteProduct($data){
    try{
      $sql="DELETE FROM tipo_producto WHERE id_tip_pro = ?";
      $query=$this->pdo->prepare($sql);
      $query->execute(array($data));
      $msn ="se elimino la categoria exitosamente";
    } catch (PDOException $e) {
      $msn = $e->getMessage();
    }
    return $msn;
  }

  public function deletePro($data){
    try{
      $sql="DELETE FROM productos WHERE cod_pro = ?";
      $query=$this->pdo->prepare($sql);
      $query->execute(array($data));
      $msn ="se elimino la categoria exitosamente";
    } catch (PDOException $e) {
      $msn = $e->getMessage();
    }
    return $msn;
  }

}

?>
