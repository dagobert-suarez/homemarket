<?php $dataSuper = $this->readByIdSup($_GET["data"]); ?>
<div class="infoSup">
    <div class="wrap-info-img">
            <img  class="logo--img" src="views/assets/image/logoHM.png" alt="" href="">
    </div>
    <div class="wrap-info">
        <label for="">Nombre del Supermercado: <?php echo $dataSuper["nom_sup"];?></label>
        <label for="">Dirección del Supermercado: <?php echo $dataSuper["dir_sup"];?></label>
        <label for="">Teléfono del Supermercado: <?php echo $dataSuper["tel_sup"];?></label>
    </div>
    <div class="wrap-info-logo">
        <h3>Logo Supermercado</h3>
        <img class="card-img-top" src="views/assets/image/super/<?php echo $row["logo_sup"];?>" alt="Logo del Supermercado">
    </div>
</div>
<div class="wrap--infosup">
<p>nose</p>
  <div class="Productos">
    <?php
    $item =1;
            foreach ($this->viewProducts() as $row){?>
            <div class="cardPro" >
            <div class="ground"></div>
            <img class="card-img-top-pro" src="views/assets/image/productos/<?php echo$row["img_pro"] ?>" alt="<?php echo $row["id_tip_pro"]; ?>">
            <div class="nombre-produt">
              <h3><?php echo $row["nom_pro"]; ?></h3>
            </div>
            <div class="descrip-produt">
              <h4><?php echo $row["valVen_pro"]; ?></h4>
            </div>
            <p class="card-text-pro"></p>
            <a  class="addpro" href="detalle-<?php echo $row["id_pro"]; ?>" >mirar</a>
          </div>
          <?php
    $item++;
    }
    ?>
  </div>
</div>
