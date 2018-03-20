<div class="wrap--datagrid">
  <header>
    <h1>Productos registrados </h1>
      <div class="breadcrums">
            <ul>
                <li><a href="InicioWorker"><i class="fa fa-home"></i>Home</a></li>
                <li><a href="nuevo-producto">Agregar Producto</a></li>
                <li><a href="">productos</a></li>
            </ul>
      </div>
  </header>
  <table id="dataGrid">
    <thead class="tittledatag">
      <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Marca</th>
        <th>Categoria</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>

      <?php

          $data = $this->viewProducts();
      foreach ($data as $row) { ?>
      <tr class="even">
        <td><?php echo $row["id_pro"]; ?></td>
        <td><?php echo $row["nom_pro"]; ?></td>
        <td><?php echo $row["mar_pro"]; ?></td>
        <td><?php echo $row["des_pro"]; ?></td>
        <td>
            <a href="#" class="abrirmodal"><i class="fa fa-pencil" aria-hidden="true">Editar</i></a>
            <a href="#" class="modalDet"><i class="fa fa-info-circle" aria-hidden="true">Detalles</i></a>
            <a href="eliminar-producto-<?php echo $row['cod_pro'] ;?>"><i class="fa fa-trash" aria-hidden="true">Eliminar</i></a>
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
  <div class="wrap">
      <div class="wea">
          <div class="wrap-tit">
              <h1>Actualizar Producto</h1>
              <i class="close">&times</i>
          </div>
          <div class="wrap-bod">
                  <label for="">Nombre de la Producto:</label>
                  <input type="text" name="" value=""><br><label for="">descripcion de la Producto:</label>
                  <input type="text" name="" value=""><br>
                  <button type="button" name="button">Actualizar</button>

          </div>
      </div>
  </div>
  <!--Fin de el Actualizar producto -->
  <!-- -------------------------->
  <!-- Detalles -->
  <!-- ---------------->
  <div class="fondo-det"></div>
  <div class="wrap-det">
      <div class="wea-det">
          <div class="wrap-tit">
              <h1>Detalles  del productos</h1>
              <i class="closedet">&times;</i>
          </div>
          <div class="wrap-bod">
              <p>La vista para el detalle del productos</p>
                  <label for="">Nombre del productos:</label>
                  <br>
      </div>
  </div>
  <!--  Fin de Detalles -->
  <!-- --------------------->
</div>
