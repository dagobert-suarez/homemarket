// Esta es la parte de los tabs
// -----------------------------

function Name(evt, cityName) {
    var i, contentfo, btntabs;
    contentfo = document.getElementsByClassName("contentfo");
    for (i = 0; i < contentfo.length; i++) {
        contentfo[i].style.display = "none";
    }
    btntabs = document.getElementsByClassName("btntabs");
    for (i = 0; i < btntabs.length; i++) {
        btntabs[i].className = btntabs[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

//  Fin   de Esta es la parte de los tabs
// -----------------------------

// Modal de la Categoria
//  --------------------------
// var fondo = document.getElementById('fondo');
// var wrap = document.getElementById('wrap');
// var abrir = document-getElementById('abrirmodal');

// abrir.onclick = function(){
//     fondo.style.display "block";
//     wrap.style.display "block";
// };
 var openCate = document.getElementById('openCate');
 var fondo = document.getElementById('fondo');
 var wrap = document.getElementById('wrap');
 var wrapmodal = document.getElementById('wrapmodal');
 var close = document.getElementById('closeCate')

 openCate.onclick = function(){
     fondo.style.display = "block";
     wrapmodal.style.display = "block";
 };

close.onclick = function(){
     fondo.style.display = "none";
     wrapmodal.style.display = "none";
 };
 // // Modal del menú para el Responsive
 // // ------------------------------------
 // $(".icon--mobile").click(function() {
 //     $("header.main--nav").toggleClass("open--nav")
 // })
