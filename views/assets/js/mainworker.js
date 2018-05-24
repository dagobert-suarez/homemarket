$(document).ready(function() {
    $("#dataGrid").DataTable({
     "language":{
      "lengthMenu":"Registros: _MENU_",
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

// modal de la categoria
// ----------------------
// $(".fondo").css("display","block");
$(".abrirmodal").click(function() {
 $(".fondo").toggle();
 $(".wrap").toggle();
 $.ajax({
   url:"ver-categoria",
   type:"post",
   dataType:"json",
   data:({data:this.id}),
   success:function(result){
     console.log(result);
     $("#updateCategoryName").val(result[1]);
   },
   error:function(result){console.log(result);}
 });
});
$(".close").click(function(){
    $(".fondo").toggle();
    $(".wrap").toggle();
    $("#updateCategoryName").val("");
});
//actualizar categoria
$("#updateCate").submit(function(e){
  e.preventDefault();
  if ($("#updateCategoryName").val()!="") {
    $.ajax({
      url:"actualizar-categoria",
      type:"post",
      dataType:"json",
      data:({data:$("#updateCategoryName").val()}),
      success:function(result){
        console.log(result);
        if(result==true){
          location.reload();
        }else{
          alert(result);
        }
      },
      error:function(result){console.log(result);}
    });
  }else{
    alert("Campos vacios");
  }
});
$(".fondo").click(function() {
 // $(".fondo").css("display","none");
 $(".fondo").toggle();
 $(".wrap").toggle();
});
// Fin de la modal de la categoria
// --------------------------------

// Modal de Detalles
// -----------------------
$(".modalDet").click(function(){
    var cate = this.id;
    // id = id.replace("D","");
    $.ajax({
      url:"ver-categoria",
      type:"post",
      dataType:"json",
      data:({data:cate}),
      success:function(result){
        console.log(result);
        $(".fondo-det").toggle();
        $(".wrap-det").toggle();
        $("#codeCat").html(result.id_tip_pro);
        $("#nomCat").html(result.nom_tip_pro);
      },
      error:function(result){console.log(result);}
    });
});
//eliminar categoria
function eliminarCategoria(id){
  if (confirm("¿Eliminar esta categoria?")) {
    $.ajax({
      url:"eliminar-categoria",
      type:"post",
      dataType:"json",
      data:({data:id}),
      success:function(result){
        console.log(result);
        if (result==true) {
          location.reload();
        }else{
          alert("Ocurrio un error");
        }
      },
      error:function(result){console.log(result);}
    });
  }
}
$(".closedet").click(function(){
    $(".fondo-det").toggle();
    $(".wrap-det").toggle();
});
$(".fondo-det").click(function() {
    $(".fondo-det").toggle();
    $(".wrap-det").toggle();
});

//  Detalle producto
// ---------------------

$(".openDet").click(function(){
  console.log("hola");
});


// Esta es la parte de los tabs
// -----------------------------
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
function Name(evt, nName) {
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
    // evt.currentTarget.className += " active";
}

//  Fin   de Esta es la parte de los tabs
// -----------------------------
