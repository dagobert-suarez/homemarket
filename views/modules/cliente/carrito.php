<?php
    $data = $this->readbyProduct();
?>
<h2>este es el carrito de compras</h2>
<section>
  <?php
    if (isset($_SESSION['CARRO'])) {
      $datos=$_SESSION['CARRO'];
      $total=0;
      for ($i=0; $i <count($datos); $i++) {
    ?>
    <div class="">
      <span><?php echo $datos[$i]['Nombre']; ?></span>
      <span><?php echo $datos[$i]['Precio']; ?></span>
      <span>cantidad: <input type="text" value="<?php echo $datos[$i]['Cantidad']; ?>"></span>
      <span>subtotal: <?php echo $datos[$i]['Cantidad']*$datos[$i]['Precio']; ?></span>
    </div>
    <?php
      $total=($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$total;
      }
    }else {
      echo "<h2>carrito de compras vacio</h2>";
    }
      echo 'total:'.$total;
      ?>
</section>
