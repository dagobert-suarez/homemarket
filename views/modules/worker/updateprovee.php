<h1>Actualizar Proveedor</h1><br>
<?php
  $dataProv = $this->readByProv($_GET["data"]);
?>
  <div class="content">
      <form class="" action="actualizando-prove" method="post">
        <div class="content-form">
          <div class="form-group">
            <label class="required">Nombre del Proveedor:</label>
            <input class="k" type="text" name="data[]" value="<?php echo $dataProv["nom_prov"];?>">
          </div>
          <div class="form-group">
            <label class="required">Direccion del Proveedor:</label>
            <input class="k" type="text" name="data[]" value="<?php echo $dataProv["dir_prov"];?>">
          </div>
        </div>
        <div class="content-form">
          <div class="form-group">
            <label class="required">Teléfono del Proveedor:</label>
            <input class="k" type="number" name="data[]" value="<?php echo $dataProv["tel_prov"];?>">
          </div>

          <input type="hidden" readonly name="data[]" value="<?php echo $_GET["data"]; ?>">


          <div class="form-group">
            <button type="submit" name="button" class="frmbtn">Actualizar</button>
          </div>
        </div>
      </form>
  </div>
