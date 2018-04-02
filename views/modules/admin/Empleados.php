<div class="module--worker">

  <h1>Empleados</h1>
  <div class="tab">
    <button class="btntabs" onclick="Name(event, 'Nuevo')" ><i class="fa fa-plus"></i> Nuevo</button>
    <button class="btntabs" onclick="Name(event, 'Empleados')" id="defaultOpen"><i class="fa fa-user"></i> Empleados</button>
    <button class="btntabs" onclick="Name(event, 'Permisos')"><i class="fa fa-check-square-o"></i>  Permisos</button>
  </div>

  <div id="Nuevo" class="contentfo">
    <h3>Registrar Empleado</h3>
    <div class="frmworker">
      <form id="frmregistro">
          <div class="content-form">
                <div class="form-group">

                    <label class="required" for="">Nombre del Empleados:</label>
                    <input class="k"  type="text" name="data[]" placeholder="Nombres" value="">
                </div>
                <div class="form-group">
                    <label class="required" for="">Apellido del Empleado:</label>
                    <input  class="k" type="text" name="data[]" placeholder="Apellidos" value="">
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
                      <option value="o">Otro</option>
                  </select>
              </div>
          </div>
          <div class="content-form">
              <div class="form-group">
                  <label class="opcional" for="">Teléfono:</label>
                  <input  class="k" type="number" name="data[]" placeholder="Teléfono" value="" id="telefono">
              </div>
              <div class="form-group">
                  <label class="required" for="">Correo del Empleado:</label>
                  <input  class="k" type="email" name="data[]" placeholder="Correo" value="" id="correo">
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
                  <input  class="k" type="password"  name="data[]" value="" placeholder="Contraseña" class="noda" id="password">
              </div>
              <!-- <div class="form-gruop">
                    <label  class="required" for="">verificar contraseña</label>
                    <input type="password" name="rpassword" id="rpassword"  placeholder="Minimo(8) caracteres, incluir almenos un numero y una Mayuscula">
              </div> -->
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
                  <button type="submit" name="button" class="btntnt">Registrar</button>
              </div>
            </div>

      </form>
      <!-- <h1>the record is missing</h1> -->
    </div>
  </div>

  <div id="Empleados" class="contentfo">
    <h3>Empleados</h3>

  </div>

  <div id="Permisos" class="contentfo">
    <h3> Permisos</h3>
  </div>

</div>
