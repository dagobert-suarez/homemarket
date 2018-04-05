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
				<form id="frmregistro">
						<div class="content-form">
							<div class="form-gruop">
								<label  class="required"  for="">Nombre:</label>
								<input type="text" name="data[]" id="nombre" class="pitp new" placeholder="Nombre" >
							</div>
							<div class="form-gruop">
									<label  class="required"  for="">Apellido:</label>
									<input type="text" name="data[]" id="apellido" class="pitp new"placeholder="Apellido" >
							</div>
						</div>
						<div class="content-form">
							<div class="form-gruop">
								<label  class="required"  for="">Fecha de nacimiento:</label>
								<input type="date"  name="data[]" max="2000-01-01" min="1950-01-01" id="fecha" class="new" >
							</div>
							<div class="form-gruop">
								<label  class="required"  for="">Genero:</label>
								<select name="data[]" class="new" id="gender"  placeholder="Genero" >
									<option value="m">Hombre</option>
									<option value="f">Mujer</option>
									<option value="o">Otro</option>
								</select>
							</div>
						</div>
						<div class="content-form">
							<div class="form-gruop">
								<label  class="required"  for="">Teléfono:</label>
								<input type="number" name="data[]" class="new" id="telefono"  placeholder="Teléfono">
							</div>
					</div>
					<div class="form-gruop">
						<label  class="required"  for="">Correo:</label>
						<input type="text" name="data[]" class="new" id="correo" placeholder="Correo" >
					</div>
						<div class="form-gruop">
								<label  class="required"  for="">Ciudad</label>
								 <select name="data[]" class="city new" id="ciudad">


									 <?php
									 foreach ($this->userModel->readCities() as $row){
										 echo "<option value='$row[0]'>$row[1]</option>";
									 }
									 ?>

								 </select>
						</div>

						<div class="form-gruop">
									<label  class="required"  for="">Contraseña:</label>
									<input type="password" name="data[]" class="new" id="password" placeholder="Minimo(8) caracteres, incluir almenos un numero y una Mayuscula" >
						</div>
						<div id="mensaje"></div>
						<div class="form-gruop">
									<label  class="required" for="">Verificar contraseña:</label>
									<input type="password" name="rpassword" id="rpassword"  placeholder="Minimo(8) caracteres, incluir almenos un numero y una Mayuscula">
						</div>
						<div class="form-gruop">
								<label  class=" required" for="">Crear cuenta como:</label>
								 <select name="data[]"  class="city new" >
									 <?php
									 foreach ($this->userModel->readRol() as $row){
										 echo "<option value='$row[0]'>$row[1]</option>";
									 }
									 ?>
								 </select>
						</div>
					<button type="submit" class="btntnt" >Registrarse</button>
				</form>
			</div>
			</div>
