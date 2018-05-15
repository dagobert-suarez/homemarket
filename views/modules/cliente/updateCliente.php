<!-- empieza lo de los ajustes -->
<?php
// $data = $this->readBy($_SESSION['USER']['rol']);
    $data = $this->readbyusu();
?>
<div class="module--Sett">
    <header >
        <h1 class="sett">Ajustes <i class="fa fa-gears"></i></h1>

    </header>
    <div class="wrap-form">
      <?php
        if (isset($_SESSION['message'])) {
         echo $_SESSION['message'];
         unset($_SESSION['message']);
        }
      ?>
        <!-- <p>Actualizar la contraseña, los datos personales</p> -->
        <label for="">Correo: <?php echo $data["email_usu"]; ?></label>
        <form  action="actualizar-datosCli" method="post">
            <div class="form-group">
                <label for="">Nombre:</label>
                <input type="text" name="data[]" value="<?php echo $data['nom_usu'];?>" placeholder="Nombre">

            </div>
            <div class="form-group">
                <label for="">Apellido:</label>
                <input type="text" name="data[]" value="<?php echo $data['ape_usu']?>" placeholder="Apellido">

            </div>
            <div class="form-group">
                <label for="">Fecha de Nacimiento:</label>
                <input type="date" name="data[]" value="<?php echo $data['fec_nac_usu']?>" >

            </div>
            <div class="form-group">
                <label for="">Telefono o Celular:</label>
                <input type="number" name="data[]" value="<?php echo $data['tel_usu']?>" >
            </div>
            <div class="form-group">
                <button type="submit" name="button" class="btnact">Actualizar</button>
            </div>
        </form>
        <form  action="nueva-contrasena" method="post">
              <div class="form-group">
                <label  class="required" for="">Contraseña Actual:</label>
                <input type="password" name="dataCon[]" class=""placeholder="contraseña" value="" required>

              </div>
              <div class="form-group">
                <label for="">Contraseña:</label>
                <input type="password" name="dataCon[]" value="" placeholder="contraseña" required>

              </div>
              <div class="form-group">
                <label for=""> Validar Contraseña:</label>
                <input type="password" name="dataCon[]" value="" placeholder="contaseña" required>
              </div>
              <button type="submit" name="button" class="btnact">Cambiar</button>

        </form>


    </div>

</div>
<!-- terminan los ajustes -->
