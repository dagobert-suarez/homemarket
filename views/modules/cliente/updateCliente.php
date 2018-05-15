<!-- empieza lo de los ajustes -->
<?php
// $data = $this->readBy($_SESSION['USER']['rol']);
    $data = $this->readbyusu();
?>
<div class="module--Sett">
    <div class="wrap-form">
      <header >
        <h1 class="sett">Ajustes <i class="fa fa-gears"></i></h1>

      </header>
      <?php
        if (isset($_SESSION['message'])) {
         echo $_SESSION['message'];
         unset($_SESSION['message']);
        }
      ?>
        <!-- <p>Actualizar la contraseña, los datos personales</p> -->

        <form  action="actualizar-datosCli" method="post">
          <!-- <div class="content-form"> -->
            <div class="form-group">
                <label for="">Nombre:</label>
                <input type="text" name="data[]" class="k" value="<?php echo $data['nom_usu'];?>" >

            </div>
            <div class="form-group">
                <label for="">Apellido:</label>
                <input type="text" name="data[]" class="k"  value="<?php echo $data['ape_usu']?>">

            </div>
          <!-- </div> -->
            <div class="form-group">
                <label for="">Fecha de Nacimiento:</label>
                <input type="date" name="data[]" class="k" value="<?php echo $data['fec_nac_usu']?>" >

            </div>
            <div class="form-group">
                <label for="">Telefono o Celular:</label>
                <input type="number" name="data[]" class="kn" value="<?php echo $data['tel_usu']?>" >
            </div>
            <div class="form-group">
                <button type="submit" name="button" class="btnact">Actualizar</button>
            </div>
        </form>
        <form  action="nueva-contrasena" method="post">
              <div class="form-group">
                <label  class="required" for="">Contraseña Actual:</label>
                <input type="password" name="dataCon[]" class="k" placeholder="contraseña" value="">

              </div>
              <div class="form-group">
                <label for="">Contraseña:</label>
                <input type="password" name="dataCon[]"  class="k" placeholder="contraseña" value="">

              </div>
              <div class="form-group">
                <label for=""> Validar Contraseña:</label>
                <input type="password" name="dataCon[]" class="k"  placeholder="contaseña" value="">
              </div>
              <button type="submit" name="button" class="btnact">Cambiar</button>

        </form>
    </div>
    <div class="wrap--info">
      <h2>Mi Cuenta</h2>
      <label for="">Correo: <?php echo $data["email_usu"]; ?></label>
      <label for="">Nombre: <?php echo $data["nom_usu"]; ?></label>
      <label for="">Apellido: <?php echo $data["ape_usu"]; ?></label>
      <label for="">Fecha de Nacimiento: <?php echo $data["fec_nac_usu"]; ?></label>
      <label for="">Teléfono: <?php echo $data["tel_usu"]; ?></label>
    </div>

</div>
<!-- terminan los ajustes -->
