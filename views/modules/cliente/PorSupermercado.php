<?php $dataSuper = $this->readByIdSup($_GET["data"]); ?>
<a href="inicioCliente" class="back">Volrver</a>
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
        <img class="card-img-top" src="views/assets/image/super/<?php echo $dataSuper["logo_sup"];?>" alt="Logo del Supermercado">
    </div>
</div>
<div class="wrap--infosup">
  <div class="wrap-fo">
    <div class="content-title">
        <h2 class="">Tus Filtros</h2>
    </div>
    <div class="contentex">
        <ul>
          <li><a href="#">Categorias</a></li>
          <li><a href="#">Productos</a></li>
          <li><a href="#">historial</a></li>
        </ul>
    </div>

  </div>
  <div class="wrap--produt">
    <div class="wrap-title">
      <h3>Productos</h3>
      <div class="">
        <label for="">Buscar Producto:</label>
        <input type="text" name="" value="" class="k" placeholder="Buscar">
      </div>
    </div>
    <div class="Productos">
      <?php
      $item =1;
      foreach ($this->viewProducts() as $row){?>
        <div class="cardPro" >
          <div class="ground"></div>
          <img class="card-img-top-pro" src="views/assets/image/productos/<?php echo$row["img_pro"] ?>" alt="<?php echo $row["id_tip_pro"]; ?>">
          <div class="nombre-produt">
            <p><?php echo $row["nom_pro"]; ?></p>
          </div>
          <div class="descrip-produt">
            <p><?php echo $row["can_pro"]; ?></p>
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
</div>
