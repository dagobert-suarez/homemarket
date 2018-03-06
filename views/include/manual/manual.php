<div class="slide-container">
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
</script>
