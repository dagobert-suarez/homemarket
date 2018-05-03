<?php
   $usuario = "root";
   $password = "";
   $servidor = "localhost";
   $basededatos = "home_market";
   $conexion = mysqli_connect( $servidor, $usuario, ""  ) or die ("No se podido conectar al servidor de Base de datos");
   $db= mysqli_select_db($conexion, $basededatos) or die ("Upps ! Nose ha podido conectar a la base de datos");

  //acceso
   $nombre_archivo = "Textos_planos/acceso.txt";
   $d = ";";
   $archivo = fopen($nombre_archivo, "a");
   $mensaje = "token $d contraseña $d id_usu";
   fwrite($archivo, $mensaje);
   $consulta = "SELECT * FROM acceso";
   $resultado = mysqli_query($conexion, $consulta) or die ("Algo esta mal en la consulta a la base de datos");
   while ($columna = mysqli_fetch_array($resultado)){
       $mensaje = $columna['token'].$d.$columna['contra'].$d.$columna['id_usu'];
       fwrite($archivo, "\r\n".$mensaje);
   }
   fclose($archivo);

//calificacion
   $nombre_archivo = "Textos_planos/calificacion.txt";
   $archivo = fopen($nombre_archivo, "a");
   $mensaje= "id_cal $d pun_cal";
   fwrite($archivo, $mensaje);
   $consulta = "SELECT * FROM calificacion";
   $resultado = mysqli_query($conexion, $consulta) or die ("Algo esta mal en la consulta a la base de datos");
   while ($columna = mysqli_fetch_array($resultado)){
       $mensaje = $columna['id_cal'].$d.$columna['pun_cal'];
       fwrite($archivo, "\r\n".$mensaje);
   }
   fclose($archivo);

// calificacion_supermercado
   $nombre_archivo = "Textos_planos/calificacion_supermercado.txt";
   $archivo = fopen($nombre_archivo, "a");
   $mensaje = "id_sup $d id_cal";
   fwrite($archivo, $mensaje);
   $consulta = "SELECT * FROM calificacion_supermercado";
   $resultado = mysqli_query($conexion, $consulta) or die ("Algo esta mal en la consulta a la base de datos");
   while ($columna = mysqli_fetch_array($resultado)){
       $mensaje = $columna['id_sup'].$d.$columna['id_cal'];
       fwrite($archivo, "\r\n".$mensaje);
   }
   fclose($archivo);

   // ciudad
   $nombre_archivo = "Textos_planos/ciudad.txt";
   $archivo = fopen($nombre_archivo, "a");
   $mensaje = "cod_ciu $d nom_ciu $d cod_dpto";
   fwrite($archivo, $mensaje);
   $consulta = "SELECT * FROM ciudad";
   $resultado = mysqli_query($conexion, $consulta) or die ("Algo esta mal en la consulta a la base de datos");
   while ($columna = mysqli_fetch_array($resultado)){
       $mensaje = $columna['cod_ciu'].$d.$columna['nom_ciu'].$d.$columna['cod_dpto'];
       fwrite($archivo, "\r\n".$mensaje);
   }
   fclose($archivo);

   //detalle_pedido
   $nombre_archivo = "Textos_planos/detalle_pedido.txt";
   $archivo = fopen($nombre_archivo, "a");
   $mensaje = "id_ped $d id_pro $d can_pro $d val_tot $d cod_ped";
   fwrite($archivo, $mensaje);
   $consulta = "SELECT * FROM detalle_pedido";
   $resultado = mysqli_query($conexion, $consulta) or die ("Algo esta mal en la consulta a la base de datos");
   while ($columna = mysqli_fetch_array($resultado)){
       $mensaje = $columna['id_ped'].$d.$columna['id_pro'].$d.$columna['can_pro'].$d.$columna['val_tot'].$d.$columna['cod_ped'];
       fwrite($archivo, "\r\n".$mensaje);
   }
   fclose($archivo);

   //dpto
   $nombre_archivo = "Textos_planos/dpto.txt";
   $archivo = fopen($nombre_archivo, "a");
   $mensaje = "cod_dpto $d nom_dpto $d cod_pais";
   fwrite($archivo, $mensaje);
   $consulta = "SELECT * FROM dpto";
   $resultado = mysqli_query($conexion, $consulta) or die ("Algo esta mal en la consulta a la base de datos");
   while ($columna = mysqli_fetch_array($resultado)){
       $mensaje = $columna['cod_dpto'].$d.$columna['nom_dpto'].$d.$columna['cod_pais'];
       fwrite($archivo, "\r\n".$mensaje);
   }
   fclose($archivo);

   //pais
   $nombre_archivo = "Textos_planos/pais.txt";
   $archivo = fopen($nombre_archivo, "a");
   $mensaje = "cod_pais $d nom_pais";
   fwrite($archivo, $mensaje);
   $consulta = "SELECT * FROM pais";
   $resultado = mysqli_query($conexion, $consulta) or die ("Algo esta mal en la consulta a la base de datos");
   while ($columna = mysqli_fetch_array($resultado)){
       $mensaje = $columna['cod_pais'].$d.$columna['nom_pais'];
       fwrite($archivo, "\r\n".$mensaje);
   }
   fclose($archivo);

