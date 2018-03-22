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
