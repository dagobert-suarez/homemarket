<div class="wrap--datagrid">
  <header>
    <h1>Productos registrados </h1>
      <div class="breadcrums">
            <ul>
                <li><a href="InicioWorker"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="nuevo-producto"><i class="fa fa-plus-square"></i> Agregar Producto</a></li>
                <li><a href=""><i class="fa fa-shopping-basket"></i> Productos</a></li>
            </ul>
      </div>
  </header>
  <table id="dataGrid">
    <thead class="tittledatag">
      <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Contenido</th>
        <th>Medida</th>
        <th>Marca</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php
          $data = $this->viewProducts();
          foreach ($data as $row) {
      ?>
      <tr class="even">
        <td><?php echo $row["id_pro"]; ?></td>
        <td><?php echo $row["nom_pro"]; ?></td>
        <td><?php echo $row["cont_pro"]; ?></td>
        <td><?php echo $row["uniMed_pro"]; ?></td>
        <td><?php echo $row["mar_pro"]; ?></td>
        <td>
            <a href="actualizar-producto-<?php echo $row['id_pro'] ;?>" class=""><i class="fa fa-pencil" aria-hidden="true"></i>Actualizar</a>
            <a href="#" class="openDet" id=""><i class="fa fa-eye" aria-hidden="true"></i>Detalles</a>
            <a href="eliminar-producto-<?php echo $row['id_pro'] ;?>"><i class="fa fa-trash" aria-hidden="true"></i>Eliminar</a>
        </td>
      </tr>
      <?php
    }
      ?>
    </tbody>
  </table>
  <!--  Actualizar Producto -->
  <!-- ----------------------------->

  <div class="fondo"></div>
  <!-- <div class="wrap">
      <div class="wea">
          <?php
            $dataProduct = $this->readByproc(["data"]);
           ?>
          <div class="wrap-tit">
              <h1>Actualizar Producto</h1>
              <i class="close">&times</i>
          </div>
          <div class="wrap-bod">
              <form class="" action="Actualizar" method="post" enctype="multipart/form-data">
                  <label for="">Nombre de la Producto:</label>
                  <input type="text" name="data[]" value="<?php echo $data["data"] ;?>"><br><label for="">descripcion de la Producto:</label>
                  <input type="text" name="data[]" value=""><br><label for="">Marca de la Producto:</label>
                  <input type="text" name="data[]" value=""><br><label for="">descripcion de la Producto:</label>
                  <input type="text" name="data[]" value=""><br>
                  <button type="submit" name="button">Actualizar</button>
              </form>
          </div>
      </div>
  </div> -->
  <!--Fin de el Actualizar producto -->
  <!-- -------------------------->

  <!-- Detalles -->
  <!-- ---------------->
  <div class="fondo-det"></div>
  <div class="wrap-det">
      <div class="wea-det">
          <?php
            $data = $this->readByproc(["data"]);
           ?>
          <div class="wrap-tit">
              <h1>Detalles  del producto</h1>
              <i class="closedet">&times;</i>
          </div>
          <div class="wrap-bod">
              <p>La vista para el detalle del productos</p>
                  <label for="">Nombre del productos: <span id="nom"></span> </label>
                  <br>
          </div>
          </div>
    </div>
  <!--  Fin de Detalles -->
  <!-- --------------------->
