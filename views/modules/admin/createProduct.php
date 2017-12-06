<section>
  <div class="">
    <h1>Registrar nuevo producto</h1>
    <form id="frmproducto" class="" action="crear-producto" method="post">
      <div class="">
        <label for="" class="required">Codigo de producto:</label>
        <input type="number" name="data[]" value="">
      </div>
      <div class="">
        <label for="" class="required">Nombre de producto:</label>
        <input type="text" name="data[]" value="">
      </div>
      <div class="">
        <label for="" class="opcional">Descripcion de producto:</label>
        <textarea type="text" name="data[]" value=""></textarea>
      </div>
      <div class="" >
        <label for="" class="required">Marca del producto:</label>
        <input type="text" name="data[]" value="">
      </div>
        <div class="" >
          <label for="" class="required">Imagen del producto:</label>
          <input type="file" name="data[]" value="">
        </div>
        <div class="">
        <label for="" class="required">categoria producto:</label>
        <select class="product" name="data[]">
          <option value=""></option>
          <?php
          foreach ($this->ProductModel->readCategory() as $row) {
            echo "<option value='$row[0]'>$row[1]</option>";
          }
          ?>
        </select>
        <button type="submit" name="guardar-producto">Crear registro</button>

    </form>
  </div>
  <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p>
</section>
