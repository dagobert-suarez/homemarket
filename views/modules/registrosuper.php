<section class="setregistrosup" id="regissup">
    <div class="formpart">
    	<h1 class="regis">Registrate en homemarket</h1>
    	<form method="post" action="nuevo-cliente">
    		<div class="form-gruop">
    			<label  class=" required" for="">Nit supermercado</label>
    			<input type="number" name="data[]" placeholder="Nit" required>
    		</div>
    	<div class="content-form">
    		<div class="form-gruop">
    			<label  class=" required" for="">Nombre supermercado:</label>
    			<input type="text" name="data[]" placeholder="Nombre supermercado" class="pitp" required>
    		</div>
    		<div class="form-gruop">
    			<label   for="">Direccion supermercado</label>
    			<input type="text" name="data[]" placeholder="Direcion" class="pitp">
    		</div>
    	</div>
    	<div class="content-form">
    		<div class="form-gruop">
    				<label  class=" required" for="">Telefono super</label>
    				<input type="number" name="data[]" placeholder="apellido" class="pitp" required>
    		</div>
    		<div class="form-gruop">
    					<label  class="required" for="">loc super</label>
    					<input type="text" name="data[]" placeholder="segundo apellido" class="pitp">
    		</div>
            <div class="form-gruop">
                        <label  class="required" for="">codigo ciudad</label>
                        <input type="number" name="data[]" placeholder="codigo ciudad" class="pitp">
            </div>
    	</div>
        <button type="submit" name="registrar" class="btntnt">Registrarse</button>
    </form>
</div>

</section>
<div id="regisupmodal" class="regigsup">
	<form  class="modal-content-sup" method="POST" action="validar" >
		<div class="container-img">
			<span id="close" class="close" >&times;</span>
			<h1 class="title">Registrarse</h1>
		</div>
		<div class="container-form">
			<label class="required" for="txtemail"><b>Nit Supermercado</b></label>
			<input  type="number" name="data[]" placeholder="Nit" required>
		</div>
    <div class="content-form">
      <div class="form-gruop">
        <label  class=" required" for="">Nombre supermercado:</label>
        <input type="text" name="data[]" placeholder="Nombre supermercado" class="pitp" required>
      </div>
      <div class="form-gruop">
        <label   for="">Direccion supermercado</label>
        <input type="text" name="data[]" placeholder="Direcion" class="pitp">
      </div>
    </div>
    <div class="content-form">
      <div class="form-gruop">
          <label  class=" required" for="">Telefono super</label>
          <input type="number" name="data[]" placeholder="apellido" class="pitp" required>
      </div>
      <div class="form-gruop">
            <label  class="required" for="">loc super</label>
            <input type="text" name="data[]" placeholder="segundo apellido" class="pitp">
      </div>
          <div class="form-gruop">
                      <label  class="required" for="">codigo ciudad</label>
                      <input type="number" name="data[]" placeholder="codigo ciudad" class="pitp">
          </div>
    </div>
			<div class="botns">
				<button type="submit" name="registrar"  class="btntntr">Registrarse</button>
			</div>
	</form>
</div>
