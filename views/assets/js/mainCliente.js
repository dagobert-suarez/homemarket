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


// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
