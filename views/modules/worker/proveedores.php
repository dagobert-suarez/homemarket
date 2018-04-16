<h1>Registrar Proveedor</h1><br>
  <div class="content">
      <form class="" action="registrar-provee" method="post">
        <div class="content-form">
          <div class="form-group">
            <label class="required">Nombre del Proveedor:</label>
            <input class="k" type="text" name="data[]" value="">
          </div>
          <div class="form-group">
            <label class="required">Direccion del Proveedor:</label>
            <input class="k" type="text" name="data[]" value="">
          </div>
        </div>
        <div class="content-form">
          <div class="form-group">
            <label class="required">Teléfono del Proveedor:</label>
            <input class="k" type="number" name="data[]" value="">
          </div>
          <div class="form-group">
            <button type="submit" name="button" class="frmbtn">Registrar</button>
          </div>
        </div>
      </form>
  </div>

<header>
  <h1>Proveedores</h1>
<div class="breadcrums">
      <ul>
          <li><a href="InicioWorker"><i class="fa fa-home"aria-hidden="true"></i> Home</a></li>
          <li><a href="Productos-empleado"><i class="fa fa-address-book-o " aria-hidden="true"></i> Proveedores</a></li>
          <!-- <li><a href=""><i class="fa fa-plus-square"aria-hidden="true"></i> Registar Proveedor</a></li> -->
      </ul>
</div>
</header>
  <div class="wrap--datagrid">
    <table id="dataGrid">
      <thead class="tittledatag">
        <tr>
          <td>#</td>
          <td>Nombre</td>
          <td>Direccion</td>
          <td>Teléfono</td>
          <td>Aciones</td>
        </tr>
      </thead>
      <tbody>
        <?php
          $data = $this->readAllProv();
          foreach ( $data as $row) {	?>
        <tr>
          <td><?php echo $row["id_prov"] ;?></td>
          <td><?php echo $row["nom_prov"] ;?></td>
          <td><?php echo $row["dir_prov"] ;?></td>
          <td><?php echo $row["tel_prov"] ;?></td>
          <td>
            <a href="actualizar-provee-<?php echo $row['id_prov'] ;?>" class="abrirmodal"><i class="fa fa-pencil"></i>Editar</a>
            <a href="#"class="modalDet" id="modalDet"><i class="fa fa-info"></i>Detalles</a>
            <a href="eliminar-Provee-<?php echo $row['id_prov'] ;?>"><i class="fa fa-trash"></i>Eliminar</a>
          </td>

        </tr>
      <?php } ?>
      </tbody>
    </table>

  </div>
