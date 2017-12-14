$(document).ready(function() {
    $("#dataGrid").DataTable()
} );

// crear categoria modal
var modalcategory = document.getElementById('categorymodal');
var categoryb = document.getElementById('btn-category');
var cerrarcatego = document.getElementById('close');

categoryb.onclick= function(){
    modal.style.display ="block";
}
cerrarcatego.onclick = function(){
        modal.style.display ="none";
}
window.onclick = function() {
    if (outclick.target ==modalcategory) {
        modal.style.display = "none";
    }
}
