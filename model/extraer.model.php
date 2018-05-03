<?php
class extraer{
  private $pdo
  public function_CONSTRUCT(){
    try{
      $this->$ex = Database::openDB();
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch (PDOException $e){
      die ($e->getMessage());
    }

  }
}
?>
