<!-- empieza el de registro -->
    <div class="module--worker">

      <h1>Empleados</h1>
      <div class="tab">
        <button class="btntabs" onclick="openCity(event, 'Nuevo')" id="defaultOpen">Nuevo</button>
        <button class="btntabs" onclick="openCity(event, 'Empleados')">Empleados</button>
        <button class="btntabs" onclick="openCity(event, 'Nose')">Nose</button>
      </div>

      <div id="Nuevo" class="contentfo">
        <h3>New</h3>
        <div class="formWorker">
          <form class="frmworker" action="index.html">
            <label for="">name worker</label>
            <input type="text" name="data[]" value="">
            <label for="">last name worker</label>
            <input type="text" name="data[]" value="">
            <label for="">fech nacimiento</label>
            <input type="datetime-local" name="data[]" value="">
            <label for="">genero emplead@</label>
            <select class="" name="data[]">
              <option value="m">hombre</option>
              <option value="f">mujer</option>
              <option value="o">otro</option>
            </select>
            <label for="">telefono</label>
            <input type="nuber" name="data[]" value="">
            <label for="">el correo ese</label>
            <input type="email" name="data[]" value="">
            <label for="">la ciudad</label>
            <select class="city new" name="data[]">
              <?php
              foreach ($this->userModel->readCities() as $row){
                echo "<option value='$row[0]'>$row[1]</option>";
              }
              ?>
            </select>
            <label for="">contraseña</label>
            <input type="password" name="data[]" value="">
            <label for="">el rol ese</label>
            <select class="" name="data[]">
              <?php
              foreach ($this->userModel->readRol() as $row){
                echo "<option value='$row[0]'>$row[1]</option>";
              }
              ?>
            </select>
            <button type="button" name="button" class="btntnt">enviar</button>
          </form>
          <h1>the record is missing</h1>
        </div>
      </div>

      <div id="Empleados" class="contentfo">
        <h3>Empleados</h3>
        <p>Empleados is the capital of France.</p>
      </div>

      <div id="Nose" class="contentfo">
        <h3>Nose</h3>
        <p>Nose is the capital of Japan.</p>
      </div>

    </div>
<!-- termina el de registro -->
