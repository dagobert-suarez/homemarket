<?php $dataProduct = $this->readIdProduct($_GET["data"]);
  $_SESSION['add_cart']=array("id"=>$dataProduct['id_pro'],"nombre"=>$dataProduct["nom_pro"],"cantidad"=>6,"precio"=>$dataProduct["valVen_pro"]);
?>
<div class="">
  <h1>aquí van los detalles del producto</h1>
  <div class="">
    <label for=""><?php echo $dataProduct["nom_pro"]; ?></label>
    <img src="views/assets/image/productos/<?php echo $row["img_pro"]; ?>" alt="">
    <label for=""><?php echo $dataProduct["mar_pro"]; ?></label>
    <label for=""><?php echo $dataProduct["valVen_pro"]; ?></label>
    <div class="">
    <a href="carritoCliente">añadir al carrito</a>
  </div>
  </div>
</div>
