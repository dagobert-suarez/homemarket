<section>
	<div class="">
		<header>
			<h1>Registrar categoria</h1>
		</header>
		<form id="frmcategory" class="" action="crearc-categoria" method="post">
			<div class="">

			<label for="" class="required">Codigo categoria</label>
			<input type="number" name="data[]" value="">

			<label for="" class="required">Nombre de la categoria</label>
			<input type="text" name="data[]" value="">
		</div>

			<button type="submit" name="guardar">Crear Producto</button>


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
				<tr>
					<td>1234</td>
					<td>Arroz</td>
					<td>
						<a href=""><i class="fa fa-pencil"></i></a>
						<a href=""><i class="fa fa-info"></i></a>
						<a href=""><i class="fa fa-trash"></i></a>
					</td>

				</tr>
			</tbody>

		</table>
	</div>
</section>
