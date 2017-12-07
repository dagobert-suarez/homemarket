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
        <div class="">
        <label for="" class="required">categoria producto:</label>
        <select class="product" name="data[]">
          <option value=""></option>
          <?php
         $nada = array('nada','nadaa');
          foreach ($nada as $row) {
            echo "<option value='$row'>$row</option>";
          }
          ?>
        </select>
        <div class="" >
            <label for="" class="required">Imagen del producto:</label>
            <input type="file" name="data[]" value="">
        </div>
        <div class="">
            <button type="submit" name="guardar-producto">Crear registro</button>

        </div>

      <div class="" >
          <label for="" class="required">Imagen del producto:</label>
          <input type="file" name="data[]" value="">
      </div>
      <div class="">
        <label for="" class="required">categoria producto:</label>
          <select name="data[]" class="product">
            <option value="">cereal</option>
            <option value="">lateos</option>
            <option value="">carnes</option>
          </select>
          <div class="">
            <button type="submit" name="button">guardar-registro</button>
          </div>
      </div>
<<<<<<< HEAD
    </form>
  </div>
  <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p>
=======
>>>>>>> dec721471bc93226cffeb74b172a0d89711cabf4

    </form>
  </div>
</section>
>>>>>>> 67b9801c4b013b8d8aa6cfe9ea5a0aee515135cc
