
$(function(){
	var mayus = new RegExp("^(?=.*[A-Z])");
	var especial = new RegExp("^(?=.*[!@#$&*])");
	var numbers = new RegExp("^(?=.*[0-9])");
	var lower = new RegExp("^(?=.*[a-z])");
	var len = new RegExp("^(?=.{8,})");

	$("#password").on("keyup", function(){
		var pass = $("#password").val();
		// console.log(especial.test(pass));
		if(mayus.test(pass)==false){
				$("#mensaje").text("debe tener por lo menos una mayuscula").css("color","green");
		}else if(especial.test(pass)==true){
			$("#mensaje").text("no debe tener caracter especial").css("color","green");

		}else if(numbers.test(pass)==false){
			$("#mensaje").text("debe tener un numero").css("color","green");

		}else if (lower.test(pass)==false) {
			$("#mensaje").text("debe tener minusculas").css("color","green");

		}else if (len.test(pass)==false) {
			$("#mensaje").text("minimo 8 caracteres").css("color","green");

		}else{
			$("#mensaje").text(' ');

		}
		// if(mayus.test(pass) && especial.test(pass) && numbers.test(pass) && lower.test(pass) && len.test(pass)){
		// 	$("#mensaje").text("segura").css("color","green");
		// }else{
		// 	$("#mensaje").text("insegura").css("color","red");
		// }


	});
});
