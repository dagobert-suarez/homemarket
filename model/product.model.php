<?php
// envio a la base de datos de los productos
class ProductModel{
  private $pdo;
   function __CONSTRUCT(){
    try {
      $this->pdo = DataBase::openDB();
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }
  //  Categorias
  //crear una nueva categoria envia datos a bd
    function createCategory($data){
      try{
        $sql = "call crear_categoria(?)";
        $query = $this->pdo->prepare($sql);
        $query->execute(array($data[0]));
        $msn = "registro con exito";
      }catch (PDOException $e) {
        die($e->getMessage());
      }
      return $msn;
    }
<<<<<<< HEAD
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
    // leer por categoría
    public function readByCat($data){
        try {
            $sql="SELECT * FROM tipo_producto WHERE id_tip_pro = ?";
            $query=$this->pdo->prepare($sql);
            $query->execute(array($data));
            $result = $query->fetch(PDO::FETCH_BOTH);
        } catch (PDOException $e) {
            $result = $e->getMessage();
        }
        return $result;
    }
    // Actualizar Categoria
    public function updateCategory($data){
        try {
            $sql="UPDATE tipo_producto SET nom_tip_pro = ? WHERE id_tip_pro = ? ";
            $query=$this->pdo->prepare($sql);
            $query->execute(array($data[1],$data[0]));
            $msn ="ya modificó";
        } catch (PDOException $e) {
            $msn = $e->getMessage();
        }
        return $msn;
=======

//crear un nuevo producto: envia datos a bd
  function createProduct($data){
    try{
      $sql = "call crear_pro(?,?,?,?,?,?,?,?)";
      $query = $this->pdo->prepare($sql);
      $query->execute(array($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7]));

      $msn = "registro con exito";
    }catch (PDOException $e) {
      die($e->getMessage());
>>>>>>> f3d4b8e28cc786e1bdfef07c0258f62dc254e903
    }

    // Productos
    // --------------
    //crear un nuevo producto: envia datos a bd
      function createProduct($data){
        try{
          $sql = "call crear_pro(?,?,?,?,?,?,?,?)";
          $query = $this->pdo->prepare($sql);
          $query->execute(array($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7]));
          $msn = "registro con exito";
        }catch (PDOException $e) {
          die($e->getMessage());
        }
        return $msn;

      }




  //llama todos los productos en la bd
  // ----------------------------------- //
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


  // Actualizar producto
   // -------------------- //
   function updateProc(){
      try{
          $sql= "UPDATE productos SET  nom_pro = ?, des_pro = ?, img_pro = ?, mar_pro = ?, id_tip_pro = ? , can_pro = ?, 	fec_ing_pro = ?, uniMed_pro = ?, valCom_pro = ?, valVen_pro = ? WHERE id_pro = ?";
          $query-> $this->pdo->prepare($sql);
          $query->execute($data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7],$data[8],$data[9],$data[10],$data[0]);
          $msn= "Modificado Exitosamente";
      }catch (PDOException $e){
          $msn = $e->getMessage();
      }
      return $msn;
  }



  //elimina el tipo de categoria
  // ---------------------------- //
   function deleteProduct($data){
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

   function deletePro($data){
    try{
      $sql="DELETE FROM productos WHERE id_pro = ?";
      $query=$this->pdo->prepare($sql);
      $query->execute(array($data));
      $msn ="se eliminó el producto exitosamente";
    } catch (PDOException $e) {
      $msn = $e->getMessage();
    }
    return $msn;
  }

  
  // Supermercados
  // ----------------
  // Seleccionar todos los supermercados
   public function readAllSup(){
       try{
           $sql="SELECT * FROM supermercado";
           $query=$this->pdo->prepare($sql);
           $query->execute();
           $result = $query->fetchALL(PDO::FETCH_BOTH);
       } catch (PDOException $e){
           $result = $e->getMessage();
       }
       return $result;
   }
   // Seleccionar por Supermercado
   public function readBySup($data){
       try{
          $sql="SELECT * FROM supermercado WHERE id_sup = ?";
          $query=$this->pdo->prepare($sql);
          $query->execute(array($data));
          $result = $query->fetch(PDO::FETCH_BOTH);
      } catch(PDOException $e){
          $result = $e->getMessage();
      }
      return $result;
   }

}

?>