// pedido
   $nombre_archivo = "Textos_planos/pedido.txt";
   $archivo = fopen($nombre_archivo, "a");
   $mensaje = "cod_ped $d fec_ped $d id_usu $d dir_ped $d id_sup $d id_usu_emp $d tot_com";
   fwrite($archivo, $mensaje);
   $consulta = "SELECT * FROM pedido";
   $resultado = mysqli_query($conexion, $consulta) or die ("Algo esta mal en la consulta a la base de datos");
   while ($columna = mysqli_fetch_array($resultado)){
       $mensaje = $columna['cod_ped'].$d.$columna['fec_ped'].$d.$columna['id_usu'].$d.$columna['dir_ped'].$d.$columna['id_sup'].$d.$columna['id_usu_emp'].$d.$columna['tot_com'];
       fwrite($archivo, "\r\n".$mensaje);
   }
   fclose($archivo);

   // productos
   $nombre_archivo = "Textos_planos/productos.txt";
   $archivo = fopen($nombre_archivo, "a");
   $mensaje = "id_pro $d nom_pro $d des_pro $d img_pro $d mar_pro $d id_tip_pro $d can_pro $d uniMed_pro $d valVen_pro $d id_sup";
   fwrite($archivo, $mensaje);
   $consulta = "SELECT * FROM productos";
   $resultado = mysqli_query($conexion, $consulta) or die ("Algo esta mal en la consulta a la base de datos");
   while ($columna = mysqli_fetch_array($resultado)){
       $mensaje = $columna['id_pro'].$d.$columna['nom_pro'].$d.$columna['des_pro'].$d.$columna['img_pro'].$d.$columna['mar_pro'].$d.$columna['id_tip_pro'].$d.$columna['can_pro'].$d.$columna['uniMed_pro'].$d.$columna['valVen_pro'].$d.$columna['id_sup'];
       fwrite($archivo, "\r\n".$mensaje);
   }
   fclose($archivo);

// proveedores
   $nombre_archivo = "Textos_planos/proveedores.txt";
   $archivo = fopen($nombre_archivo, "a");
   $mensaje = "id_prov $d nom_prov $d dir_prov $d tel_prov";
   fwrite($archivo, $mensaje);
   $consulta = "SELECT * FROM proveedores";
   $resultado = mysqli_query($conexion, $consulta) or die ("Algo esta mal en la consulta a la base de datos");
   while ($columna = mysqli_fetch_array($resultado)){
       $mensaje = $columna['id_prov'].$d.$columna['nom_prov'].$d.$columna['dir_prov'].$d.$columna['tel_prov'];
       fwrite($archivo, "\r\n".$mensaje);
   }
   fclose($archivo);

   // proveedores_productos
   $nombre_archivo = "Textos_planos/proveedores_productos.txt";
   $archivo = fopen($nombre_archivo, "a");
   $mensaje = "id_prov $d id_pro";
   fwrite($archivo, $mensaje);
   $consulta = "SELECT * FROM proveedores_productos";
   $resultado = mysqli_query($conexion, $consulta) or die ("Algo esta mal en la consulta a la base de datos");
   while ($columna = mysqli_fetch_array($resultado)){
       $mensaje = $columna['id_prov'].$d.$columna['id_pro'];
       fwrite($archivo, "\r\n".$mensaje);
   }
   fclose($archivo);

   // supermercado
   $nombre_archivo = "Textos_planos/supermercado.txt";
   $archivo = fopen($nombre_archivo, "a");
   $mensaje = "id_sup $d nom_sup $d dir_sup $d tel_sup $d cod_ciu $d logo_sup $d lon_sup $d lat_sup ";
   fwrite($archivo, $mensaje);
   $consulta = "SELECT * FROM supermercado";
   $resultado = mysqli_query($conexion, $consulta) or die ("Algo esta mal en la consulta a la base de datos");
   while ($columna = mysqli_fetch_array($resultado)){
       $mensaje = $columna['id_sup'].$d.$columna['nom_sup'].$d.$columna['dir_sup'].$d.$columna['tel_sup'].$d.$columna['cod_ciu'].$d.$columna['logo_sup'].$d.$columna['lon_sup'].$d.$columna['lat_sup'];
       fwrite($archivo, "\r\n".$mensaje);
   }
   fclose($archivo);

