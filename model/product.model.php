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

  //CRUD de Categorias
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
    // leer un tipo de categoria
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

    }
    //elimina el tipo de categoria
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

    // CRUD de Productos
    //crear un nuevo producto
      function createProduct($data){
        try{
          $sql = "call crear_pro(?,?,?,?,?,?,?,?,?)";
          $query = $this->pdo->prepare($sql);
          $query->execute(array($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7],$data[8]));
          $msn = "registro con exito";
        }catch (PDOException $e) {
          die($e->getMessage());
        }
        return $msn;
      }

  // llama todos los productos
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

  // Lee un producto
   function readByproc($data){
      try {
          $sql= "SELECT * FROM productos WHERE id_pro = (?)";
          $query=$this->pdo->prepare($sql);
          $query->execute(array($data));
          $result = $query->fetch(PDO::FETCH_BOTH);
      } catch (PDOException $e) {
          $result = $e->getMessage();
      }
      return $result;
    }

  // Actualizar producto
   function updateProc($data){
     // print_r($data);
      try{
      $sql= "call modificarPro(?,?,?,?,?,?,?,?)";
      $query = $this->pdo->prepare($sql);
      $query->execute(array($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7]));
      $msn = "modificado con exito";
     }catch(PDOException $e){
       $msn = $e->getMessage();
     }
     // echo $msn;
     // die();
     return $msn;
  }

// Elimina el producto
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

  // CRUD de Supermercados
  // Seleccionar todos los supermercados
    function readAllSup(){
       try{
           $sql="SELECT * FROM supermercado";
           $query=$this->pdo->prepare($sql);
           $query->execute();
           $result = $query->fetchALL(PDO::FETCH_BOTH);
       } catch (PDOException $e){
           $result=$e->getMessage();
       }
       return $result;
   }
   // Seleccionar por Supermercado
    function readBySup($data){
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

   //CRUD de proveeddores
   // Proveedores
   public function createProvee($data){
     try{
       $sql=" INSERT INTO proveedores (nom_prov,dir_prov,tel_prov) VALUES (?,?,?)";
       $query=$this->pdo->prepare($sql);
       $query->execute(array($data[0],$data[1],$data[2])) ;
       $msn ="Guardado Exitoxamente";
     } catch(PDOException $e){
       $msn = $e->getMessage();
     }
       return $msn;
   }
   // Selecionar Todos los Proveedores
    public function readAllProv(){
      try{
        $sql="SELECT * FROM proveedores";
        $query=$this->pdo->prepare($sql);
        $query->execute();
        $result = $query->fetchALL(PDO::FETCH_BOTH);
      } catch (PDOException $e){
        $result = $e->getMessage();
      }
      return $result;
    }
    // Selecionar por Proveedor
    public function readByProv($data){
      try{
        $sql="SELECT * FROM proveedores WHERE id_prov = ?";
        $query=$this->pdo->prepare($sql);
        $query->execute(array($data));
        $result = $query->fetch(PDO::FETCH_BOTH);
      } catch (PDOException $e){
        $result = $e->getMessage();
      }
      return $result;
    }

    // Actualizar Proveedor
    public function updateProv($data){
      try{
        // $sql="UPDATE proveedores SET nom_prov = ? , dir_prov = ?, tel_prov = ? ";
        $sql = "call modificarProv(?,?,?)";
        $query=$this->pdo->prepare($sql);
        $query->execute(array($data[0], $data[1], $data[2]));
        $msn= "Modificado Exitosamente";
      } catch (PDOException $e){
        $msn= $e->getMessage();
      }
      return $msn;
    }
    // Eliminar Proveedor
    public function deleteProv($data){
      try{
        $sql= "DELETE FROM proveedores WHERE id_prov = ?";
        $query=$this->pdo->prepare($sql);
        $query->execute(array($data));
        $msn="Eliminado Exitosamente";
      }catch (PDOException $e){
        $msn= $e->getMessage();
      }
      return $msn;
    }

 }
?>
