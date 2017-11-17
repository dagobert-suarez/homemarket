
<div id="loginmodal" class="login--form">
	<form  class="modal-content anima" method="POST" action="validar" >
		<div class="container-img">
			<span id="close" class="close" >&times;</span>
			<h1>Iniciar sesion</h1>
		</div>
		<div class="container-form">
			<label class="required" for=""><b>Correo</b></label>
			<input  type="email" name="email" placeholder="correo" required>
		</div>
		<div class="container-form">
			<label   class="required"for=""><b>Contraseña</b></label>
			<input type="password" name="contra" placeholder="contraseña" required>
		</div>
			<div class="botns">
				<button class="btnsave" >entrar</button>
				<button class="btnsave" >registrarse</button>
			</div>
	</form>
</div>

<!-- <?php
// echo password_hash("9909", PASSWORD_DEFAULT);
?> -->
