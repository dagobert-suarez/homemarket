  <?php
      $data = $this->readbyProduct();
  ?>
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
      }else { echo "<h2>carrito de compras vacio</h2>"; }
      ?>
      <div class="wrap--item">
        <h2>Carrito de compras</h2>
        <div class="item">
          <div class="content-item">
            <!-- <label for="" class="hidden"> <?php  echo $_POST['id']; ?></label> -->
            <label for="">Producto: <span><?php echo $_POST['nom2'];?></span> </label>
            <label for="">Marca: <span><?php echo $_POST['mar2'];?></span> </label>
          </div>
          <div class="content-item">
            <label for="">Cantidad: <span></span><?php echo $_POST['cantidad'];?></label>
            <label for="">Precio: <span><?php echo $_POST['pre2'];?></span> </label>
            <a href="#" class="delet"><i>&times;</i> Eliminar </a>
          </div>
          
        </div>
      </div>
  </section>
