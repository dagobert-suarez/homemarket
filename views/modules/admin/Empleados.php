<div class="module--worker">

  <h1>Empleados</h1>
  <div class="tab">
    <button class="btntabs" onclick="openCity(event, 'Nuevo')" ><i class="fa fa-plus"></i> Nuevo</button>
    <button class="btntabs" onclick="openCity(event, 'Empleados')" id="defaultOpen"><i class="fa fa-user"></i> Empleados</button>
    <button class="btntabs" onclick="openCity(event, 'Nose')"><i class="fa fa-question"></i> Nose</button>
  </div>

  <div id="Nuevo" class="contentfo">
    <h3>Registrar Empleado</h3>
    <div class="frmworker">
      <form class="frmregistro">
          <div class="content-form">
                <div class="form-group">
                    <label class="required" for="">Nombres del Empleado:</label>
                    <input class="k"  type="text" name="data[]" value="">
                </div>
                <div class="form-group">
                    <label class="required" for="">Apellidos del Empleado:</label>
                    <input  class="k" type="text" name="data[]" value="">
                </div>
          </div>
          <div class="content-form">
              <div class="form-group">
                  <label class="required" for="">Fecha de Nacimiento:</label>
                  <input  class="k" type="date" name="data[]" value="">
              </div>
              <div class="form-group">
                  <label class="required" for="">Genero:</label>
                  <select class="ks" name="data[]">
                      <option value="m">Hombre</option>
                      <option value="f">Mujer</option>
                      <option value="o">Mtro</option>
                  </select>
              </div>
          </div>
          <div class="content-form">
              <div class="form-group">
                  <label class="opcional" for="">Teléfono:</label>
                  <input  class="k" type="number" name="data[]" value="">
              </div>
              <div class="form-group">
                  <label class="required" for="">Correo del Empleado:</label>
                  <input  class="k" type="email" name="data[]" value="">
              </div>
          </div>
          <div class="content-form">
              <div class="form-group">
                  <label class="required" for="">Ciudad:</label>
                  <select class="ks" name="data[]">
                      <?php
                      foreach ($this->userModel->readCities() as $row){
                          echo "<option value='$row[0]'>$row[1]</option>";
                      }
                      ?>
                  </select>
              </div>
              <div class="form-group">
                  <label class="required" for="">Contraseña:</label>
                  <input  class="k" type="password" name="data[]" value="" class="noda">
              </div>
          </div>
          <div class="content-form">
              <div class="form-group">
                  <label  class="required" for="">Rol:</label>
                  <select class="ks" name="data[]">
                      <?php
                      foreach ($this->userModel->readRolWorker() as $row){
                          echo "<option value='$row[0]'>$row[1]</option>";
                      }
                      ?>
                  </select>
              </div>
              <div class="form-group">
                  <button type="button" name="button" class="btntnt">Registrar</button>
              </div>
            </div>

      </form>
      <!-- <h1>the record is missing</h1> -->
    </div>
  </div>

  <div id="Empleados" class="contentfo">
    <h3>Empleados</h3>

  </div>

  <div id="Nose" class="contentfo">
    <h3>Nose</h3>
  </div>

</div>
