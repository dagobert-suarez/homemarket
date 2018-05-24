<div class="module--worker">

  <h1>Empleados</h1>
  <div class="tab">
      <button class="btntabs" onclick="Name(event, 'Empleados')" id="defaultOpen"><i class="fa fa-user"></i> Empleados</button>
    <button class="btntabs" onclick="Name(event, 'Nuevo')" ><i class="fa fa-user-plus"></i> Nuevo</button>
    <button class="btntabs" onclick="Name(event, 'Permisos')"><i class="fa fa-check-square-o"></i>  Permisos</button>
  </div>

  <div id="Nuevo" class="contentfo">
    <h3>Registrar Empleado</h3>
    <div class="szs">
      <form id="frmworker" method="post" action="nuevo-empleado">
          <div class="content-form">
                <div class="form-group">

                    <label class="required" for="">Nombre del Empleado:</label>
                    <input class="k"  type="text" name="data[]" placeholder="Nombres" value="">
                </div>
                <div class="form-group">
                    <label class="required" for="">Apellidos del Empleado:</label>
                    <input  class="k" type="text" name="data[]" placeholder="Apellidos" value="">
                </div>
          </div>
          <div class="content-form">
              <div class="form-group">
                  <label class="required" for="">Fecha de Nacimiento:</label>
                  <input  class="k" type="date" name="data[]" value="">
              </div>
              <div class="form-group">
                  <label class="required" for="">Genero:</label>
                  <select class="ks" name="data[]">
                      <option value="m">Hombre</option>
                      <option value="f">Mujer</option>
                      <option value="o">Otro</option>
                  </select>
              </div>
          </div>
          <div class="content-form">
              <div class="form-group">
                  <label class="required" for="">Teléfono:</label>
                  <input  class="k" type="number" name="data[]" placeholder="Teléfono" value="" id="telefono">
              </div>
              <div class="form-group">
                  <label class="required" for="">Correo del Empleado:</label>
                  <input  class="k" type="email" name="data[]" placeholder="Correo" value="" id="correo">
              </div>
          </div>
          <div class="content-form">
              <div class="form-group">
                  <label class="required" for="">Ciudad:</label>
                  <select class="ks" name="data[]">
                      <?php
                      foreach ($this->userModel->readCities() as $row){
                          echo "<option value='$row[0]'>$row[1]</option>";
                      }
                      ?>
                  </select>
              </div>
              <div class="form-group">
                  <label class="required" for="">Contraseña:</label>
                  <input  class="k" type="password"  name="data[]" value="" placeholder="Contraseña" class="noda" id="password">
              </div>
              <!-- <div class="form-gruop">
                    <label  class="required" for="">verificar contraseña</label>
                    <input type="password" name="rpassword" id="rpassword"  placeholder="Minimo(8) caracteres, incluir almenos un numero y una Mayuscula">
              </div> -->
          </div>
          <div class="content-form">
              <div class="form-group">
                  <label  class="required" for="">Rol:</label>
                  <select class="ks" name="data[]">
                      <?php

                      foreach ($this->userModel->readRolWorker() as $row){
                          echo "<option value='$row[0]'>$row[1]</option>";
                      }
                      ?>
                  </select>
              </div>
              <div class="form-group">
                  <button type="submit" name="button" class="btntnt">Registrar</button>
              </div>
            </div>
      </form>
    </div>
  </div>

  <div id="Empleados" class="contentfo">
    <h3>Empleados</h3>

    <table class="dataGrid">
        <thead class="tittledatag">
            <tr>
                <td>Nombre</td>
                <td>Apellidos</td>
                <td>Teléfono</td>
                <td>Correo</td>
                <td>Aciones</td>
            </tr>
        </thead>
        <tbody>
            <?php
                $item =1;
                $data = $this->readAllEm();
                foreach( $data as $row){?>
            <tr>
                <td><?php echo $row['nom_usu'];?></td>
                <td><?php echo $row['ape_usu'];?></td>
                <td><?php echo $row['tel_usu'];?></td>
                <td><?php echo $row['email_usu'];?></td>
                <td>
                    <a href="actualizar-empleado-<?php echo $row['id_usu'];?>" class=""><i class="fa fa-pencil"></i>Editar</a>
                    <a href="#" class="openDet" id="<?php echo $row['id_usu'];?>"><i class="fa fa-eye"></i>Detalles</a>
                    <a href="#"><i class="fa fa-trash"></i>Eliminar</a>
                </td>
            </tr>
            <?php $item ++;
          } ?>
        </tbody>
    </table>

  </div>

  <div id="Permisos" class="contentfo">
    <h3> Permisos</h3>
  </div>

</div>

<!-- Detalles de empleado -->
<!-- ----------------------->
<div class="fondo"></div>
<div class="wrap-modal">
  <div class="wrap-det">
    <div class="wrap-title">
      <h3>Detalles del empleado </h3>
      <i id="close">&times;</i>
    </div>
    <div class="wrap-body">
      <label for="">Nombre: <span id="nom"></span> </label>
      <label for="">Apellido: <span id="ape"></span> </label>
      <label for="">Teléfono: <span id="tel"></span> </label>
      <label for="">Correo: <span id="corr"></span> </label>
      <label for="">Fecha de Nacimiento: <span id="fech"></span> </label>
    </div>
  </div>
</div>
