<div class="module--worker">

    <h1>Supermercados</h1>
    <div class="tab">
        <button class="btntabs" onclick="Name(event, 'Supermercados' )"id="defaultOpen"><i class="fa fa-building"></i> Supermercados</button>
        <button class="btntabs" onclick="Name(event, 'Nuevo')" ><i class="fa fa-plus"></i> Nuevo</button>
        <button class="btntabs" onclick="Name(event, 'Categorias')"><i class="fa fa-clipboard"></i> Categorías</button>
        <button class="btntabs" onclick="Name(event, 'Productos')"><i class="fa fa-shopping-basket"></i> Productos</button>
      </div>

      <div id="Nuevo" class="contentfo">
        <h3>Registrar Supermercado</h3>
        <div class="frmworker">
          <form class="frmSuper" action="guardar-super" method="post" enctype="multipart/form-data">
              <div class="content-form">
                    <div class="form-group">
                        <label class="required" for="" >Nombre del Supermercado:</label>
                        <input class="k"  type="text" name="data[]" value="" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <label  class="required" for="">Direccion:</label>
                        <input  class="k" type="text" name="data[]" placeholder="Direccion" >
                    </div>
              </div>
              <div class="content-form">
                  <div class="form-group">
                      <label class="required" for="">Teléfono:</label>
                      <input class="k" type="number" name="data[]" placeholder="Teléfono" >
                  </div>
                   <div class="form-group">
                      <label  class="required" for="">Ciudad:</label>
                      <select class="ks" name="data[]">
                          <?php
                          foreach ($this->userModel->readCities() as $row){
                              echo "<option value='$row[0]'>$row[1]</option>";
                          }
                          ?>
                      </select>
                  </div>
              </div>
              <div class="content-form">
                  <div class="form-group">
                      <label  class="required" for="">Logo del Supermercado:</label>
                      <input  class="kfile" type="file" name="file">
                  </div>
                      <div class="form-group">
                          <button type="submit" name="button" class="btntnt">Registrar</button>
                      </div>
                  <!-- <div class="form-group">
                      <label class="required" for="">Longitude:</label>
                      <input  class="k" type="bigint" name="data[]" placeholder="Longitude" value="">
                  </div> -->
              </div>
              <div class="content-form">
<!--
                  <div class="form-group">
                      <label class="required" for="">Latitude:</label>
                      <input  class="k" type="bigint" name="data[]" placeholder="Latitude" class="noda">
                  </div> -->
              </div>
          </form>
          <!-- <h1>the record is missing</h1> -->
        </div>
      </div>
      <!-- Supermercado-->
      <!-- ----------------->
      <div id="Supermercados" class="contentfo">
        <h3>Supermercados</h3>
        <table id="dataGrid">
            <thead class="tittledatag">
                <tr>

                    <td>Nombre</td>
                    <td>Direccion</td>
                    <td>Teléfono</td>
                    <td>Aciones</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $item =1;
                foreach($this->readAllSup() as $row){?>
                <tr>
                    <td><?php echo $row["nom_sup"] ;?></td>
                    <td><?php echo $row["dir_sup"] ;?></td>
                    <td><?php echo $row["tel_sup"] ;?></td>
                    <td>
                        <a href="#" class="abrirmodal"><i class="fa fa-pencil"></i> Editar</a>
                        <a href="#"class=""id="opendet"><i class="fa fa-eye"></i> Detalles</a>
                        <a href="eliminar-supermercado-<?php echo $row['id_sup'];?>"><i class="fa fa-trash"></i> Eliminar</a>
                    </td>
                </tr>
                <?php
                $item++;
                    }
                    ?>
            </tbody>
        </table>
        <div id="fondo"></div>
        <div id="wrapmodal">
            <div id="modaldet">
                <div class="wrap-tit">
                    <h3>Detalle</h3>
                    <i id="closeCate"  class="close">&times;</i>
                </div>
                <div class="wrap-bod">
                    <label for="">Nombre: <?php echo ['nom_sup']; ?></label>
                    <label for="">Direccion: <?php echo ['dir_sup']; ?></label>
                    <label for="">Teléfono: <?php echo ['tel_sup']; ?></label>
                    <img src="views/assets/imge/super/<?php echo ['logo_sup']; ?>" alt="">
                </div>

            </div>
        </div>


      </div>
        <!-- Categoria -->
        <!-- ----------------->
      <div id="Categorias" class="contentfo">
        <h3>Categorías</h3>
        <button type="button" id="openCate" name="button">Nueva categoría</button>
        <p>Aca se mostraran las Categorias Registradas.</p>
        <div id="fondo"></div>
        <div id="wrapmodal">
            <div id="modal">
                <div class="wrap-tit">
                    <h1>Nueva Categoría</h1>
                    <i id="closeCate"  class="close">&times;</i>
                </div>
                <div class="wrap-bod">
                    <div class="form-group">
                        <form  action="" method="post">
                            <label class="required" for="">Nombre de la categoría:</label>
                            <input class="k" type="text" name="" value="" placeholder="Nombre"><br>
                            <button type="submit" name="button">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- <table id="dataGrid">
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

                <tr>
                    <td>Juan Carlos</td>
                    <td>Muños Munera</td>
                    <td>323</td>
                    <td>JuanM@gmail.com</td>
                    <td>
                        <a href="#" class=""><i class="fa fa-pencil"></i>Editar</a>
                        <a href="#"class=""id=""><i class="fa fa-info"></i>Detalles</a>
                        <a href="#"><i class="fa fa-trash"></i>Eliminar</a>
                    </td>
                </tr>
                <tr>
                    <td>Debora</td>
                    <td>Cabezas</td>
                    <td>255555</td>
                    <td>DeboraC@gmail.com</td>
                    <td>
                        <a href="#" class=""><i class="fa fa-pencil"></i>Editar</a>
                        <a href="#"class=""id=""><i class="fa fa-info"></i>Detalles</a>
                        <a href="#"><i class="fa fa-trash"></i>Eliminar</a>
                    </td>
                </tr>
                <tr>
                    <td>Aquiles</td>
                    <td>Brinco</td>
                    <td>3014561</td>
                    <td>Aquiles@gmail.com</td>
                    <td>
                        <a href="#" class=""><i class="fa fa-pencil"></i>Editar</a>
                        <a href="#"class=""id=""><i class="fa fa-info"></i>Detalles</a>
                        <a href="#"><i class="fa fa-trash"></i>Eliminar</a>
                    </td>
                </tr>

            </tbody>
        </table> -->
      </div>
      <!-- Productos -->
      <!-- ----------------->
      <div id="Productos" class="contentfo">
        <h3>Productos</h3>
      </div>

</div>
