<div class="gallery--content">
    <div class="buscador">
        <input  class="sch" type="search" name="" value="" placeholder="Buscar Supermercados">
    </div>
    <?php
    $item =1;
    foreach ($this->readAllSup() as $row){?>
        <div class="card" >
          <img class="card-img-top" src="views/assets/image/super/<?php echo $row["logo_sup"];?>" alt="Logo del Supermercado">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row["nom_sup"]; ?></h5>
            <p class="card-text"><?php echo $row["dir_sup"]; ?></p>
            <a href="PorSupermercado<<?php echo $row["id_sup"]; ?>" class="btn-go">ir a mercar</a>
          </div>
        </div>
    <?php
    $item++;
    }
    ?>
</div>
