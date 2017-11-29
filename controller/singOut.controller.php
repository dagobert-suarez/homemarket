<?php
class SingoutController{

  function salir(){
    session_destroy();
    header("Location: inicio");
  }
}
?>
