<!-- <?php require_once "views/modules/cliente/navigator.php"; ?> -->
<div class="wrap--map">
  <div id="map"> </div>
</div>
<div class="wrap--supers">
  <div class="wrap-title">
    <h3>Supermercados</h3>
    <div class="buscador">
      <label for="">Buscar Supermercado:</label>
      <input  class="k" type="search" name="" value="" placeholder="Buscar Supermercados">
    </div>
  </div>
  <div class="gallery--content">
      <?php
      $item =1;
      foreach ($this->readAllSup() as $row){?>
          <div class="card" >
            <img class="card-img-top" src="views/assets/image/super/<?php echo $row["logo_sup"];?>" alt="Logo del Supermercado">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row["nom_sup"]; ?></h5>
              <p class="card-text"><?php echo $row["dir_sup"]; ?></p>
              <a href="PorSupermercado-<?php echo $row["id_sup"]; ?>" class="btn-go">ir a mercar</a>
            </div>
          </div>
      <?php
      $item++;
      }
      ?>
  </div>
</div>
