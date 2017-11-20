<section class="setregistrarse" id="registro">
<div class="formpart">
	<h1 class="regis">Registrate en homemarket</h1>
	<form method="post" action="nuevo-cliente">
		<div class="form-gruop">
			<label  class=" required" for="">Numero de documento:</label>
			<input type="number" name="data[]" placeholder="documento identidad" required>
	</div>
	<div class="content-form">
		<div class="form-gruop">
			<label  class=" required" for="">Primer Nombre:</label>
			<input type="text" name="data[]" placeholder="nombre" class="pitp" required>
		</div>
		<div class="form-gruop">
			<label  class=" opcional" for="">segundo Nombre</label>
			<input type="text" name="data[]" placeholder="segundo nombre" class="pitp">
		</div>
	</div>
	<div class="content-form">
	<div class="form-gruop">
			<label  class=" required" for="">Primer Apellido</label>
			<input type="text" name="data[]" placeholder="apellido" class="pitp" required>
	</div>
	<div class="form-gruop">
				<label  class=" opcional" for="">segundo Apellido</label>
				<input type="text" name="data[]" placeholder="segundo apellido" class="pitp">
	</div>
</div>
	<div class="form-gruop">
		<label  class=" required" for="">	Genero</label>
		<input type="text" name="data[]" placeholder="Genero" required>

	</div>
	<div class="">
		<label  class=" required" for="">	Fecha de nacimiento</label>
		<input type="date" name="data[]" placeholder="fecha nacimiento" required>
	</div>
	<div class="content-form">
		<div class="form-gruop">
			<label  class=" required" for="">	celular</label>
			<input type="number" name="data[]" placeholder="n celular" required>
		</div>
		<div class="form-gruop">
			<label  class=" opcional" for="">telefono</label>
			<input type="number" name="data[]" placeholder="n telefono">
		</div>
</div>
	<div class="form-gruop">
		<label  class=" required" for="">correo</label>
		<input type="email" name="data[]" placeholder="correo" required>
	</div>
	<div class="form-gruop">
			<label  class=" required" for="">cod ciudad</label>
			<input type="number" name="data[]" placeholder="codigo de la ciudad" required>
	</div>
	<div class="form-gruop">
			<label  class=" required" for="">ciudad</label>
			 <select name="data[]" placeholder="codigo de la ciudad">
<<<<<<< HEAD
			 <option value=""></option>
=======
				 <?php
				 foreach ($this->userModel->readCities() as $row){
					 echo "<option value='$row[0]'>$row[1]</option>";
				 }
				 ?>
>>>>>>> 0ee1de089005ee22dea89122adfa4aa0e2078eba
	</div>
	<div class="form-gruop">
				<label  class="required" for="">contraseña</label>
				<input type="password" name="data[]" placeholder="contraseña" required>
	</div>
		<button type="submit" name="registrar" class="btntnt">Registrarse</button>
	</form>
</div>
<div class="formtext">
	<h1 class="tlt">
	  EMPIEZA UN EXPERIENCIA CON HOME MARKET
	</h1>
	<div class="text-inf">
		<p>Crea tú cuenta y empieza a disfrutar de todos nuestros beneficios.</p>
	</div>
</div>
</section>
