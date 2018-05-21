<?php
  $dataEmp = $this->readByIdEm($_GET["data"]);
 ?>
 <div class="szs">
   <form id="frmworker" method="post" action="nuevo-empleado">
       <div class="content-form">
             <div class="form-group">

                 <label class="required" for="">Nombre del Empleado:</label>
                 <input class="k"  type="text" name="data[]"  value="<?php echo $dataEmp["nom_usu"]; ?>">
             </div>
             <div class="form-group">
                 <label class="required" for="">Apellidos del Empleado:</label>
                 <input  class="k" type="text" name="data[]"  value="">
             </div>
       </div>
       <div class="content-form">
           <div class="form-group">
               <label class="required" for="">Fecha de Nacimiento:</label>
               <input  class="k" type="date" name="data[]" value="">
           </div>
           <div class="form-group">
               <label class="required" for="">Genero:</label>
               <select class="ks" name="data[]">
                   <option value="m">Hombre</option>
                   <option value="f">Mujer</option>
                   <option value="o">Otro</option>
               </select>
           </div>
       </div>
       <div class="content-form">
           <div class="form-group">
               <label class="required" for="">Teléfono:</label>
               <input  class="k" type="number" name="data[]"  value="" id="telefono">
           </div>
           <div class="form-group">
               <label class="required" for="">Correo del Empleado:</label>
               <input  class="k" type="email" name="data[]"  value="" id="correo">
           </div>
       </div>
       <div class="content-form">
           <div class="form-group">
               <label class="required" for="">Ciudad:</label>
               <select class="ks" name="data[]">
                   <?php
                   foreach ($this->userModel->readCities() as $row){
                       echo "<option value='$row[0]'>$row[1]</option>";
                   }
                   ?>
               </select>
           </div>
           <div class="form-group">
               <label class="required" for="">Contraseña:</label>
               <input  class="k" type="password"  name="data[]" value="" placeholder="Contraseña" class="noda" id="password">
           </div>
           <!-- <div class="form-gruop">
                 <label  class="required" for="">verificar contraseña</label>
                 <input type="password" name="rpassword" id="rpassword"  placeholder="Minimo(8) caracteres, incluir almenos un numero y una Mayuscula">
           </div> -->
       </div>
       <div class="content-form">
           <div class="form-group">
               <label  class="required" for="">Rol:</label>
               <select class="ks" name="data[]">
                   <?php

                   foreach ($this->userModel->readRolWorker() as $row){
                       echo "<option value='$row[0]'>$row[1]</option>";
                   }
                   ?>
               </select>
           </div>

           <input type="hidden" readonly name="data[]" value="<?php echo $_GET["data"]; ?>">

           <div class="form-group">
               <button type="submit" name="button" class="btntnt">Actualizar</button>
           </div>
         </div>
   </form>
 </div>
