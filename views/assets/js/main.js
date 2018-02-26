
var slideIndex = 0;

function miFuncion() {
  var response = grecaptcha.getResponse();

  if(response.length == 0){
    alert("Falta verificar el reCaptcha");

  } else {
    document.getElementById('frmregistro').submit()
  }
}

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("Slides");
    var dots = document.getElementsByClassName("pont");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display ="block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 4000); // Cambia la imagen cada 4 segungos
}

// js de  login modal:guffy
if (document.getElementById('close')) {
    showSlides();
    var modal = document.getElementById('loginmodal');
    var btn = document.getElementById('mon');
    var cerrar = document.getElementById('close');


    btn.onclick = function(){
        modal.style.display ="block";
    }
    cerrar.onclick = function(){
        modal.style.display = "none";
    }
    window.onclick = function(outclick){
        if(outclick.target ==modal){
            modal.style.display= "none";
        }
    }

}



// validaciones en el login:dago
$("input[name='email']").focusout(function(){
    $.post("validar_usuario",{email:$(this).val()},function(result){
        var result = JSON.parse(result);
        $("span.error").remove();

        if(result[0] == "false"){
          $("input[name='email']").after("<span class='error'>"+result[1]+"</span>");
          $(".btnsave").prop("disabled",true);
        }else{
          $("span.error").remove();
          $(".btnsave").prop("disabled",false);
        }
    })
})

$('[name=email]').focus(function(){
  // if ($(this).val().length == 0){
    $("span.error").remove();
  // }
})

/*******---verificar contraseña:dago-----*****/
$('#password').keyup(function(){
    var password = $('#password').val();
    console.log(password.length);

});

$('#rpassword').focusout(function(){
    var password = $('#password').val();
    if (password===$('#rpassword').val()) {
      $("btntnt").prop("disabled",false);
      console.log("contraseñas coinciden");
      $('div.error').remove();
    }else{
      $("btntnt").prop("disabled",true);
      $('#rpassword').after('<div class="error" style="colo", "red">Las contraseñas no coinciden</div>');

      console.log("no coinciden");
    }


});
$(".icon--mobile").click(function() {
    $("header.main--nav").toggleClass("open--nav")
})
