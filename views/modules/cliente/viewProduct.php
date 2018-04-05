<div class="modules">
  <div class="Productos">
<?php

        $data = $this->viewProducts();
    // print_r($data);

    foreach ($data as $row) { ?>

      <div class="cardPro" >
        <img class="card-img-top-pro" src="views/assets/image/productos/<?php echo $row["img_pro"]; ?>" alt="<?php echo $row["id_tip_pro"]; ?>">
        <div class="nombre-produt">
          <h3><?php echo $row["nom_pro"]; ?></h3>
        </div>
        <div class="descrip-produt">
          <h4><?php echo $row["valVen_pro"]; ?></h4>
        </div>
        <!-- <h4 class="card-title-pro">Jumbo</h4> -->
        <p class="card-text-pro"></p>
        <!-- <a href="#" class="btn-go">ir a mercar</a> -->

      </div>
<?php
    }
    ?>
</div>
</div>
