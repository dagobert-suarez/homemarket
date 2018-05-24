<div class="module--worker">

    <h1>Supermercados</h1>
    <div class="tab">
        <button class="btntabs" onclick="Name(event, 'Supermercados' )"id="defaultOpen"><i class="fa fa-building"></i> Supermercados</button>
        <button class="btntabs" onclick="Name(event, 'Nuevo')" ><i class="fa fa-plus"></i> Nuevo</button>
        <button class="btntabs" onclick="Name(event, 'Categorias')"><i class="fa fa-clipboard"></i> Categorías</button>
        <!-- <button class="btntabs" onclick="Name(event, 'Productos')"><i class="fa fa-shopping-basket"></i> Productos</button> -->
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
              </div>
              <div class="content-form">
              </div>
          </form>
        </div>
      </div>

      <!-- Supermercado-->
      <!-- ----------------->
      <div id="Supermercados" class="contentfo">
        <h3>Supermercados</h3>
        <table class="dataGrid">
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
                        <a href="actualizar-super-<?php echo $row['id_sup']?>" class="abrirmodal"><i class="fa fa-pencil"></i> Editar</a>
                        <a href="#"class="detasup"id="<?php echo $row['id_sup']?>"><i class="fa fa-eye"></i> Detalles</a>
                        <a href="eliminar-supermercado-<?php echo $row['id_sup'];?>"><i class="fa fa-trash"></i> Eliminar</a>
                    </td>
                </tr>
                <?php
                $item++;
                    }
                    ?>
            </tbody>
        </table>

<!-- Detalle de supermercado -->
<!-- ---------------------------->
        <div class="fondo"></div>
        <div class="wrap-modal">
          <div class="wrap-det">
            <div class="wrap-title">
              <h2>Detalles del Supermercado</h2>
              <i id="close">&times;</i>
            </div>
            <div class="wrap-body-sup">
              <div class="wrap-image-sup">
                <img id="img-sup" alt="">
              </div>
              <div class="wrap-info-sup">
                <label for="">Nombre: <span id="nom"></span> </label>
                <label for="">Direccion: <span id="dir"></span> </label>
                <label for="">Teléfono: <span id="tel"></span> </label>
              </div>
            </div>
          </div>
        </div>


      </div>

        <!-- Categoria -->
        <!-- ----------------->
      <div id="Categorias" class="contentfo">
        <h3>Categorías</h3>
        <table  class="dataGrid" id="dataGrid">
          <button type="button" id="openCate" name="button">Nueva categoría</button>
			       <thead class="tittledatag">
        				<tr>
        					<td>#</td>
        					<td>Nombre categoria</td>
        					<td>Aciones</td>
        				</tr>
        			</thead>
        			<tbody>
        				<?php
                $item=1;
        					$data = $this->readCategory();
        					foreach ( $data as $row) {	?>
        				<tr>
        					<td><?php echo $row["id_tip_pro"] ;?></td>
        					<td><?php echo $row["nom_tip_pro"] ;?></td>
        					<td>
        						<a href="#" class="abrirmodal"><i class="fa fa-pencil"></i>Editar</a>
        						<!-- <a href="#"class="modalDet" id="modalDet"><i class="fa fa-info"></i>Detalles</a> -->
        						<a href="eliminar-cate-<?php echo $row['id_tip_pro'] ;?>"><i class="fa fa-trash"></i>Eliminar</a>
        					</td>
        				</tr>
        			<?php
              $item++;
             } ?>
        			</tbody>
		          </table>

        <!-- Modal De Nueva categoria -->
        <div id="fondo"></div>
        <div id="wrapmodal">
            <div id="modal">
                <div class="wrap-tit">
                    <h1>Nueva Categoría</h1>
                    <i id="closeCate" class="close">&times;</i>
                </div>
                <div class="wrap-bod">
                    <div class="form-group">
                        <form class="frmCat"  action="guardar-categoria" method="post">
                            <label class="required" for="">Nombre de la categoría:</label>
                            <input class="k" type="text" name="data[]" value="" placeholder="Nombre"><br>
                            <button type="submit" name="button">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

      </div>

      <!-- Productos -->
      <!-- ----------------->

      <div id="Productos" class="contentfo">
        <h3>Productos</h3>
        <button type="button" id="openPro" name="button">Nuevo Producto</button>
        <div id="ground"></div>
        <div id="wrapmodalpro">
            <div id="modalpro">

            </div>
        </div>
      </div>

</div>
