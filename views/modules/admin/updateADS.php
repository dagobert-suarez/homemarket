<!-- empieza lo de los ajustes -->
<?php
 // $data = $this->readById($_SESSION['USER']['rol']);
$dataUser = $this->readBy($_GET["data"]);
?>
<div class="module--Sett">
    <header >
        <h1 class="sett">Ajustes <i class="fa fa-gears"></i></h1>

    </header>
    <div class="wrap-form">
        <!-- <p>Actualizar la contraseña, los datos personales</p> -->
        <form  action="actualizar-datos" method="post">
            <div class="content-form">
                <div class="form-group">
                    <label for="">Nombre:</label>
                    <input  class="k" type="text" name="data[]" value="<?php echo $dataUser['nom_usu']?>" placeholder="Nombre">

                </div>
                <div class="form-group">
                    <label for="">Apellido:</label>
                    <input class="k" type="text" name="data[]" value="<?php echo $dataUser['ape_usu']?>" placeholder="Apellido">

                </div>
            </div>
            <div class="content-form">
                <div class="form-group">
                    <label for="">Fecha de Nacimiento:</label>
                    <input class="k" type="date" name="data[]" value="<?php echo $dataUser['fec_nac_usu']?>" >

                </div>
                <div class="form-group">
                    <label for="">Telefono o Celular:</label>
                    <input class="k" type="number" name="data[]" value="<?php echo $dataUser['tel_usu']?>" >
                </div>
            </div>

            <div class="form-group">
               <label  class="required" for="">Ciudad:</label>
               <select class="k" name="data[]" value="<?php echo $dataUser["cod_ciu"];?>">
                 <?php
                 foreach ($this->userModel->readCities() as $row) {
                   if ($dataUser['cod_ciu']==$row['cod_ciu']) {
                     echo "<option value='$row[0]' selected>$row[1]</option>";
                   }else{
                     echo "<option value='$row[0]'>$row[1]</option>";
                   }
                 }
                 ?>
               </select>
           </div>

            <div class="content-form">
                <div class="form-group">
                    <button type="submit" name="button" class="btnact">Actualizar</button>
                </div>
            </div>
        </form>
        <!-- <h1>Contraseña</h1>
            <div class="content-form2">
                <div class="form-group2">
                    <label  class="required" for="">Contraseña Actual:</label>
                    <input class="k" type="password" name="" class=""placeholder="contraseña" value="">
                </div>
                <div class="form-group2">
                    <label for="">Contraseña:</label>
                    <input class="k" type="password" name="" value="" placeholder="contraseña">
                </div>
                <div class="form-group2">
                    <label for=""> Validar Contraseña:</label>
                    <input  class="k" type="password" name="" value="" placeholder="contaseña">
                </div>
            </div> -->

    </div>

</div>
<!-- terminan los ajustes -->
