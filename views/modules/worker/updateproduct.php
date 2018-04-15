<?php
  $dataProduct = $this->readByIdproc($_GET["data"]);

    // $datos = array($_GET["data"], $_GET["data2"]);
    // $data = $this->readByproc($datos[0]);

 ?>
 <!-- <p>uniMed_pro,valVen_pro,img_pro</p> -->
<<<<<<< HEAD
 <form class="" action="actualizando-producto" method="post" enctype="multipart/form-data">
   
   <label for="[object Object]">Id del producto: <?php echo $_GET["data"]; ?></label>
      <!-- <input type="text" readonly name="data[]" value="<?php echo $_GET["data"]; ?>"> -->
=======
 <header>
   <h1>Actualizar Producto</h1>
 </header>
 <div class="content">

   <form class="" action="actualizando-producto" method="post" enctype="multipart/form-data">
     <label for="" class="see" >Id del producto: <?php echo $_GET["data"]; ?></label>
        <!-- <input type="text" readonly name="data[]" value="<?php echo $_GET["data"]; ?>"> -->
        <div class="content-form">
            <div class="form-group">
              <label for="" class="required">Nombre de la Producto:</label>
              <input type="text" class="k" name="data[]" value="<?php echo $dataProduct["nom_pro"];?>">
            </div>
            <div class="form-group">
              <label for=""class="opcional">Descripcion del Producto:</label>
              <textarea name="data[]" class="k" ><?php echo $dataProduct["des_pro"];?></textarea>
            </div>
        </div>
       <!-- <label for="">Imagen producto:</label>
       <input type="file" name="data[]" value="<?php echo $dataProduct["img_pro"] ?>"><br><br> -->
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
>>>>>>> 9ea94f65fe941cd3a7302d1a0b06c3ace4b9b8d1
      <div class="content-form">
        <div class="form-group">
          <label for="" class="required">Categoria del Producto:</label>
          <select class="product" name="data[]" value="<?php echo $dataProduct["id_tip_pro"];?>">
            <option value=""></option>
            <?php
            foreach ($this->product->readCategory() as $row) {
              echo "<option value='".$row['id_tip_pro']."'>".$row['nom_tip_pro']."</option>";} ?>
            </select>
          </div>
          <div class="form-group">
            <button type="submit" name="button" class="btnact">Actualizar</button>
          </div>
      </div>
<<<<<<< HEAD
     <!-- <label for="">Imagen producto:</label>
     <input type="file" name="data[]" value="<?php echo $dataProduct["img_pro"] ?>"><br><br> -->
     <div class="content-form">
       <div class="form-group">
         <label for="">Marca de la Producto:</label>
         <input type="text" class="k" name="data[]" value="<?php echo $dataProduct["mar_pro"];?>">
       </div>
       <div class="form-group">
         <label for="">Cantidad producto:</label>
         <input class="k" type="number"  name="data[]" value="<?php echo $dataProduct["can_pro"];?>">
       </div>
     </div>
     <div class="content-form">
       <div class="form-group">
         <label for="">Unidad medida:</label>
         <select name="data[]" class="ks" value="<?php echo $dataProduct["uniMed_pro"];?>">
           <option value="kg">kg</option>
           <option value="lb">lb</option>
           <option value="gr">gr</option>
           <option value="lts">lts</option>
         </select>
       </div>
       <div class="form-group">
         <label for="">Valor venta:</label>
         <input type="number"class="k" name="data[]"  value="<?php echo $dataProduct["valVen_pro"] ?>">
       </div>
     </div>
<div class="content-form">
  <div class="form-group">
    <label for="">categoria de la Producto:</label>
    <select class="product" name="data[]" value="<?php echo $dataProduct["id_tip_pro"];?>">
      <option value=""></option>
      <?php
      foreach ($this->product->readCategory() as $row) {
        echo "<option value='".$row['id_tip_pro']."'>".$row['nom_tip_pro']."</option>";} ?>
      </select>
    </div>





=======
   </form>
>>>>>>> 9ea94f65fe941cd3a7302d1a0b06c3ace4b9b8d1
</div>
