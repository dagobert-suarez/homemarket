    <div class="module--worker">

      <h1>Empleados</h1>
      <div class="tab">
        <button class="btntabs" onclick="openCity(event, 'Nuevo')" id="defaultOpen"><i class="fa fa-plus"></i> Nuevo</button>
        <button class="btntabs" onclick="openCity(event, 'Empleados')"><i class="fa fa-user"></i> Empleados</button>
        <button class="btntabs" onclick="openCity(event, 'Nose')"><i class="fa fa-question"></i> Nose</button>
      </div>

      <div id="Nuevo" class="contentfo">
        <h3>New</h3>
        <div class="frmworker">
          <form class="frmregistro" action="index.html">
              <div class="content-form">
                    <div class="form-group">
                        <label for="">name workerr</label>
                        <input type="text" name="data[]" value="">
                    </div>
                    <div class="form-group">
                        <label for="">last name worker</label>
                        <input type="text" name="data[]" value="">
                    </div>
              </div>
              <div class="content-form">
                  <div class="form-group">
                      <label for="">fech nacimiento</label>
                      <input type="date" name="data[]" value="">
                  </div>
                  <div class="form-group">
                      <label for="">genero emplead@</label>
                      <select class="" name="data[]">
                          <option value="m">Hombre</option>
                          <option value="f">Mujer</option>
                          <option value="o">Mtro</option>
                      </select>
                  </div>
              </div>
              <div class="content-form">
                  <div class="form-group">
                      <label for="">telefono</label>
                      <input type="number" name="data[]" value="">
                  </div>
                  <div class="form-group">
                      <label for="">el correo ese</label>
                      <input type="email" name="data[]" value="">
                  </div>
              </div>
              <div class="content-form">
                  <div class="form-group">
                      <label for="">la ciudad</label>
                      <select class="city new" name="data[]">
                          <?php
                          foreach ($this->userModel->readCities() as $row){
                              echo "<option value='$row[0]'>$row[1]</option>";
                          }
                          ?>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="">contraseña</label>
                      <input type="password" name="data[]" value="" class="noda">
                  </div>
              </div>
              <div class="content-form">
                  <div class="form-group">
                      <label for="">el rol ese</label>
                      <select class="" name="data[]">
                          <?php
                          foreach ($this->userModel->readRolWorker() as $row){
                              echo "<option value='$row[0]'>$row[1]</option>";
                          }
                          ?>
                      </select>
                  </div>
                  <div class="form-group">
                      <button type="button" name="button" class="btntnt">enviar</button>
                  </div>
              </div>
          </form>
          <!-- <h1>the record is missing</h1> -->
        </div>
      </div>

      <div id="Empleados" class="contentfo">
        <h3>Empleados</h3>
        <p>Empleados is</p>
        <table>
                <tr>
                    <th>niose</th>
                    <th>nose</th>
                    <th>nodse</th>
                </tr>
                <tr>
                    <tb>niose</tb>
                    <tb>nose</tb>
                    <tb>nodse</tb>
                </tr>
        </table>
      </div>

      <div id="Nose" class="contentfo">
        <h3>Nose</h3>
        <p>Nose is the capital of Japan.</p>
      </div>

    </div>
