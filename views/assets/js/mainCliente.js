// Modal de el menu del cliente
// ----------------------------

var menu = document.getElementById('menu');
var ground = document.getElementById('ground');
var modal = document.getElementById('modal');
var closemenu = document.getElementById('closemenu');

menu.onclick = function() {
  ground.style.display = "block";
  modal.style.display = "block";
}
closemenu.onclick = function() {
  ground.style.display = "none";
  modal.style.display = "none";
}
ground.onclick = function() {
  ground.style.display = "none";
  modal.style.display = "none";
}
