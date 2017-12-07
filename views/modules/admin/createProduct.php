<section>
  <div class="">
      <header>
          <h1>Registrar nuevo producto</h1>

      <!-- <div class="breadcrums"> -->
            <!-- <ul> -->
                <!-- <li><a href="inicioAdmin"><i class="fa fa-home"></i>Home</a></li> -->
                <!-- <li><a href="Produtos">productos</a></li> -->
                <!-- <li><a href=""></a></li> -->
            <!-- </ul> -->
      <!-- </div> -->
  </header>
    <form id="frmproducto" class="" action="crear-producto" method="post">
      <div class="">
        <label for="" class="required">Codigo de producto:</label>
        <input type="number" name="data[]" value="" class="new">
      </div>
      <div class="">
        <label for="" class="required">Nombre de producto:</label>
        <input type="text" name="data[]" value="" class="new">
      </div>
      <div class="">
        <label for="" class="opcional">Descripcion de producto:</label>
        <textarea type="text" name="data[]" value="" class="new"></textarea>
      </div>
      <div class="" >
        <label for="" class="required">Marca del producto:</label>
        <input type="text" name="data[]" value="" class="new">
      </div>
        <div class="">
        <label for="" class="required">categoria producto:</label>
        <select class="product" name="data[]" class="new">
          <option value=""></option>
          <?php

          foreach ($this->product->readCategory() as $row) {
            echo "<option value='".$row['id_tip_pro']."'>".$row['nom_tip_pro']."</option>";
          }
          ?>
        </select>
        <div class="" >
            <label for="" class="required">Imagen del producto:</label>
            <input type="file" name="data[]" value="" class="new">
        </div>
        <div class="">
            <button type="submit" name="guardar-producto">Crear registro</button>

        </div>
    </form>
  </div>
</section>
