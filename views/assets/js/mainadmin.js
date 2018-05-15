//Esto es para el datagrid
$(document).ready(function() {
    $(".dataGrid").DataTable({
     "language":{
      "lengthMenu":"Mostrar: _MENU_",
      "zeroRecords": "No se encontraron registros",
            "info": "Página _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros aún.",
            "infoFiltered": "(filtrados de un total de _MAX_ registros)",
            "search" :"Buscar:",
            "LoadingRecords": "Cargando ...",
            "Processing": "Procesando...",
            "SearchPlaceholder": "Comience a teclear...",
            "previous": "Anterior",
            "paginate": {
            "previous": "Anterior",
            "next": "Siguiente",
    }
     }
    }

    )
} );
// -------------
// Esta es la parte de los tabs
// -----------------------------
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").onclick();
function Name(event, nName) {
    var i, contentfo, btntabs;
    contentfo = document.getElementsByClassName("contentfo");
    for (i = 0; i < contentfo.length; i++) {
        contentfo[i].style.display = "none";
    }
    btntabs = document.getElementsByClassName("btntabs");
    for (i = 0; i < btntabs.length; i++) {
        btntabs[i].className = btntabs[i].className.replace(" active", "");
    }
    document.getElementById(nName).style.display = "block";
    event.currentTarget.className += " active";
}
//  Fin de la  es la parte de los tabs
// -----------------------------
// Modal de la Categoria
 // --------------------------
  // var fondo = document.getElementById('fondo');
  // var wrap = document.getElementById('wrap');
  // var abrir = document-getElementById('abrirmodal');
  //
  // abrir.onclick = function(){
  //     fondo.style.display "block";
  //     wrap.style.display "block";
  // };
 var openCate = document.getElementById('openCate');
 var fondo = document.getElementById('fondo');
 var wrap = document.getElementById('wrap');
 var wrapmodal = document.getElementById('wrapmodal');
 var close = document.getElementById('closeCate');

 openCate.onclick = function(){
     fondo.style.display = "block";
     wrapmodal.style.display = "block";
 };

close.onclick = function(){
     fondo.style.display = "none";
     wrapmodal.style.display = "none";
 };
 //  Modal del editar supermercado
 // // Modal del menú para el Responsive
 // // ------------------------------------
 // $(".icon--mobile").click(function() {
 //     $("header.main--nav").toggleClass("open--nav")
 // })

 // modal de producto
 var openPro = document.getElementById('openPro');
 var ground = document.getElementById('ground');
 var wrapmodalpro = document.getElementById('wrapmodalpro');
 var modalpro = document.getElementById('modalpro');

 openPro.onclick = function(){
    ground.style.display = "block";
     // wrapmodalpro.style.display = "block";
     // modalpro.style.display = "block";

 };
