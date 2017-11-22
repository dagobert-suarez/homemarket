<section class="setregistrarse" id="registro">
<div class="formpart">
	<h1 class="regis">Registrate en homemarket</h1>
	<form id="frmregistro" method="post" action="nuevo-cliente">
		<div class="form-gruop">
			<label  class=" required" for="">Numero de documento:</label>
			<input type="number" name="data[]" placeholder="documento identidad" required>
		</div>
	<div class="content-form">
		<div class="form-gruop">
			<label  class=" required" for="">Nombre:</label>
			<input type="text" name="data[]" class="pitp" required>
		</div>
		<div class="form-gruop">
				<label  class=" required" for="">Apellido</label>
				<input type="text" name="data[]" class="pitp" required>
		</div>
	</div>

	<div class="content-form">
		<div class="form-gruop">
			<label  class=" required" for="">	Fecha de nacimiento</label>
			<input type="date" name="data[]" required>
		</div>
		<div class="form-gruop">
			<label  class=" required" for="">Genero</label>
			<select name="data[]" required>
				<option value="m">Hombre</option>
				<option value="f">Mujer</option>
				<option value="o">Otro</option>
			</select>
		</div>

	</div>
	<div class="content-form">
		<div class="form-gruop">
			<label  class=" opcional" for="">	celular</label>
			<input type="bigint" name="data[]">
		</div>
		<div class="form-gruop">
			<label  class=" opcional" for="">telefono</label>
			<input type="number" name="data[]">
		</div>
</div>
	<div class="form-gruop">
		<label  class=" required" for="">correo</label>
		<input type="email" name="data[]" placeholder="correo" required>
	</div>

	<div class="form-gruop">
			<label  class=" required" for="">ciudad</label>
			 <select name="data[]" class="city">
			 <option value=""></option>
				 <?php
				 foreach ($this->userModel->readCities() as $row){
					 echo "<option value='$row[0]'>$row[1]</option>";
				 }
				 ?>
			 </select>
	</div>

	<div class="form-gruop">
				<label  class="required" for="">contraseña</label>
				<input type="password" name="data[]" id=password required>
	</div>
	<div class="form-gruop">
				<label  class="required" for="">verificar contraseña</label>
				<input type="password" name="rpassword" id="rpassword" required>
	</div>
	<div class="form-gruop">
			<label  class=" required" for="">crear cuenta como</label>
			 <select name="data[]" class="city">
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

		<button type="button" name="registrar" class="btntnt" onclick="miFuncion()">Registrarse</button>
	</form>
</div>
<div class="formtext ">
	<h1 class="tlt ">
	  EMPIEZA UNA EXPERIENCIA CON HOME MARKET
	</h1>
	<div class="text-inf ">
		<p>Crea tú cuenta y empieza a disfrutar de todos nuestros beneficios.</p>
	</div>
<a href="registrosuper">registrarse como supermercado</a>
</div>
</section>
