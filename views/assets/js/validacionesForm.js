// $('#frmregistro').submit(function(e){
//   e.preventDefault();
//   var nombre,apellido,gender,fecha,telefono,correo,ciudad,password,expresion;
//   nombre = document.getElementById("nombre").value;
//   apellido = document.getElementById("apellido").value;
//   gender = document.getElementById("gender").value;
//   fecha = document.getElementById("fecha").value;
//   telefono = document.getElementById("telefono").value;
//   correo = document.getElementById("correo").value;
//   ciudad = document.getElementById("ciudad").value;
//   password = document.getElementById("password").value;
//
//   expresion = "^[a-z]+@[a-z]+\.[a-z]{2,4}$";
//   nexp = new RegExp(expresion);
//
//   if (nombre==="") {
//     alert("error. Debe ingresar su nombre");
//     return false;
//   }
//
//   else if (apellido==="") {
//     alert("error. Debe ingresar sus apellidos");
//     return false;
//   }
//
//   else if (gender==="") {
//     alert("error. Debe ingresar su genero");
//     return false;
//   }
//   else if(fecha===""){
//     alert("debe ingresar su fecha de nacimiento");
//     return false;
//   }
//
//   else if (telefono==="") {
//     alert("error. Debe ingresar su celular");
//     return false;
//   }
//
//   else if (correo==="") {
//     alert("error. Debe ingresar su correo");
//     return false;
//   }
//
//   else if (ciudad==="") {
//     alert("error. Debe ingresar su ciudad");
//     return false;
//   }
//
//   else if (password==="") {
//     alert("error. Debe ingresar su contraseña");
//     return false;
//   }
//
//
//   else if (nombre.length>50) {
//     alert("error. exedio el numero de caracteres");
//     return false;
//   }
//
//   else if (apellido.length>50) {
//     alert("error. exedio el numero de caracteres");
//     return false;
//   }
//
//   else if (telefono.length>11) {
//     alert("error. exedio el numero de caracteres");
//     return false;
//   }
//
//   else if (correo.length>50) {
//     alert("error. exedio el numero de caracteres");
//     return false;
//   }
//
//
//   else if (isNaN(telefono)) {
//     alert("error. Debe ingresar solo numeros");
//     return false;
//   }
//
//
//
//
//   else {
//     document.getElementById('frmregistro').submit()
//     return true;
//   }
// })
