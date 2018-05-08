<?php
  $dataProduct = $this->readByIdproc($_GET["data"]);

    // $datos = array($_GET["data"], $_GET["data2"]);
    // $data = $this->readByproc($datos[0]);

 ?>
 <!-- <p>uniMed_pro,valVen_pro,img_pro</p> -->


 <header>
   <h1>Actualizar Producto</h1>
 </header>

 <div class="content">
   <form class="" action="actualizando-producto" method="post" enctype="multipart/form-data">
     <label for="" class="see" >Id del producto: <?php echo $_GET["data"]; ?></label>
        <!-- <input type="text" readonly name="data[]" value="<?php echo $_GET["data"]; ?>"> -->


        <div class="content-form">
            <div class="form-group">
              <label for="" class="required">Nombre del Producto:</label>
              <input type="text" class="k" name="data[]" value="<?php echo $dataProduct["nom_pro"];?>">
            </div>

            <div class="form-group">
              <label for=""class="opcional">Contenido:</label>
              <input type="number" name="data[]" class="k" ><?php echo $dataProduct["cont_pro"];?></textarea>
            </div>

        </div>

        <div class="content-form">
         <div class="form-group">
           <label for=""class="required">Marca de el Producto:</label>
           <input type="text" class="k" name="data[]" value="<?php echo $dataProduct["mar_pro"];?>">
         </div>

         <div class="form-group">
           <label for=""class="required">Cantidad del producto:</label>
           <input class="k" type="number"  name="data[]" value="<?php echo $dataProduct["can_pro"];?>">
         </div>

       </div>

       <div class="content-form">
         <div class="form-group">
           <label for="" class="required">Unidad medida:</label>
           <select name="data[]" class="ks" value="<?php echo $dataProduct["uniMed_pro"];?>">
             <option value="kg">kg</option>
             <option value="lb">lb</option>
             <option value="gr">gr</option>
             <option value="lts">lts</option>
           </select>
         </div>

         <div class="form-group">
           <label for="" class="required">Valor venta:</label>
           <input type="number"class="k" name="data[]"  value="<?php echo $dataProduct["valVen_pro"] ?>">
         </div>
       </div>

      <div class="content-form">
        <div class="form-group">
          <label for="" class="required">Categoria del Producto:</label>
          <select class="product" name="data[]" value="<?php echo $dataProduct["id_tip_pro"];?>">
            <option value=""></option>
            <?php
            foreach ($this->product->readCategory() as $row) {
              if ($dataProduct['id_tip_pro']==$row['id_tip_pro']) {
                echo "<option value='$row[0]' selected>$row[1]</option>";
              }else{
                echo "<option value='$row[0]'>$row[1]</option>";
              }
            }
              ?>
            </select>
          </div>

          <label for="">Imagen producto:</label>
          <input type="file" name="file" value=""><br><br>

          <div class="form-group">
            <button type="submit" name="button" class="btnact">Actualizar</button>
          </div>
      </div>


   </form>

</div>
