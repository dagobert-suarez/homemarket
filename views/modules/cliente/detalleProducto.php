<?php $dataProduct = $this->readIdProduct($_GET["data"]); ?>
<div class="">
  <h1>aquí van los detalles del producto</h1>
  <div class="">
    <label for=""><?php echo $dataProduct["nom_pro"]; ?></label>
    <label for=""><?php echo $dataProduct["img_pro"]; ?></label>
    <label for=""><?php echo $dataProduct["mar_pro"]; ?></label>
    <label for=""><?php echo $dataProduct["valVen_pro"]; ?></label>
  </div>
</div>
