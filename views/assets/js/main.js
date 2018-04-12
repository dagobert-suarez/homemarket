var openmenu = document.getElementById('open-m-r');
var modalmenu = document.getElementById('modal-menu');
var closemenu = document.getElementById('close-m-r');

openmenu.onclick = function() {
  modalmenu.style.display = "block";
}
closemenu.onclick = function() {
  modalmenu.style.display = "none";
}
// Modal del  Supérmecado menú para el Responsive
// ------------------------------------
$(".icon--mobile").click(function() {
    $("header.main--nav").toggleClass("open--nav")
})

// Slide de la Landing
// -------------------
var slideIndex = 0;
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
var show = document.getElementById('show');

show.onclick = function(){
    var mostar = document.getElementById('mostar');
    if(mostar.type  === "password"){
        mostar.type = "text";
    } else {
        mostar.type = "password";
    }
};

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
// -----------------------------------
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
      $('#rpassword').after('<div class="error" style="color", "red">Las contraseñas no coinciden</div>');

      console.log("no coinciden");
    }

});
