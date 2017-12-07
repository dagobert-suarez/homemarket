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
<<<<<<< HEAD
        <div class="">
        <label for="" class="required">categoria producto:</label>
        <select class="product" name="data[]">
          <option value=""></option>
          <?php
          // foreach ($this->ProductModel->readCategory() as $row) {
          //   echo "<option value='$row[0]'>$row[1]</option>";
          // }
          ?>
        </select>
        <div class="" >
            <label for="" class="required">Imagen del producto:</label>
            <input type="file" name="data[]" value="">
        </div>
        <div class="">
            <button type="submit" name="guardar-producto">Crear registro</button>

        </div>
=======
      <div class="" >
          <label for="" class="required">Imagen del producto:</label>
          <input type="file" name="data[]" value="">
      </div>
      <div class="">
        <label for="" class="required">categoria producto:</label>
          <select name="data[]" class="product">
            <option value=""></option>
              <?php
              foreach ($this->ProductModel->readCategory() as $row){
                echo "<option value='$row[0]'>$row[1]</option>";
              }
              ?>
              <button type="button" name="button">guardar-registro</button>
          </select>
      </div>
>>>>>>> dec721471bc93226cffeb74b172a0d89711cabf4

    </form>
  </div>
</section>
