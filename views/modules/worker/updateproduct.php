<?php
    $datos = array($_GET["data"], $_GET["data2"]);
    $data = $this->readByproc($datos[0]);

 ?>
 <h1>Actualizar Producto</h1>
 <p>uniMed_pro,valVen_pro,img_pro</p>
 <form class="" action="actualizando-producto" method="post" enctype="multipart/form-data">
     <label for="">Nombre de la Producto:</label>
     <input type="text" name="data[]" value="<?php echo $data["nom_pro"];?>">
     <label for="">descripcion de la Producto:</label>
     <textarea type="text" name="data[]" value="<?php echo $data["des_pro"];?>"></textarea>
     <label for="">Marca de la Producto:</label>
     <input type="text" name="data[]" value="<?php echo $data["mar_pro"];?>">
     <label for="">categoria de la Producto:</label>
     <select class="product" name="data[]" value="">
       <option value=""></option>
       <?php
       foreach ($this->product->readCategory() as $row) {
         echo "<option value='".$row['id_tip_pro']."'>".$row['nom_tip_pro']."</option>";
         }
       ?>
   </select>
     <label for="">Cantidad producto:</label>
     <input type="number" name="data[]" value="<?php echo $data["can_pro"];?>">
     <label for="">Unidad medida:</label>
     <select class="" name="data[]">
       <option value="">kg</option>
       <option value="">lb</option>
       <option value="">gr</option>
       <option value="">lts</option>
     </select>
     <label for="">Valor venta:</label>
     <input type="number" name="data[]"  value="<?php echo $data["valVen_pro"] ?>">

     <label for="">Imagen producto:</label>
     <input type="file" name="data[]" value="<?php echo $data["img_pro"] ?>"><br><br>
     <button type="submit" name="button">Actualizar</button>
 </form>
