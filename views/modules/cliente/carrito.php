  <?php
      $data = $this->readbyProduct();
  ?>
  <h2>este es el carrito de compras</h2>
  <i class="fa fa-cart-plus"></i>
  <section>

    <?php
    if (isset($_SESSION['add_cart'])) {
      $_SESSION['CARRO'][]=array("id"=>$_SESSION['add_cart']['id'],"nombre"=>$_SESSION['add_cart']['nombre'],"cantidad"=>$_SESSION['add_cart']['cantidad'],"precio"=>$_SESSION['add_cart']['precio']);
      unset($_SESSION['add_cart']);
    }
      if (isset($_SESSION['CARRO'])) {
        $datos=$_SESSION['CARRO'];
        $total=0;
        for ($i=0; $i <count($datos); $i++) {
      ?>
      <div class="">
        <span><?php echo $datos[$i]['nombre']; ?></span>
        <span><?php echo $datos[$i]['precio']; ?></span>
      </div>
      <?php
        }
      }else {
        echo "<h2>carrito de compras vacio</h2>";
      }
      echo $_POST['cantidad'];
      echo $_POST['id'];
        ?>
  </section>
