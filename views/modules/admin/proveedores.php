<div class="module--worker">

    <h1>Provedores</h1>
    <div class="tab">
        <button class="btntabs" onclick="Name(event, 'Proveedores' )"id="defaultOpen"><i class="fa fa-address-book-o"></i> Proveedores</button>
        <button class="btntabs" onclick="Name(event, 'Nuevo')" ><i class="fa fa-plus"></i> Nuevo</button>
      </div>

      <div id="Nuevo" class="contentfo">
        <h3>Registrar Proveedor</h3>
        <div class="frmworker">
            <form class="" action="" method="post">
                <div class="content-form">
                    <div class="form-group">
                        <label class="required">Nombre del Proveedor:</label>
                        <input class="k" type="text" name="" value="">
                    </div>
                    <div class="form-group">
                        <label class="required">Direccion del Proveedor:</label>
                        <input class="k" type="text" name="" value="">
                    </div>
                </div>
                <div class="content-form">
                    <div class="form-group">
                        <label class="required">Teléfono del Proveedor:</label>
                        <input class="k" type="number" name="" value="">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="button">Regitrar</button>
                    </div>
                </div>
            </form>

        </div>
      </div>

      <div id="Proveedores" class="contentfo">
        <h3>Proveedores</h3>
        <!-- <p> para ver los Proveedores</p> -->
        <table id="dataGrid">
			<thead class="tittledatag">
				<tr>

                    <td>Nombre del Proveedor</td>
                    <td>Direccion</td>
                    <td>Teléfono</td>
					<td>Aciones</td>
				</tr>
			</thead>
			<tbody>

				<tr>
					<td>Juan Carlos</td>
					<td>Carrera 38</td>
                    <td>323</td>
					<td>
						<a href="#" class=""><i class="fa fa-pencil"></i>Editar</a>
						<a href="#"class=""id=""><i class="fa fa-info"></i>Detalles</a>
						<a href="#"><i class="fa fa-trash"></i>Eliminar</a>
					</td>
				</tr>
                <tr>
					<td>Coca cola</td>
					<td>Carrera 38 # 40-59 </td>
                    <td>255555</td>
					<td>
						<a href="#" class=""><i class="fa fa-pencil"></i>Editar</a>
						<a href="#"class=""id=""><i class="fa fa-info"></i>Detalles</a>
						<a href="#"><i class="fa fa-trash"></i>Eliminar</a>
					</td>
				</tr>

			</tbody>
		</table>

      </div>


</div>
