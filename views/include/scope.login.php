
<div id="loginmodal" class="login--form">
	<form  class="modal-content" method="POST" action="validar" >
		<div class="container-img">
			<span id="close" class="close" >&times;</span>
			<h1 class="title">Iniciar sesion</h1>
		</div>
		<div class="container-form">
			<label class="required" for="txtemail"><b>Correo</b></label>
			<input  type="email" name="email" placeholder="correo" required>
		</div>
		<div class="container-form">
			<label   class="required" for="txtpass"><b>Contraseña</b> </label>
			<input type="password" id="mostar"  name="contra" placeholder="contraseña" required>
			<!-- <input type="checkbox" id="show">Mostrar Cotraseña -->
			<i class="fa fa-eye" id="show"> Mostrar Contraseña</i>
		</div>

			<div class="botns">
				<!-- <i class="fa fa-eye"> Mostrar Contrseña</i> -->
				<!-- <a  href=""class="">Olvidaste tu Contraseña</a> -->
				<button class="btnsave">entrar</button>
			</div>
	</form>
</div>
