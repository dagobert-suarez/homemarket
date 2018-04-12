<?php
    $datos = array($_GET["data"], $_GET["data2"]);
    $data = $this->readByproc($datos[0]);

 ?>
 <h1>Actualizar Producto</h1>
 <form class="" action="actualizando-producto" method="post" enctype="multipart/form-data">
     <label for="">Nombre de la Producto:</label>
     <input type="text" name="data[]" value="<?php echo $data["nom_pro"];?>">
     <label for="">descripcion de la Producto:</label>
     <input type="text" name="data[]" value="<?php echo $data["des_pro"];?>">
     <label for="">Marca de la Producto:</label>
     <input type="text" name="data[]" value="<?php echo $data["mar_pro"];?>">
     <label for="">descripcion de la Producto:</label>
     <input type="text" name="data[]" value="">
     <button type="submit" name="button">Actualizar</button>
 </form>
 <textarea name="name" rows="8" cols="80"></textarea>
