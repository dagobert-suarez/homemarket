<div class="beach">
  <!-- <ul>
    <li><a href="#beatc">registrarse</a></li>
     <li><a>login</a></li>
  </ul> -->
<!--   <p>first div!</p> -->
	</div>
<section class="registec">
	<div class="beatc" id="beact">
    <div>
    <label>nombre</label>
    <input type="text" name="data[]" placeholder="nombre">

		<label>apellido</label>
		<input type="text" name="data[]" placeholder="apellido">
    </div>
		<label>correo</label>
		<input type="email" name="data[]" placeholder="correo">

		<label>direccion</label>
		<input type="date" name="data[]" placeholder="direccion">
    <div>
    </div>
    <p>middle space</p>

    </div>
  </section>

	<div class="beach"><p>second div!</p>
	</div>

	<div><p>middle space</p></div>

	<div class="beach"><p>third div!</p>
	</div>

<!-- sigue el css -->
<style>
body {
	margin: 0;
}
ul{
  list-style-type:none;
  background-color: #333;
  padding:0;
  display:flexend;

}
li{
  float:left;
/*   width:100%; */
  background-color:#333;
}
li a {
  display:block;
  text-decoration:none;
  text-aling:center;
  padding:13px 15px
}
li a:hover{
  background-color:#111;
  color:white;
}

p {
/* 	text-align: center; */
	font-family: sans-serif;
	font-size: 18px;
}
.registec{
  display:flex;
  background-color:#55cfcc4;
}
.beach {
	height: 660px;
  background-color:;
/* 	background:url("http://i62.tinypic.com/zj6m15.jpg") no-repeat center top fixed;  */
  background-size: cover;
	margin-top: 0px;
}

.beach:first-child {
	margin-top: 0;
}
</style>
