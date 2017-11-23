<div class="setregistrarse" id="registro">
<div class="formpart">
	<h1 class="regis">Registrate en homemarket</h1>
	<form id="frmregistro" >
		<div class="form-gruop">
			<label  class="required"  for="">Numero de documento:</label>
			<input type="number" name="data[]" class="new" id="documento" placeholder="documento identidad" >
		</div>
	<div class="content-form">
		<div class="form-gruop">
			<label  class="required"  for="">Nombre:</label>
			<input type="text" name="data[]" id="nombre" class="pitp new" placeholder="Nombre" >
		</div>
		<div class="form-gruop">
				<label  class="required"  for="">Apellido</label>
				<input type="text" name="data[]" id="Apellido" class="pitp new"placeholder="Apellido" >
		</div>
	</div>

	<div class="content-form">
		<div class="form-gruop">
			<label  class="required"  for="">	Fecha de nacimiento</label>
			<input type="date" name="data[]" id="fecha" class="new" >
		</div>
		<div class="form-gruop">
			<label  class="required" id="genero" for="">Genero</label>
			<select name="data[]" class="new"  placeholder="Genero" >
				<option value="m">Hombre</option>
				<option value="f">Mujer</option>
				<option value="o">Otro</option>
			</select>
		</div>

	</div>
	<div class="content-form">
		<div class="form-gruop">
			<label  class="opcional"  for="">celular</label>
			<input type="number" name="data[]" class="new" id="celular">
		</div>
		<div class="form-gruop">
			<label  class="opcional"  for="">telefono</label>
			<input type="number" name="data[]" class="new" id="telefono">
		</div>
</div>
	<div class="form-gruop">
		<label  class="required"  for="">correo</label>
		<input type="email" name="data[]" class="new" id="correo" placeholder="Correo" >
	</div>

	<div class="form-gruop">
			<label  class="required"  for="">ciudad</label>
			 <select name="data[]" class="city new" id="ciudad">
			 <option value=""></option>
				 <?php
				 foreach ($this->userModel->readCities() as $row){
					 echo "<option value='$row[0]'>$row[1]</option>";
				 }
				 ?>
			 </select>
	</div>

	<div class="form-gruop">
				<label  class="required"  for="">contraseña</label>
				<input type="password" name="data[]" class="new" id="password" >
	</div>
	<div id="mensaje"></div>
	<div class="form-gruop">
				<label  class="required" for="">verificar contraseña</label>
				<input type="password" name="rpassword" id="rpassword" >
	</div>
	<div class="form-gruop">
			<label  class=" required" for="">crear cuenta como</label>
			 <select name="data[]"  class="city new" >
			 <option value=""></option>
				 <?php
				 foreach ($this->userModel->readRol() as $row){
					 echo "<option value='$row[0]'>$row[1]</option>";
				 }
				 ?>
			 </select>
	</div>
	<div class="fomr-group" id="recaptcha">
			<div class="g-recaptcha" data-theme="dark" data-sitekey="6LdgiTkUAAAAADv4ddSh-yCAAl-j15tc1K8CAQsv"></div>
	</div>

		<button type="submit" name="registrar" id="raios" class="btntnt" >Registrarse</button>
	</form>
</div>
<div class="formtext ">
	<h1 class="tlt">
	  EMPIEZA UNA EXPERIENCIA CON HOME MARKET
	</h1>
	<div class="text-inf ">
		<p>Crea tú cuenta y empieza a disfrutar de todos nuestros beneficios.</p>
	</div>
<!-- <a href="registrosuper">registrarse como supermercado</a> -->

</div>
</div>
