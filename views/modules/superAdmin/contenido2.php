<h1>Contenido 2</h1>

<input type="text" name="" value="" id="pass">
<button type="button" name="button" id="content">Mostar-Contenido</button>
<button type="button" name="button" id="boton2"><a href="bajar">Exportar</a></button>
<!-- <a href="bajar archivo">Exportar</a> -->
<button type="button" name="button" id="boton3">importar</button>

<script type="text/javascript">
var contraseña = "nosevea";
var password = document.getElementById('pass');
var boton2 = document.getElementById('boton2');
var content = document.getElementById('content');

content.onclick = function(){
  var validar = password.value
    if(validar == contraseña ) {
      boton2.style.display = "block";
      boton3.style.display = "block";
  }else {
    alert("la contraseña es incorrecta");
  }

}



</script>
