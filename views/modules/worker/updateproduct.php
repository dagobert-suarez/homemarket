<?php
  $dataProduct = $this->readByIdproc($_GET["data"]);

    // $datos = array($_GET["data"], $_GET["data2"]);
    // $data = $this->readByproc($datos[0]);

 ?>
 <h1>Actualizar Producto</h1>
 <!-- <p>uniMed_pro,valVen_pro,img_pro</p> -->
 <form class="" action="actualizando-producto" method="post" enctype="multipart/form-data">
     <label for="">Nombre de la Producto:</label>
     <input type="text" name="data[]" value="<?php echo $dataProduct["nom_pro"];?>">
     <label for="">descripcion del Producto:</label>
     <textarea name="data[]" ><?php echo $dataProduct["des_pro"];?></textarea>
     <!-- <label for="">Imagen producto:</label>
     <input type="file" name="data[]" value="<?php echo $dataProduct["img_pro"] ?>"><br><br> -->
     <label for="">Marca de la Producto:</label>
     <input type="text" name="data[]" value="<?php echo $dataProduct["mar_pro"];?>">
     <label for="">Cantidad producto:</label>
     <input type="number" name="data[]" value="<?php echo $dataProduct["can_pro"];?>">
     <label for="">Unidad medida:</label>
     <select name="data[]"  value="<?php echo $dataProduct["uniMed_pro"];?>">
       <option value="kg">kg</option>
       <option value="lb">lb</option>
       <option value="gr">gr</option>
       <option value="lts">lts</option>
     </select>
     <label for="">Valor venta:</label>
     <input type="number" name="data[]"  value="<?php echo $dataProduct["valVen_pro"] ?>">

     <label for="">categoria de la Producto:</label>
     <select class="product" name="data[]" value="<?php echo $dataProduct["id_tip_pro"];?>"> -->
       <option value=""></option>
       <?php
       foreach ($this->product->readCategory() as $row) {
         echo "<option value='".$row['id_tip_pro']."'>".$row['nom_tip_pro']."</option>";
       }
       ?>
     </select>

     <input type="text" readonly name="data[]" value="<?php echo $_GET["data"]; ?>">
     <button type="submit" name="button">Actualizar</button>
 </form>
