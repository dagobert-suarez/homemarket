<!-- <div class="slide-container">
  <div class="mySlides fade">
    <div class="numbertext">1/3</div>
    <img src="views/assets/image/slide1.jpg" style="width:100%">
    <div class="text">tal vez el texto</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2/3</div>
    <img src="views/assets/image/slide2.png" style="width:100%">
    <div class="text">tal vez el texto 2</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3/3</div>
    <img src="views/assets/image/slide3.png" style="width:100%">
    <div class="text">tal vez el texto 3</div>
  </div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<script type="text/javascript">
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script> -->

<style>

* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}
/* Style the tab */
.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 20%;
    height: 500px;
}

/* Style the buttons inside the tab */
.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 80%;
    border-left: none;
    height: 500px;
}
</style>

<p><center>MANUAL DE USUARIO:</center></p>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Objetivo')" id="defaultOpen">Objetivo del manual</button>
  <button class="tablinks" onclick="openCity(event, 'Descripción')">Descripción</button>
  <button  "'Requerimientos')">Requerimientos:</button>
  <button class="tablinks" onclick="openCity(event, 'sistema')">Requisitos de conocimiento para manejar el sistema:</button>
  <button class="tablinks" onclick="openCity(event, 'hardware')">Requerimientos de hardware y software:</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
</div>

<div id="Objetivo" class="tabcontent">
  <h3>Objetivo del manual</h3>
  <p>Este manual tiene como propósito  noserecopilar de manera detallada la suficiente información acerca del portal web Home Market. Todo esto con el fin de proporcionar una guía exacta de sus características y del funcionamiento de este. </p>
</div>

<div id="Descripción" class="tabcontent">
  <h3>Descripción</h3>
  <p>Home Market es una plataforma que permitirá hacer las compras del mercado desde casa de manera fácil y rápida. Entre sus funciones se encuentran:</p>
  <p>-	Ver supermercados cerca de ti mediante el geo-localizador.</p>
  <p>-	Registrar usuarios</p>
  <p>-	Administrar productos</p>
  <p>-	Realizar pedidos</p>
  <p>-	Calificar supermercado</p>
  <p>-	Historial de pedidos</p>
</div>

<div id="sistema" class="tabcontent">
  <h3>Requisitos de conocimiento para manejar el sistema</h3>
  <p>Los conocimientos para el usuario final son los esenciales como:</p>
  <p>• Informática básica</p>
  <p>• Sistemas operativos</p>
</div>

<div id="hardware" class="tabcontent">
  <h3>Requerimientos de hardware y software:</h3>
  <p>Los requerimientos básicos de hardware que se deben tener en cuenta: </p>

  <p>-	5 Gb de espacio en disco</p>
  <p>-	50 Gb ancho de banda</p>

  <p>El software para tener en cuenta es el siguiente: </p>
  <p>-	FileZilla</p>
  <p>-	Sistema operativo Linux </p>
  <p>-	Gestor de bases de datos </p>
  <p>-	PHP 7.0 o 7.1</p>
  <p>-	Apache </p>

</div>
<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>
<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>
<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>
<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

<!-- fin del manual  -->
