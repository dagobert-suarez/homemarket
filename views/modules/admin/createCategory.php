<section>
	<div class="">
		<header>
			<h1>Registrar categoria</h1>
			<div class="breadcrums">
						<ul>
								<li><a href="inicioAdmin"><i class="fa fa-home"></i>Home</a></li>
								<li><a href="">Crear categoria</a></li>
						</ul>
			</div>
		</header>
		<form id="frmcategory" class="" action="crearc-categoria" method="post">
			<div class="">

			<label for="" class="required">Codigo categoria</label>
			<input type="number" name="data[]" value="">

			<label for="" class="required">Nombre de la categoria</label>
			<input type="text" name="data[]" value="">
		</div>

			<button type="submit" name="guardar" class="frmbtn">Crear categoria</button>


		</form>

	</div><br>
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



					foreach ( $this->readCategory() as $row) {	?>
				<tr>
					<td><?php echo $row["iid_tip_pro"] ;?></td>
					<td><?php echo $row["nom_tip_pro"] ;?></td>
					<td>
						<a href=""><i class="fa fa-pencil"></i></a>
						<a href=""><i class="fa fa-info"></i></a>
						<a href=""><i class="fa fa-trash"></i></a>
					</td>

				</tr>
			<?php } ?>
			</tbody>

		</table>
	</div>
</section>