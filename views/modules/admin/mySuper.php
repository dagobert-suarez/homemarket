<div class="module--worker">

    <h1>Supermercados</h1>
    <div class="tab">
        <button class="btntabs" onclick="Name(event, 'Nuevo')" ><i class="fa fa-plus"></i> Nuevo</button>
        <button class="btntabs" onclick="Name(event, 'Supermercados' )"id="defaultOpen"><i class="fa fa-building"></i> Supermercados</button>
        <button class="btntabs" onclick="Name(event, 'Categorias')"><i class="fa fa-clipboard"></i> Categorías</button>
        <button class="btntabs" onclick="Name(event, 'Productos')"><i class="fa fa-shopping-basket"></i> Productos</button>
      </div>

      <div id="Nuevo" class="contentfo">
        <h3>Registrar Supermercado</h3>
        <div class="frmworker">
          <form class="frmregistro">
              <div class="content-form">
                    <div class="form-group">
                        <label class="required" for="" >Nombre del Supermercado:</label>
                        <input class="k"  type="text" name="data[]" value="" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                        <label  class="required" for="">Direccion:</label>
                        <input  class="k" type="text" name="data[]" placeholder="Direccion" value="">
                    </div>
              </div>
              <div class="content-form">
                  <div class="form-group">
                      <label  class="required" for="">Teléfono:</label>
                      <input  class="k" type="number" name="data[]" placeholder="Teléfono" value="">
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
                      <input  class="kfile" type="file" name="data[]" value="">
                  </div>
                      <div class="form-group">
                          <button type="submit" name="button" class="btntnt">Registrar</button>
                      </div>
                  <!-- <div class="form-group">
                      <label class="required" for="">Longitude:</label>
                      <input  class="k" type="bigint" name="data[]" placeholder="Longitude" value="">
                  </div> -->
              </div>
              <div class="content-form">
<!--
                  <div class="form-group">
                      <label class="required" for="">Latitude:</label>
                      <input  class="k" type="bigint" name="data[]" placeholder="Latitude" class="noda">
                  </div> -->
              </div>
          </form>
          <!-- <h1>the record is missing</h1> -->
        </div>
      </div>
      <!-- Supermercado-->
      <!-- ----------------->
      <div id="Supermercados" class="contentfo">
        <h3>Supermercados</h3>
        <p> para ver los supermercados</p>

      </div>
        <!-- Categoria -->
        <!-- ----------------->
      <div id="Categorias" class="contentfo">
        <h3>Categorías</h3>
        <button type="button" id="openCate" name="button">Nueva categoría</button><br><br>
        <p>Aca se mostraran las Categorias Registradas.</p>
        <div id="fondo"></div>
        <div id="wrapmodal">
            <div id="modal">
                <div class="wrap-tit">
                    <h1>Nueva Categoría</h1>
                    <i id="closeCate"  class="close">&times;</i>
                </div>
                <div class="wrap-bod">
                    <div class="form-group">
                        <form  action="" method="post">
                            <label class="required" for="">Nombre de la categoría:</label>
                            <input class="k" type="text" name="" value="" placeholder="Nombre"><br>
                            <button type="submit" name="button">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <!-- Productos -->
      <!-- ----------------->
      <div id="Productos" class="contentfo">
        <h3>Productos</h3>
      </div>

</div>
