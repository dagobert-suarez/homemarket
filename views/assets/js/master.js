var contraseña = "nosevea";
var password = document.getElementById('pass');
var boton2 = document.getElementById('boton2');
var content = document.getElementById('content');
var close = document.getElementById('close');
var cero =

content.onclick = function(){
  var nose = password.value
  if (nose === ''){
    alert("El campo esta vacío");
  }else {

  }
}
content.onclick = function(){
  var validar = password.value;
  if (validar ==='') {
    alert("!El Campo esta vacío Intente nuevamente¡");
  }else {
    if(validar == contraseña ) {
      boton2.style.display = "block";
      boton3.style.display = "block";
      close.style.display = "block";

    }else {
      alert("la contraseña es incorrecta");
  }
    }
};

close.onclick = function(){
  boton2.style.display = "none";
  boton3.style.display = "none";
  close.style.display = "none";
  window.location.href='Contenido2';
};
