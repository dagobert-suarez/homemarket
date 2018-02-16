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
      <tr>
        <td><?php echo $row["cod_pro"]; ?></td>
        <td><?php echo $row["nom_pro"]; ?></td>
        <td><?php echo $row["mar_pro"]; ?></td>
        <td><?php echo $row["des_pro"]; ?></td>
        <td>
            <a href="updateProduct"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-info-circle" aria-hidden="true"></i></a>
            <a href="eliminar-producto-<?php echo $row['cod_pro'] ;?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
        </td>
      </tr>
      <?php
    }
      ?>
    </tbody>

  </table>
</div>
