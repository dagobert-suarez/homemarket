<?php
   $usuario = "root";
   $servidor = "localhost";
   $basededatos = "home_market";
   $password = "";
   $conexion = mysqli_connect( $servidor, $usuario, ""  ) or die ("No se conectó al servidor");
   $db= mysqli_select_db($conexion, $basededatos) or die ("no se conectó");
   $li = ";";
   $consulta = "call borrar";
   $resultado = mysqli_query($conexion , $consulta) or die ("Algo Ha ido mal en la consulta  a la base de datos ");

   $archivo = fopen("Textos_planos/pais.txt" , "rb");
   $aDatos = fgetcsv($archivo,1000,$li);
   echo "</br>";
   while(feof($archivo)== false)
   {
     $aDatos = fgetcsv($archivo, 1000, $li);
     $cod_pais = $aDatos[0];
     $nom_pais =  $aDatos[1];
     $consulta ="INSERT INTO pais (cod_pais,nom_pais)values('".$cod_pais."', '".$nom_pais."')";
     echo "</br>";
     $resultado = mysqli_query($conexion , $consulta) or die ("Algo Ha ido mal, es la consulta a la base de datos pais");
   }
   fclose($archivo);

   $archivo = fopen("Textos_planos/departamento.txt" , "rb");
   $aDatos = fgetcsv($archivo,1000,$li);
   echo "</br>";
   while(feof($archivo)== false)
   {
     $aDatos = fgetcsv($archivo, 1000, $li);
     $cod_dpto = $aDatos[0];
     $nom_dpto =  $aDatos[1];
     $cod_pais = $aDatos[2];
     $consulta = "INSERT INTO dpto (cod_dpto,nom_dpto,cod_pais)values('".$cod_dpto."', '".$nom_dpto."', '".$cod_pais."')";
     echo "</br>";
     $resultado = mysqli_query($conexion , $consulta) or die ("Algo Ha ido mal, es la consulta a la base de datos dpto");
   }
   fclose($archivo);

   $archivo = fopen("Textos_planos/ciudad.txt" , "rb");
   $aDatos = fgetcsv($archivo,1000,$li);
   echo "</br>";
   while(feof($archivo)== false)
   {
     $aDatos = fgetcsv($archivo, 1000, $li);
     $cod_ciu = $aDatos[0];
     $nom_ciu =  $aDatos[1];
     $cod_dpto = $aDatos[2];
     $consulta = "INSERT INTO ciudad (cod_ciu,nom_ciu,cod_dpto)values('".$cod_ciu."', '".$nom_ciu."', '".$cod_dpto."')";
     echo "</br>";
     $resultado = mysqli_query($conexion , $consulta) or die ("Algo Ha ido mal, es la consulta a la base de datos ciud");
   }
   fclose($archivo);

   $archivo = fopen("Textos_planos/rol.txt" , "rb");
   $aDatos = fgetcsv($archivo,1000,$li);
   echo "</br>";
   while(feof($archivo)== false)
   {
     $aDatos = fgetcsv($archivo, 1000, $li);
     $id_rol = $aDatos[0];
     $nom_rol =  $aDatos[1];
     $consulta = "INSERT INTO rol (id_rol,nom_rol)values('".$id_rol."', '".$nom_rol."')";
     echo "</br>";
     $resultado = mysqli_query($conexion , $consulta) or die ("Algo Ha ido mal es la consulta a la base de datos rol");
   }
   fclose($archivo);

   $archivo = fopen("Textos_planos/tipo_producto.txt" , "rb");
   $aDatos = fgetcsv($archivo,1000,$li);
   echo "</br>";
   while(feof($archivo)== false)
   {
     $aDatos = fgetcsv($archivo, 1000, $li);
     $id_tip_pro = $aDatos[0];
     $nom_tip_pro =  $aDatos[1];
     $consulta = "INSERT INTO tipo_producto (id_tip_pro,nom_tip_pro)values('".$id_tip_pro."', '".$nom_tip_pro."')";
     echo "</br>";
     $resultado = mysqli_query($conexion , $consulta) or die ("Algo Ha ido mal es la consulta a la base de datos tipo");
   }
   fclose($archivo);

   $archivo = fopen("Textos_planos/calificacion.txt" , "rb");
   $aDatos = fgetcsv($archivo,1000,$li);
   echo "</br>";
   while(feof($archivo)== false)
   {
     $aDatos = fgetcsv($archivo, 1000, $li);
     $id_cal = $aDatos[0];
     $pun_cal =  $aDatos[1];
     $consulta = "INSERT INTO calificacion (id_cal,pun_cal)values('".$id_cal."', '".$pun_cal."')";
     echo "</br>";
     $resultado = mysqli_query($conexion , $consulta) or die ("Algo Ha ido mal es la consulta a la base de datos cal");
   }
   fclose($archivo);

   $archivo = fopen("Textos_planos/proveedores.txt" , "rb");
   $aDatos = fgetcsv($archivo,1000,$li);
   echo "</br>";
   while(feof($archivo)== false)
   {
     $aDatos = fgetcsv($archivo, 1000, $li);
     $id_prov = $aDatos[0];
     $nom_prov =  $aDatos[1];
     $dir_prov = $aDatos[2];
     $consulta = "INSERT INTO proveedores(id_prov,nom_prov,dir_prov)values('".$id_prov."', '".$nom_prov."','".$dir_prov."')";
     echo "</br>";
     $resultado = mysqli_query($conexion , $consulta) or die ("Algo Ha ido mal es la consulta a la base de datos prov");
   }
   fclose($archivo);

   $archivo = fopen("Textos_planos/usuarios.txt" , "rb");
   $aDatos = fgetcsv($archivo,1000,$li);
   echo "</br>";
   while(feof($archivo)== false)
   {
     $aDatos = fgetcsv($archivo, 1000, $li);
     $id_usu = $aDatos[0];
     $nom_usu =  $aDatos[1];
     $ape_usu = $aDatos[2];
     $fec_nac_usu = $aDatos[3];
     $gen_usu = $aDatos[4];
     $tel_usu =  $aDatos[5];
     $email_usu = $aDatos[6];
     $cod_ciu =  $aDatos[7];
     $id_rol =  $aDatos[8];
     $consulta = "INSERT INTO usuario(id_usu,nom_usu,ape_usu,fec_nac_usu,gen_usu,tel_usu,email_usu,cod_ciu,id_rol)values
     ('".$id_usu."', '".$nom_usu."','".$ape_usu."', '".$fec_nac_usu."','".$gen_usu."','".$tel_usu."','".$email_usu."','".$cod_ciu."','".$id_rol."')";
     echo "</br>";
     $resultado = mysqli_query($conexion , $consulta) or die ("Algo Ha ido mal es la consulta a la base de datos usu");
   }
   fclose($archivo);

   $archivo = fopen("Textos_planos/acceso.txt" , "rb");
   $aDatos = fgetcsv($archivo,1000,$li);
   echo "</br>";
   while(feof($archivo)== false)
   {
     $aDatos = fgetcsv($archivo, 1000, $li);
     $token = $aDatos[0];
     $contra =  $aDatos[1];
     $id_usu = $aDatos[2];
     $consulta = "INSERT INTO acceso (token,contra,id_usu)values('".$token."', '".$contra."', '".$id_usu."')";
     echo "</br>";
     $resultado = mysqli_query($conexion , $consulta) or die ("Algo Ha ido mal es la consulta a la base de datos acc");
   }
   fclose($archivo);

   $archivo = fopen("Textos_planos/supermercados.txt" , "rb");
   $aDatos = fgetcsv($archivo,1000,$li);
   echo "</br>";
   while(feof($archivo)== false)
   {
     $aDatos = fgetcsv($archivo, 1000, $li);
     $id_sup = $aDatos[0];
     $nom_sup =  $aDatos[1];
     $dir_sup = $aDatos[2];
     $tel_sup =  $aDatos[3];
     $cod_ciu = $aDatos[4];
     $logo_sup =  $aDatos[5];
     $consulta = "INSERT INTO supermercado(id_sup,nom_sup,dir_sup,tel_sup,cod_ciu,logo_sup)values('".$id_sup."', '".$nom_sup."','".$dir_sup."', '".$tel_sup."' ,'".$cod_ciu."', '".$logo_sup."')";
     echo "</br>";
     $resultado = mysqli_query($conexion , $consulta) or die ("Algo Ha ido mal es la consulta a la base de datos sup");
   }
   fclose($archivo);

   $archivo = fopen("Textos_planos/usuario_supermercado.txt" , "rb");
   $aDatos = fgetcsv($archivo,1000,$li);
   echo "</br>";
   while(feof($archivo)== false)
   {
     $aDatos = fgetcsv($archivo, 1000, $li);
     $id_usu = $aDatos[0];
     $id_sup =  $aDatos[1];
     $consulta = "INSERT INTO usuario_supermercado(id_usu,id_sup)values('".$id_usu."', '".$id_sup."')";
     echo "</br>";
     $resultado = mysqli_query($conexion , $consulta) or die ("Algo Ha ido mal es la consulta a la base de datos usu_sup");
   }
   fclose($archivo);

   $archivo = fopen("Textos_planos/productos.txt" , "rb");
   $aDatos = fgetcsv($archivo,1000,$li);
   echo "</br>";
   while(feof($archivo)== false)
   {
     $aDatos = fgetcsv($archivo, 1000, $li);
     $id_pro = $aDatos[0];
     $nom_pro =  $aDatos[1];
     $des_pro = $aDatos[2];
     $img_pro = $aDatos[3];
     $mar_pro = $aDatos[4];
     $id_tip_pro =  $aDatos[5];
     $can_pro = $aDatos[6];
     $uniMed_pro =  $aDatos[7];
     $valVen_pro =  $aDatos[8];
     $id_sup =  $aDatos[9];
     $consulta = "INSERT INTO productos(id_pro,nom_pro,des_pro,img_pro,mar_pro,id_tip_pro,can_pro,uniMed_pro,valVen_pro,id_sup)values
     ('".$id_pro."', '".$nom_pro."','".$des_pro."', '".$img_pro."', '".$mar_pro."', '".$id_tip_pro."','".$can_pro."', '".$uniMed_pro."', '".$valVen_pro."' , '".$id_sup."')";
     echo "</br>";
     $resultado = mysqli_query($conexion , $consulta) or die ("Algo Ha ido mal es la consulta a la base de datos prod");
   }
   fclose($archivo);

   $archivo = fopen("Textos_planos/calificacion_supermercado.txt" , "rb");
   $aDatos = fgetcsv($archivo,1000,$li);
   echo "</br>";
   while(feof($archivo)== false)
   {
     $aDatos = fgetcsv($archivo, 1000, $li);
     $id_sup = $aDatos[0];
     $id_cal =  $aDatos[1];
     $consulta = "INSERT INTO calificacion_supermercado(id_sup,id_cal)values('".$id_sup."', '".$id_cal."')";
     echo "</br>";
     $resultado = mysqli_query($conexion , $consulta) or die ("Algo Ha ido mal es la consulta a la base de datos sup");
   }
   fclose($archivo);

   $archivo = fopen("Textos_planos/proveedores_productos.txt" , "rb");
   $aDatos = fgetcsv($archivo,1000,$li);
   echo "</br>";
   while(feof($archivo)== false)
   {
     $aDatos = fgetcsv($archivo, 1000, $li);
     $id_prov = $aDatos[0];
     $id_pro =  $aDatos[1];
     $consulta = "INSERT INTO proveedores_productos(id_prov,id_pro)values('".$id_prov."', '".$id_pro."')";
     echo "</br>";
     $resultado = mysqli_query($conexion , $consulta) or die ("Algo Ha ido mal es la consulta a la base de datos prov_prod");
   }
   fclose($archivo);

   $archivo = fopen("Textos_planos/pedidos.txt" , "rb");
   $aDatos = fgetcsv($archivo,1000,$li);
   echo "</br>";
   while(feof($archivo)== false)
   {
     $aDatos = fgetcsv($archivo, 1000, $li);
     $cod_ped = $aDatos[0];
     $fec_ped =  $aDatos[1];
     $id_usu = $aDatos[2];
     $dir_ped =  $aDatos[3];
     $id_sup = $aDatos[4];
     $id_usu_emp =  $aDatos[5];
     $tot_com=  $aDatos[6];
     $consulta = "INSERT INTO pedido(cod_ped,fec_ped,id_usu,dir_ped,id_sup,id_usu_emp,tot_com)values('".$cod_ped."', '".$fec_ped."','".$id_usu."', '".$dir_ped."' ,'".$id_sup."', '".$id_usu_emp."' , '".$tot_com."')";
     echo "</br>";
     $resultado = mysqli_query($conexion , $consulta) or die ("Algo Ha ido mal es la consulta a la base de datos ped");
   }
   fclose($archivo);

   $archivo = fopen("Textos_planos/detalle_pedido.txt" , "rb");
   $aDatos = fgetcsv($archivo,1000,$li);
   echo "</br>";
   while(feof($archivo)== false)
   {
     $aDatos = fgetcsv($archivo, 1000, $li);
     $id_ped = $aDatos[0];
     $id_pro =  $aDatos[1];
     $can_pro = $aDatos[2];
     $val_tot =  $aDatos[3];
     $cod_ped = $aDatos[4];
     $consulta = "INSERT INTO detalle_pedido(id_ped,id_pro,can_pro,val_tot,cod_ped)values('".$id_ped."', '".$id_pro."','".$can_pro."', '".$val_tot."' ,'".$cod_ped."')";
     echo "</br>";
     $resultado = mysqli_query($conexion , $consulta) or die ("Algo Ha ido mal es la consulta a la base de datos deta");
   }

   fclose($archivo);
   mysqli_close($conexion);
?>
