$(document).ready(function() {
    $("#dataGrid").DataTable()
} );
// modal de la categoria
// ----------------------
$(".abrirmodal").click(function() {
 // $(".fondo").css("display","block");
 $(".fondo").toggle();
 $(".wrap").toggle();
});

$(".fondo").click(function() {
 // $(".fondo").css("display","none");
 $(".fondo").toggle();
 $(".wrap").toggle();
});

// validacion
// ---------------------
$("#frmcategory").submit(function(e) {
e.preventDefault();
        dataJson = [];
        $(".new").each(function(){
            structure = {};
            structure = $(this).val();
            dataJson.push(structure);
        });
        $.ajax({
          url: "crear-categoria",
          type: "POST",
           dataType:'json',
           data: ({data: dataJson }),
           success: function(result){
             if (result==true) {
               $("#frmcategory")[0].reset();
               $('#frmcategory').after('<div class="mensaje">"ya registrò"</div>');
             }
            $('#frmcategory').after('<div class="mensaje">'+result+'</div>');
             setTimeout(function(){
                  $('div.mensaje').remove();
                }, 5000);
            // console.log(result);
           },
           error: function(result){
              console.log(result);
           }
      });
});

// var fondo = document.getElementById('fondo');
// var wrap = document.getElementById('wrap');
// var abrir = document-getElementById('abrirmodal');

// abrir.onclick = function(){
//     fondo.style.display "block";
//     wrap.style.display "block";
// };
