<div class="setregistrarse" id="registro">
	<div class="formtext ">
		<h1 class="tlt">
			EMPIEZA UNA EXPERIENCIA CON HOME MARKET
		</h1>
		<div class="text-inf ">
			<p>Crea tú cuenta y empieza a disfrutar de todos nuestros beneficios.</p>
		</div>
		<!-- <a href="registrosuper">registrarse como supermercado</a> -->

	</div>
<div class="formpart">
	<h1 class="regis">Registrate en homemarket</h1>
	<form id="frmregistro" >
		<div class="form-gruop">
			<label  class="required"  for="">Numero de documento:</label>
			<input type="number" name="data[]" class="" id="documento" required>
		</div>
	<div class="content-form">
		<div class="form-gruop">
			<label  class="required"  for="">Nombre:</label>
			<input type="text" name="data[]" id="nombre" class="pitp" required>
		</div>
		<div class="form-gruop">
				<label  class="required"  for="">Apellido</label>
				<input type="text" name="data[]" id="Apellido" class="pitp" required>
		</div>
	</div>

	<div class="content-form">
		<div class="form-gruop">
			<label  class="required"  for="">	Fecha de nacimiento</label>
			<input type="date" name="data[]" id="fecha" class="dte" >
		</div>
		<div class="form-gruop">
			<label  class="required gender" id="genero" for="">Genero</label>
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
			<input type="number" name="data[]" class="" id="celular">
		</div>
		<div class="form-gruop">
			<label  class="opcional"  for="">telefono</label>
			<input type="number" name="data[]" class="" id="telefono">
		</div>
</div>
	<div class="form-gruop">
		<label  class="required"  for="">correo</label>
		<input type="email" name="data[]" class="" id="correo" placeholder="Correo" >
	</div>

	<div class="form-gruop">
			<label  class="required"  for="">ciudad</label>
			 <select name="data[]" class="city " id="ciudad">
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
				<input type="password" name="data[]" class="" id="password" >
	</div>
	<div id="mensaje"></div>
	<div class="form-gruop">
				<label  class="required" for="">verificar contraseña</label>
				<input type="password" name="rpassword" id="rpassword" >
	</div>
	<div class="form-gruop">
			<label  class=" required" for="">crear cuenta como</label>
			 <select name="data[]"  class="city" >
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
</div>
