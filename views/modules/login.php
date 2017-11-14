<div id="loginmodal" class="login--form">
	<form  class="modal-content" method="POST" action="validar" >
		<h4>Iniciar sesion</h4>
		<div class="container-form">
			<label class="required" for=""><b>Correo</b></label>
			<input  type="email" name="email" placeholder="correo" required>
		</div>
		<div class="container-form">
			<label   class="required"for=""><b>Contraseña</b></label>
			<input type="password" name="contra" placeholder="contraseña" required>
			<button class="btnsave" >entrar</button>
		</div>
	</form>
</div>
<!-- <?php
// echo password_hash("9909", PASSWORD_DEFAULT);
?> -->
