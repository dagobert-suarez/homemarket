<div class="modules">
  <div class="Productos">
<?php

        $data = $this->viewProducts();
    // print_r($data);

    foreach ($data as $row) { ?>

      <div class="cardPro" >
        <img class="card-img-top-pro" src="views/assets/image/produc/<?php echo $row["des_pro"];?>"id="<?php echo $row["id_tip_pro"]; ?>"  alt="1">
        <div class="nombre-produt">
          <h2><?php echo $row["nom_pro"]; ?></h2>
        </div>
        <div class="descrip-produt">
          <h2><?php echo $row["des_pro"]; ?></h2>
        </div>
        <h4 class="card-title-pro">Jumbo</h4>
        <p class="card-text-pro"></p>
        <!-- <a href="#" class="btn-go">ir a mercar</a> -->

      </div>
<?php
    }
    ?>
</div>
</div>
<!-- <div class="cardPro" >
  <img class="card-img-top-pro" src=" " alt="1">
  <div class="card-body-pro">
    <h4 class="card-title-pro">carne</h4>
    <p class="card-text-pro"></p> -->
    <!-- <a href="#" class="btn-go">ir a mercar</a> -->

  <!-- </div>
</div>
<div class="cardPro" >
  <img class="card-img-top-pro" src=" " alt="1">
  <div class="card-body-pro">
    <h4 class="card-title-pro">pan </h4>
    <p class="card-text-pro"></p> -->
    <!-- <a href="#" class="btn-go">ir a mercar</a> -->
<!--
  </div>
</div>
</div> -->
