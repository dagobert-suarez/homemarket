// dataGrid

  $(document).ready(function() {
    $("#dataGrid").DataTable({
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


var contraseña = "nosevea";
var contraseñaUsu = "homemarket";
var usu1 = "Alexis";
var usu2 = "Guffy";
var usu3 = "Dago";
var usu4 = "Urrego";
var password2= document.getElementById('pass2');
var password = document.getElementById('pass');
var botons = document.getElementById('botons');
var content2 = document.getElementById('content2');
var content = document.getElementById('content');
var close = document.getElementById('close');
var camp2= document.getElementById('camp2');
var cont1 = document.getElementById('cont1');

cont1.onclick = function(){
  var usus = camp2.value
  if (usus === ''){
    alert("El campo esta vacío");
  }else {
    if(usus == usu1){
      wrap.style.display = "block";
    }else if (usus == usu2){
      wrap.style.display = "block";
    }else if (usus == usu3){
      wrap.style.display = "block";
    }else if (usus == usu4){
      wrap.style.display = "block";
    }else {
      alert("El usuario no  es valido");
      window.location.href="Contenido2";
    }
  }
};
content2.onclick = function(){
  var nose = password2.value
  if (nose === ''){
    alert("El Campo no puede quedar vacìo");
  }else {
     if(nose == contraseñaUsu){
          wrap2.style.display = "block";
    }else{
      alert("Su contraseña es incorrecta Intente nuevamente");
    }
  }
};
content.onclick = function(){
  var validar = password.value;
  if (validar ==='') {
    alert("!El Campo esta vacío Intente nuevamente¡");
  }else {
    if(validar == contraseña ) {
      botons.style.display = "block";
    }else {
      alert("la contraseña es incorrecta");
  }
    }
};
close.onclick = function(){
  botons.style.display = "none";
  window.location.href='Contenido2';
};
