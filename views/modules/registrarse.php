<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<section class="setregistrarse" id="registro">
<div class="formpart">
	<h1 class="regis">Registrate en Homemarket</h1>
	<form method="post" action="nuevo-cliente">
		<div class="content-form">
			<div class="form-gruop">
				<label  class=" required" for="">Numero de documento:</label>
				<input type="number" name="data[]" placeholder="documento identidad" required>
			</div>
		</div>
	<div class="content-form">
		<div class="form-gruop">
			<label  class=" required" for="">Primer Nombre:</label>
			<input type="text" name="data[]" placeholder="nombre" class="" required>
		</div>
		<div class="form-gruop">
			<label  class=" opcional" for="">Segundo Nombre</label>
			<input type="text" name="data[]" placeholder="Segundo nombre" class="">
		</div>
	</div>
	<div class="content-form">
		<div class="form-gruop">
				<label  class=" required" for="">Primer Apellido</label>
				<input type="text" name="data[]" placeholder="apellido" class="" required>
		</div>
		<div class="form-gruop">
					<label  class=" opcional" for="">Segundo Apellido</label>
					<input type="text" name="data[]" placeholder="Segundo apellido" class="">
		</div>
	</div>
<div class="content-form">
		<div class="form-gruop">
				<label  class=" required" for="">Genero</label>
				<select name="data[]"  class="gender" placeholder="Genero" required>
					<option value="m">Hombre</option>
					<option value="f">Mujer</option>
					<option value="o">Otro</option>
				</select>
		</div>
	<div class="form-gruop">
		<label  class=" required" for="">	Fecha de nacimiento</label>
		<input type="date" name="data[]" class="gender" placeholder="fecha nacimiento" required>
	</div>
</div>
	<div class="content-form">
			<div class="form-gruop">
					<label  class=" required" for="">	celular</label>
					<input type="number" name="data[]" placeholder="Numero celular" required>
			</div>
			<div class="form-gruop">
					<label  class="opcional" for="">telefono</label>
					<input type="number" name="data[]" placeholder="Numero telefono">
			</div>
	</div>
	<div class="form-gruop">
		<label  class=" required" for="">correo</label>
		<input type="email" class="emailform" name="data[]" placeholder="correo" required>
	</div>
	<div class="form-gruop">

			<label  class=" required" for="">ciudad</label>
			 <select name="data[]" placeholder="codigo de la ciudad">
			 <option value=""></option>
				 <?php
				 foreach ($this->userModel->readCities() as $row){
					 echo "<option value='$row[0]'>$row[1]</option>";
				 }
				 ?>
			 </select>
	</div>

	<div class="form-gruop">

		<label  class=" required" for="">ciudad</label>
		<select name="data[]"  class="city">
			<?php
			foreach ($this->userModel->readCities() as $row){
				echo "<option value='$row[0]'>$row[1]</option>";
			}
			?>
		</select>
	</div>

	<div class="content-form">
			<div class="form-gruop">

				<label  class="required" for="">contraseña</label>
				<input type="password" name="data[]" placeholder="contraseña" required>
			</div>
			<div class="form-gruop">
				<label  class="required" for="">verificar contraseña</label>

				<input type="password" name="rpassword" placeholder="verificar contraseña" required>

				<input type="password" name="data[]" placeholder="verificar contraseña" required>
			</div>

	</div>
	<div class="form-gruop">
		<button type="submit" name="registrar" class="btntnt">Registrarse</button>
	</div>
	</form>
</div>
<div class="formtext">
	<h1 class="tlt">
	  EMPIEZA UNA EXPERIENCIA CON HOME MARKET
	</h1>
	<div class="text-inf">
		<p>Crea tú cuenta y empieza a disfrutar de todos nuestros beneficios.</p>
	</div>
<a href="registrosuper">registrarse como supermercado</a>
</div>
</section>
