<section>
  <div class="">
      <header>
          <h1>Registrar nuevo producto</h1>

      <div class="breadcrums">
            <ul>
                <li><a href="InicioWorker"><i class="fa fa-home"></i>Home</a></li>
                <li><a href="Productos-empleado">productos</a></li>
                <li><a href="">Crear producto</a></li>
            </ul>
      </div>
  </header>
    <form id="frmproducto" class="" action="crearProduct" method="post">

        <div class="">
          <label for="" class="required">Nombre de producto:</label>
          <input type="text" name="data[]" value="" class="new" required>
        </div>
        <div class="">
          <label for="" class="opcional">Descripcion de producto:</label>
          <textarea type="text" name="data[]" value="" class="new"></textarea>
        </div>
        <div class="" >
          <label for="" class="required">Marca del producto:</label>
          <input type="text" name="data[]" value="" class="new" required>
        </div>
        <div class="">
          <label for="" class="required">categoria producto:</label>
          <select class="product" name="data[]" class="new" required>
            <option value=""></option>
            <?php

            foreach ($this->product->readCategory() as $row) {
              echo "<option value='".$row['id_tip_pro']."'>".$row['nom_tip_pro']."</option>";
              }
            ?>
        </select>
      </div>
      <div class="">
        <label for="" class="required">cantidad</label>
        <input type="number" name="data[]">
      </div>
      <div class="">
        <label for="" class="required">medida</label>
        <select class="" name="data[]">
          <option value="">kg</option>
          <option value="">lb</option>
          <option value="">gr</option>
          <option value="">lts</option>
        </select>
      </div>
      <div class="">
        <label for="" class="required">valor compra</label>
        <input type="number" name="data[]" class="new">
      </div>
      <div class="">
        <label for="" class="required">valor venta</label>
        <input type="number" name="data[]" class="new">
      </div>
        <div class="" >
            <label for="" class="required">Imagen del producto:</label>
            <input type="file" name="data[]" value="" class="new">
        </div>
        <div class="">
            <button type="submit" name="guardar" class="frmbtn">Crear Producto</button>

        </div>
    </form>
  </div>
</section>
