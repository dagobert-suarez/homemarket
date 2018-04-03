<?php
	$dataProduct = $this -> readByCategory($_GET["data"]);
?>
<section>
	<div  class="categorymodal">
		<form  class="modal-content-category" action="createCategory" method="post">
			<h1> Registrar categoria </h1>
			<div class="">

			<label for="" class="required">Nombre de la categoria:</label>
			<input type="text" name="data[]" value="" required>
		</div>
			<button type="submit" name="guardar" class="frmbtn">Crear categoria</button>
		</form>
	</div>
	<header>
		<h1>Ver categoria</h1>
		<div class="breadcrums">
			<ul>
				<li><a href="InicioWorker"><i class="fa fa-home"></i>Home</a></li>
				<li><a href="">Crear categoria</a></li>
				<li><a href="">Categorias</a></li>
			</ul>
		</div>
	</header>

	<div class="wrap--datagrid">
		<table id="dataGrid">
			<thead class="tittledatag">
				<tr>
					<td>#</td>
					<td>Nombre categoria</td>
					<td>Aciones</td>
				</tr>
			</thead>
			<tbody>
				<?php
					$data = $this->readCategory();
					foreach ( $data as $row) {	?>
				<tr>
					<td><?php echo $row["id_tip_pro"] ;?></td>
					<td><?php echo $row["nom_tip_pro"] ;?></td>
					<td>
						<a href="#" class="abrirmodal"><i class="fa fa-pencil"></i>Editar</a>
						<a href="#"class="modalDet" id="modalDet"><i class="fa fa-info"></i>Detalles</a>
						<a href="eliminar-tipo-<?php echo $row['id_tip_pro'] ;?>"><i class="fa fa-trash"></i>Eliminar</a>
					</td>

				</tr>
			<?php } ?>
			</tbody>
		</table>
	<!--  Actualizar Categoria -->
	<!-- ----------------------------->
	<div class="fondo"></div>
	<div class="wrap">
		<div class="wea">
			<div class="wrap-tit">
				<h1>Actualizar Categoria</h1>
				<i class="close">&times</i>
			</div>

			<div class="wrap-bod">
				<form  name="frmCategory" action="actualizando-categoria" method="post">
					<label for="">Nombre de la categoria:</label>
					                <input type="text" readonly name="data[]" value="<?php echo $_GET["data"] ?>">
					<input type="text" name="data[]" placeholder="ingrese nuevo nombre" required value="<?php echo $dataProduct["nom_tip_pro"];?>"><br>
					<button type="submit" name="button">Actualizar</button>
				</form>

			</div>
		</div>
	</div>
	<!--Fin de el Actualizar  -->
	<!-- -------------------------->
	<!-- Detalles -->
	<!-- ---------------->
	<div class="fondo-det"></div>
	<div class="wrap-det">
		<div class="wea-det">
			<div class="wrap-tit">
				<h1>Detalles de la  Categoria</h1>
				<i class="closedet">&times;</i>
			</div>
			<div class="wrap-bod">
				<p>La vista para el detalle de la categoria</p>
					<label for="">Nombre de la categoria:</label>
					<br>
		</div>
	</div>
	<!--  Fin de Detalles -->
	<!-- --------------------->
	</div>
</section>
