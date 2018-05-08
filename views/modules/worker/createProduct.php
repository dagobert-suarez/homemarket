<section>
  <div class="">
      <header>
          <h1>Registrar Producto</h1>

      <div class="breadcrums">
            <ul>
                <li><a href="InicioWorker"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="Productos-empleado"><i class="fa fa-shopping-basket"></i> Productos</a></li>
                <li><a href=""><i class="fa fa-plus-square"></i> Crear producto</a></li>
            </ul>
      </div>
  </header>
  <div class="content">
    <form id="frmproducto" class="" action="crearProduct" method="post" enctype="multipart/form-data">
      <div class="content-form">
          <div class="form-group">
            <label for="" class="required">Nombre de producto:</label>
            <input type="text" class="k" name="data[]" value="" class="new" required>
          </div>
          <div class="form-group">
            <label for="" class="opcional">Contenido:</label>
            <input type="number" class="k" name="data[]" value="" class="new"></textarea>
          </div>
      </div>
      <div class="content-form">
        <div class="form-group" >
          <label for="" class="required">Marca del producto:</label>
          <input type="text" class="k" name="data[]" value="" class="new" required>
        </div>
        <div class="form-group">
          <label for="" class="required">Categoria producto:</label>
          <select class="product"  name="data[]" class="new" required>
            <option value=""></option>
            <?php
              foreach ($this->product->readCategory() as $row) {
                echo "<option value='".$row['id_tip_pro']."'>".$row['nom_tip_pro']."</option>";
              }
            ?>
          </select>
        </div>
      </div>
      <div class="content-form">
        <div class="form-group">
          <label for="" class="required">Cantidad:</label>
          <input type="number" class="k" name="data[]">
        </div>
        <div class="form-group">
          <label for="" class="required">Medida:</label>
          <select class="ks" name="data[]">
            <option value="kg">kg</option>
            <option value="lb">lb</option>
            <option value="gr">gr</option>
            <option value="lts">lts</option>
            <option value="ml">ml</option>
            <option value="oz">oz</option>
            <option value="unidad">unidad</option>
          </select>
        </div>
      </div>
      <div class="content-form">
        <div class="form-group">
          <label for="" class="required">Valor venta:</label>
          <input type="number" class="k" name="data[]" class="new">
        </div>
        <div class="form-group" >
          <label for="" class="required">Imagen del producto:</label>
          <input type="file"class="kfile" name="file" class="new">
        </div>
      </div>
        <div class="form-group">
            <button type="submit" name="guardar" class="frmbtn">Crear Producto</button>

        </div>
    </form>
  </div>
  </div>
</section>