// tipo_producto
   $nombre_archivo = "Textos_planos/tipo_producto.txt";
   $archivo = fopen($nombre_archivo, "a");
   $mensaje = "id_tip_pro $d nom_tip_pro ";
   fwrite($archivo, $mensaje);
   $consulta = "SELECT * FROM tipo_producto";
   $resultado = mysqli_query($conexion, $consulta) or die ("Algo esta mal en la consulta a la base de datos");
   while ($columna = mysqli_fetch_array($resultado)){
       $mensaje = $columna['id_tip_pro'].$d.$columna['nom_tip_pro'];
       fwrite($archivo, "\r\n".$mensaje);
   }
   fclose($archivo);

   // usuario
   $nombre_archivo = "Textos_planos/usuario.txt";
   $archivo = fopen($nombre_archivo, "a");
   $mensaje = "id_usu $d nom_usu $d ape_usu $d fec_nac_usu $d gen_usu $d tel_usu $d email_usu $d cod_ciu $d id_rol ";
   fwrite($archivo, $mensaje);
   $consulta = "SELECT * FROM usuario";
   $resultado = mysqli_query($conexion, $consulta) or die ("Algo esta mal en la consulta a la base de datos");
   while ($columna = mysqli_fetch_array($resultado)){
       $mensaje = $columna['id_usu'].$d.$columna['nom_usu'].$d.$columna['ape_usu'].$d.$columna['fec_nac_usu']
       .$d.$columna['gen_usu'].$d.$columna['tel_usu'].$d.$columna['email_usu'].$d.$columna['cod_ciu'].$d.$columna['id_rol'];
       fwrite($archivo, "\r\n".$mensaje);
   }
   fclose($archivo);

// usuario_supermercado
   $nombre_archivo = "Textos_planos/usuario_supermercado.txt";
   $archivo = fopen($nombre_archivo, "a");
   $mensaje = "id_usu $d id_sup ";
   fwrite($archivo, $mensaje);
   $consulta = "SELECT * FROM usuario_supermercado";
   $resultado = mysqli_query($conexion, $consulta) or die ("Algo esta mal en la consulta a la base de datos");
   while ($columna = mysqli_fetch_array($resultado)){
       $mensaje = $columna['id_usu'].$d.$columna['id_sup'];
       fwrite($archivo, "\r\n".$mensaje);
   }
   fclose($archivo);



   //rol


     $nombre_archivo = "Textos_planos/rol.txt";

   $archivo = fopen($nombre_archivo, "a");

   $mensaje = "id_rol $d nom_rol ";
   fwrite($archivo, $mensaje);

   $consulta = "SELECT * FROM rol";
   $resultado = mysqli_query($conexion, $consulta) or die ("Algo esta mal en la consulta a la base de datos");

   while ($columna = mysqli_fetch_array($resultado)){
       $mensaje = $columna['id_rol'].$d.$columna['nom_rol'];
       fwrite($archivo, "\r\n".$mensaje);
   }

   fclose($archivo);








mysqli_close( $conexion);
?>
