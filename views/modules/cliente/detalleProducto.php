<div class="wrapdet">
  <?php $dataProduct = $this->readIdProduct($_GET["data"]);
    $_SESSION['add_cart']=array("id"=>$dataProduct['id_pro'],"nombre"=>$dataProduct["nom_pro"],"cantidad"=>6,"precio"=>$dataProduct["valVen_pro"]);
  ?>
  <div class="wrap-deta">
    <h1>aquí van los detalles del producto</h1>
    <div class="wrap-image-pro">
      <img src="views/assets/image/products/<?php echo $row["img_pro"]; ?>" alt="">
    </div>
    <div class="wrap-name-pro">
      <label for="">Nombre: <p id="nom"></p> </label>
      <label for="">Marca: <p id="mar"></p> </label>
      <label for="">Precio: <p id="pre"></p> </label>
      <div class="">
      <a href="carritoCliente" class="add-cart" id="<?php echo $row['id_pro'] ; ?> ">añadir al carrito</a>
    </div>
    </div>
  </div>
</div>
