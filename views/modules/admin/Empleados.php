<div class="module--worker">
  <h1>Empleados</h1>
  <div class="tab">
    <button class="btntabs" onclick="openCity(event, 'Nuevo')" id="defaultOpen">Nuevo</button>
    <button class="btntabs" onclick="openCity(event, 'Empleados')">Empleados</button>
    <button class="btntabs" onclick="openCity(event, 'Nose')">Nose</button>
  </div>

  <div id="Nuevo" class="contentfo">
    <h3>Nuevo</h3>
    <div class="formWorker">
      <form class="frmworker" action="index.html" method="post">
          <div class="content-form">
              <div class="form-group">
                  <label for="">niombre del empleado</label>
                  <input type="text" name="data[]" value="">

              </div>
              <label for="">appellido worker</label>
              <input type="text" name="data[]" value="">

          </div>
        <label for="">fech nacimiento</label>
        <input type="text" name="data[]" value="">
        <label for="">gen_usu</label>
        <input type="text" name="data[]" value="">
        <label for="">telefono</label>
        <input type="nuber" name="data[]" value="">
        <label for="">el correo ese</label>
        <input type="text" name="data[]" value="">
        <label for="">la ciudad(falta la consulta)</label>
        <input type="text" name="data[]" value="">
        <label for="">aqui es donde hay que arreglar lo del rol</label>
        <input type="text" name="data[]" value="">
      </form>
      <h1>falta guardar registro</h1>
    </div>
  </div>

  <div id="Empleados" class="contentfo">
    <h3>Empleados</h3>
    <p>Empleados is </p>
  </div>

  <div id="Nose" class="contentfo">
    <h3>Nose</h3>
    <p>Nose is</p>
  </div>

</div>
