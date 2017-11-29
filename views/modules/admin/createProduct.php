<section>
  <div class="">
    <div>
    <h1>Registrar nuevo producto</h1>
    <form id="frmproducto" class="" action="crear-producto" method="post">
      <div class="">
        <label for="">Codigo de producto</label>
        <input type="number" name="data[]" value="">
      </div>
      <div class="">
        <label for="">Nombre de producto</label>
        <input type="text" name="data[]" value="">
      </div>
      <div class="">
        <label for="">Descripcion de producto</label>
        <input type="text" name="data[]" value="">
      </div>
      <div class="">
        <label for="">Marca del producto</label>
        <input type="text" name="data[]" value="">
      </div>
      <div class="">
        <label for="">categoria producto</label>
        <select class="product" name="data[]">
          <option value=""></option>
          <?php
          foreach ($this->ProductModel->readCategory() as $row) {
            echo "<option value='$row[0]'>$row[1]</option>";
          }
          ?>
        </select>
      </div>
      <button type="submit" name="guardar">Crear registro</button>
    </form>
  </div>
  </div>
</section>
