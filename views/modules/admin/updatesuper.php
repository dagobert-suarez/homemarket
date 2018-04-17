<?php
$dataSuper = $this->readByIdSup($_GET["data"]);
 ?>


<div class="module--worker">
<h1>Actualizar Supermercado</h1>
<div id="Nuevo" class="contentfo">
  <div class="frmworker">
    <form class="frmSuper" action="editar-supermercado" method="post" enctype="multipart/form-data">
        <div class="content-form">
              <div class="form-group">
                  <label class="required" for="" >Nombre del Supermercado:</label>
                  <input class="k"  type="text" name="data[]" value="<?php echo $dataSuper["nom_sup"];?>">
              </div>
              <div class="form-group">
                  <label  class="required" for="">Direccion:</label>
                  <input  class="k" type="text" name="data[]" value="<?php echo $dataSuper["dir_sup"];?>">
              </div>
        </div>
        <div class="content-form">
            <div class="form-group">
                <label class="required" for="">Teléfono:</label>
                <input class="k" type="number" name="data[]" value="<?php echo $dataSuper["tel_sup"];?>">
            </div>
             <div class="form-group">
                <label  class="required" for="">Ciudad:</label>
                <select class="ks" name="data[]">
                    <?php
                    foreach ($this->userModel->readCities() as $row){
                        echo "<option value='$row[0]'>$row[1]</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="content-form">
            <div class="form-group">
                <label  class="required" for="">Logo del Supermercado:</label>
                <input  class="kfile" type="file" name="file">
            </div>
                <div class="form-group">
                    <button type="submit" name="button" class="btntnt">Actualizar</button>
                </div>
        </div>
        <div class="content-form">
        </div>
    </form>
  </div>
</div>
</div>
