// Modal de el menu del cliente
// ----------------------------
var menu = document.getElementById('menu');
var ground = document.getElementById('ground');
var modal = document.getElementById('modal');
var closemenu = document.getElementById('closemenu');

menu.onclick = function(){
  ground.style.display = "block";
  modal.style.display = "block";
};
closemenu.onclick = function(){
  ground.style.display = "none";
  modal.style.display = "none";
};
ground.onclick = function(){
  ground.style.display = "none";
  modal.style.display = "none";
};

// Modal de Detalle
// ----------------
$(".addpro").click(function(){
  var producto = this.id;
  $.ajax({
    url:"detalle",
    type:"post",
    dataType:"json",
    data:({data:producto}),
    success:function(result){
      console.log(result);
      $(".fondo").toggle();
      $(".wrapdet").toggle();
      $("#nom").html(result.nom_pro);
      $("#mar").html(result.mar_pro);
      $("#pre").html(result.valVen_pro);
      $("#idpro").val(result.id_pro);
      $("#img_pro")[0].src = "views/assets/image/productos/"+result.img_pro;
    },
    error:function(result){
      console.log(result);
    }
  })
});
$("#close").click(function(){
  $(".wrapdet").toggle();
  $(".fondo").toggle();
});

$(".fondo").click(function(){
  $(".wrapdet").toggle();
  $(".fondo").toggle();
});

// When the user scrolls down 20px from the top of the document, show the button
// window.onscroll = function() {scrollFunction()};
//
// function scrollFunction() {
//     if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
//         document.getElementById("myBtn").style.display = "block";
//     } else {
//         document.getElementById("myBtn").style.display = "none";
//     }
// }

// When the user clicks on the button, scroll to the top of the document
// function topFunction() {
//     document.body.scrollTop = 0;
//     document.documentElement.scrollTop = 0;
// }
