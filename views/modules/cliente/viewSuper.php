<div class="gallery--content">
    <div class="buscador">
        <input  class="sch" type="search" name="" value="" placeholder="Buscar Supermercados">
    </div>
    <?php
    $item =1;
    foreach ($this->readAllSup() as $row){?>

<!-- <div class="supers"> -->

<div class="card" >
  <img class="card-img-top" src="views/assets/image/super/<?php echo $row["logo_sup"];?>" alt="1">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row["nom_sup"]; ?></h5>
    <p class="card-text"><?php echo $row["dir_sup"]; ?></p>
    <a href="#" class="btn-go">ir a mercar</a>
  </div>
</div>

<!-- <div class="card" >
  <img class="card-img-top" src="views/assets/image/surti.png" alt="2">
  <div class="card-body">
    <h4 class="card-title">Super inter</h4>
    <p class="card-text"></p>
    <a href="#" class="btn-go">ir a mercar</a>

  </div>
</div> -->
<!-- <div class="card" >
  <img class="card-img-top" src="views/assets/image/ara.png" alt="3">
  <div class="card-body">
    <h4 class="card-title">ara</h4>
    <p class="card-text"></p>
    <a href="#" class="btn-go">ir a mercar</a>

  </div>
</div> -->
<!-- </div> -->
<!-- <div class="supers"> -->
<!-- <div class="card" >
  <img class="card-img-top" src="views/assets/image/d1.jpg" alt="4">
  <div class="card-body">
    <h4 class="card-title">D1</h4>
    <p class="card-text"></p>
    <a href="#" class="btn-go">ir a mercar</a>

  </div>
</div> -->
<!-- <div class="card" >
  <img class="card-img-top" src="views/assets/image/Exito.png" alt="5">
  <div class="card-body">
    <h4 class="card-title">Exito</h4>
    <p class="card-text"></p>
    <a href="#" class="btn-go">ir a mercar</a>
  </div>
</div> -->
<!-- <div class="card" >
  <img class="card-img-top" src="views/assets/image/euro.png" alt="6">
  <div class="card-body">
    <h4 class="card-title">euro</h4>
    <p class="card-text"></p>
    <a href="#" class="btn-go">ir a mercar</a>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div> -->
<!-- </div> -->

<?php
$item++;
}
?>
</div>
