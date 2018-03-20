<div class="module--worker">

    <h1>Supermercados</h1>
    <div class="tab">
        <button class="btntabs" onclick="openCity(event, 'Nuevo')" ><i class="fa fa-plus"></i> Nuevo</button>
        <button class="btntabs" onclick="openCity(event, 'Supermercados' )"id="defaultOpen"><i class="fa fa-building"></i> Supermercados</button>
        <button class="btntabs" onclick="openCity(event, 'Nose')"><i class="fa fa-question"></i> Nose</button>
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
                      <label class="required" for="">Longitude:</label>
                      <input  class="k" type="bigint" name="data[]" placeholder="Longitude" value="">
                  </div>
              </div>
              <div class="content-form">

                  <div class="form-group">
                      <label class="required" for="">Latitude:</label>
                      <input  class="k" type="bigint" name="data[]" placeholder="Latitude" class="noda">
                  </div>
                  <div class="form-group">
                      <button type="button" name="button" class="btntnt">Registrar</button>
                  </div>
              </div>
          </form>
          <!-- <h1>the record is missing</h1> -->
        </div>
      </div>

      <div id="Supermercados" class="contentfo">
        <h3>Supermercados</h3>

      </div>

      <div id="Nose" class="contentfo">
        <h3>Nose</h3>
      </div>
</div>
