<section class="registrarse" id="registro">

	<h1 class="regis">Registrate en homemarket</h1>
	<form method="post" action="nuevo-cliente">
		<div class="form-gruop">
			<label  class=" required" for="">Numero de documento:</label>
			<input type="number" name="data[]" placeholder="documento identidad">
	</div>
	<div class="content-form">
		<div class="form-gruop">
			<label  class=" required" for="">	Primer Nombre:</label>
			<input type="text" name="data[]" placeholder="nombre">
		</div>
		<div class="form-gruop">
			<label  class=" opcional" for="">segundo Nombre</label>
			<input type="text" name="data[]" placeholder="segundo nombre">
		</div>
	</div>
	<div class="content-form">
	<div class="form-gruop">
			<label  class=" required" for="">Primer Apellido</label>
			<input type="text" name="data[]" placeholder="apellido">
	</div>
	<div class="form-gruop">
				<label  class=" opcional" for="">segundo Apellido</label>
				<input type="text" name="data[]" placeholder="segundo apellido">
	</div>
</div>
	<div class="form-gruop">
		<label  class=" required" for="">	Genero</label>
		<select class="required" name="data[]">
                          <option value="">Masculino</option>
                          <option value="">Femenino</option>
                      </select>
	</div>
	<div class="">
		<label  class=" required" for="">	Fecha de nacimiento</label>
		<input type="date" name="data[]" placeholder="fecha nacimiento">
	</div>
	<div class="content-form">
		<div class="form-gruop">
			<label  class=" required" for="">	celular</label>
			<input type="number" name="data[]" placeholder="n celular">
		</div>
		<div class="form-gruop">
			<label  class=" opcional" for="">telefono</label>
			<input type="number" name="data[]" placeholder="n telefono">
		</div>
</div>
	<div class="form-gruop">
		<label  class=" required" for="">correo</label>
		<input type="email" name="data[]" placeholder="correo">
	</div>
	<div class="form-gruop">
				<label  class=" required" for="">	cod ciudad</label>
			 <input type="number" name="data[]" placeholder="codigo de la ciudad">
	</div>
	<div class="form-gruop">
				<label  class=" required" for="">contraseña</label>
				<input type="password" name="data[]" placeholder="contraseña">
	</div>
		<button type="submit" name="registrar" class="btn">registrarse</button>
	</form>

</section>
</html>
