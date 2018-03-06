<section>
	<div  id="categorymodal" class="categorymodal">

		<form id="frmcategory" class="modal-content-category" action="crear-categoria" method="post">
			<h1> Registrar categoria </h1>
			<div class="">

			<label for="" class="required">Nombre de la categoria</label>
			<input type="text" name="data[]" value="">
		</div>

			<button type="submit" name="guardar" class="frmbtn">Crear categoria</button>


		</form>

	</div>
	<header>
		<h1>Ver categoria</h1>
		<div class="breadcrums">
			<ul>
				<li><a href="InicioWorker"><i class="fa fa-home"></i>Home</a></li>
				<li><a id="btn-category">Crear categoria</a></li>
				<li><a href="producto">Categorias</a></li>
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
						<a href=""><i class="fa fa-pencil">Editar</i></a>
						<a href=""><i class="fa fa-info"></i>Detalles</a>
						<a href="eliminar-tipo-<?php echo $row['id_tip_pro'] ;?>"><i class="fa fa-trash"></i>Eliminar</a>
					</td>

				</tr>
			<?php } ?>
			</tbody>

		</table>
	</div>
</section>
