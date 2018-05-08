<?php
// $usuario = "root";
// $password = "";
// $servidor = "localhost";
// $basededatos = "home_market";
// $conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("no se ha conectado al servidor de la base de datos");
// $db= mysqli_select_db( $conexion, $basededatos ) or die ("no se conecta");
// class extraer{
//   public function __CONSTRUCT(){
//     try {
//       $this->pdo = DataBase::openDB();
//       $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     } catch (PDOException $e) {
//       die($e->getMessage());
//     }
//   }
//todo el código se repite de acuerdo a las tablas en bd
$nombre_archivo = "views/modules/superAdmin/extraer_subir/Textos_planos/usuarios.txt";
$li=";";
$archivo = fopen($nombre_archivo, "a");
$mensaje = "id_usu ".$li."nombre".$li."apellido".$li."fecha nacimiento".$li."genero".$li."telefono".$li."correo".$li."cod_ciu".$li."rol";
fwrite($archivo, $mensaje);
$consulta = "SELECT * FROM usuario";
$resultado = mysqli_query($conexion, $consulta) or die ("no dio consulta");
while ($columna = mysqli_fetch_array($resultado)) {
  $mensaje = $columna["id_usu"].$li.$columna['nom_usu'].$li.$columna['ape_usu'].$li.$columna['fec_nac_usu'].$li.$columna['gen_usu']
  .$li.$columna['tel_usu'].$li.$columna['email_usu'].$li.$columna['cod_ciu'].$li.$columna['id_rol'];
  fwrite($archivo, "\r\n".$mensaje);
}
$nombre_archivo = "views/modules/superAdmin/extraer_subir/Textos_planos/acceso.txt";
$li=";";
$archivo = fopen($nombre_archivo, "a");
$mensaje = "token ".$li."contra".$li."id_usu";
fwrite($archivo, $mensaje);
$consulta = "SELECT * FROM acceso";
$resultado = mysqli_query($conexion, $consulta) or die ("no dio consulta");
while ($columna = mysqli_fetch_array($resultado)) {
  $mensaje = $columna["token"].$li.$columna['contra'].$li.$columna['id_usu'];
  fwrite($archivo, "\r\n".$mensaje);
}
$nombre_archivo = "views/modules/superAdmin/extraer_subir/Textos_planos/rol.txt";
$archivo = fopen($nombre_archivo, "a");
$mensaje = "id_rol".$li."nom_rol";
fwrite($archivo, $mensaje);
$consulta = "SELECT * FROM rol";
$resultado = mysqli_query($conexion, $consulta) or die ("no dio consulta");
while ($columna = mysqli_fetch_array($resultado)) {
  $mensaje = $columna['id_rol'].$li.$columna['nom_rol'];
  fwrite($archivo, "\r\n".$mensaje);
}
$nombre_archivo = "views/modules/superAdmin/extraer_subir/Textos_planos/productos.txt";
$archivo = fopen($nombre_archivo, "a");
$mensaje = "id".$li."nombre".$li."descripcion".$li."img".$li."marca".$li."id_tipo".$li."cantidad".$li."uni_medida"
.$li."valor".$li."id_sup";
fwrite($archivo, $mensaje);
$consulta = "SELECT * FROM productos";
$resultado = mysqli_query($conexion, $consulta) or die ("no dio consulta");
while ($columna = mysqli_fetch_array($resultado)) {
  $mensaje = $columna['id_pro'].$li.$columna['nom_pro'].$li.$columna['des_pro'].$li.$columna['img_pro'].$li.$columna['mar_pro']
  .$li.$columna['id_tip_pro'].$li.$columna['can_pro'].$li.$columna['uniMed_pro'].$li.$columna['valVen_pro'].$li.$columna['id_sup'];
  fwrite($archivo, "\r\n".$mensaje);
}
$nombre_archivo = "views/modules/superAdmin/extraer_subir/Textos_planos/supermercados.txt";
$archivo = fopen($nombre_archivo, "a");
$mensaje = "id".$li."nombre".$li."direccion".$li."telefono".$li."cod_ciu".$li."logo".$li."lon_sup"
.$li."lat_sup".$li."inicio".$li."fin";
fwrite($archivo, $mensaje);
$consulta = "SELECT * FROM supermercado";
$resultado = mysqli_query($conexion, $consulta) or die ("no dio consulta");
while ($columna = mysqli_fetch_array($resultado)) {
  $mensaje = $columna['id_sup'].$li.$columna['nom_sup'].$li.$columna['dir_sup'].$li.$columna['tel_sup'].$li.$columna['cod_ciu']
  .$li.$columna['logo_sup'].$li.$columna['lon_sup'].$li.$columna['lat_sup'].$li.$columna['hor_ini'].$li.$columna['hor_fin'];
  fwrite($archivo, "\r\n".$mensaje);
}
$nombre_archivo = "views/modules/superAdmin/extraer_subir/Textos_planos/proveedores.txt";
$archivo = fopen($nombre_archivo, "a");
$mensaje = "id".$li."nombre".$li."direccion".$li."telefono";
fwrite($archivo, $mensaje);
$consulta = "SELECT * FROM proveedores";
$resultado = mysqli_query($conexion, $consulta) or die ("no dio consulta");
while ($columna = mysqli_fetch_array($resultado)) {
  $mensaje = $columna['id_prov'].$li.$columna['nom_prov'].$li.$columna['dir_prov'].$li.$columna['tel_prov'];
  fwrite($archivo, "\r\n".$mensaje);
}
$nombre_archivo = "views/modules/superAdmin/extraer_subir/Textos_planos/tipo_producto.txt";
$archivo = fopen($nombre_archivo, "a");
$mensaje = "id_tipo".$li."nombre".$li."tipo";
fwrite($archivo, $mensaje);
$consulta = "SELECT * FROM tipo_producto";
$resultado = mysqli_query($conexion, $consulta) or die ("no dio consulta");
while ($columna = mysqli_fetch_array($resultado)) {
  $mensaje = $columna['id_tip_pro'].$li.$columna['nom_tip_pro'];
  fwrite($archivo, "\r\n".$mensaje);
}
$nombre_archivo = "views/modules/superAdmin/extraer_subir/Textos_planos/proveedores_productos.txt";
$archivo = fopen($nombre_archivo, "a");
$mensaje = "id_prov".$li."id_pro";
fwrite($archivo, $mensaje);
$consulta = "SELECT * FROM proveedores_productos";
$resultado = mysqli_query($conexion, $consulta) or die ("no dio consulta");
while ($columna = mysqli_fetch_array($resultado)) {
  $mensaje = $columna['id_prov'].$li.$columna['id_pro'];
  fwrite($archivo, "\r\n".$mensaje);
}
$nombre_archivo = "views/modules/superAdmin/extraer_subir/Textos_planos/calificacion.txt";
$archivo = fopen($nombre_archivo, "a");
$mensaje = "id".$li."punto";
fwrite($archivo, $mensaje);
$consulta = "SELECT * FROM calificacion";
$resultado = mysqli_query($conexion, $consulta) or die ("no dio consulta");
while ($columna = mysqli_fetch_array($resultado)) {
  $mensaje = $columna['id_cal'].$li.$columna['pun_cal'];
  fwrite($archivo, "\r\n".$mensaje);
}
$nombre_archivo = "views/modules/superAdmin/extraer_subir/Textos_planos/pais.txt";
$archivo = fopen($nombre_archivo, "a");
$mensaje = "codigo_pais".$li."nombre";
fwrite($archivo, $mensaje);
$consulta = "SELECT * FROM pais";
$resultado = mysqli_query($conexion, $consulta) or die ("no dio consulta");
while ($columna = mysqli_fetch_array($resultado)) {
  $mensaje = $columna['cod_pais'].$li.$columna['nom_pais'];
  fwrite($archivo, "\r\n".$mensaje);
}
$nombre_archivo = "views/modules/superAdmin/extraer_subir/Textos_planos/departamento.txt";
$archivo = fopen($nombre_archivo, "a");
$mensaje = "codigo_dpto".$li."nombre".$li."codigo_pais";
fwrite($archivo, $mensaje);
$consulta = "SELECT * FROM dpto";
$resultado = mysqli_query($conexion, $consulta) or die ("no dio consulta");
while ($columna = mysqli_fetch_array($resultado)) {
  $mensaje = $columna['cod_dpto'].$li.$columna['nom_dpto'].$li.$columna['cod_pais'];
  fwrite($archivo, "\r\n".$mensaje);
}
$nombre_archivo = "views/modules/superAdmin/extraer_subir/Textos_planos/ciudad.txt";
$archivo = fopen($nombre_archivo, "a");
$mensaje = "codigo".$li."nombre".$li."codigo_dpto";
fwrite($archivo, $mensaje);
$consulta = "SELECT * FROM ciudad";
$resultado = mysqli_query($conexion, $consulta) or die ("no dio consulta");
while ($columna = mysqli_fetch_array($resultado)) {
  $mensaje = $columna['cod_ciu'].$li.$columna['nom_ciu'].$li.$columna['cod_dpto'];
  fwrite($archivo, "\r\n".$mensaje);
}
$nombre_archivo = "views/modules/superAdmin/extraer_subir/Textos_planos/pedidos.txt";
$archivo = fopen($nombre_archivo, "a");
$mensaje = "cod_ped".$li."fec_ped".$li."id_usu".$li."dir_ped".$li."id_sup".$li."id_usu_emp".$li."total";
fwrite($archivo, $mensaje);
$consulta = "SELECT * FROM pedido";
$resultado = mysqli_query($conexion, $consulta) or die ("no dio consulta");
while ($columna = mysqli_fetch_array($resultado)) {
  $mensaje = $columna['cod_ped'].$li.$columna['fec_ped'].$li.$columna['id_usu'].$li.$columna['dir_ped']
  .$li.$columna['id_sup'].$li.$columna['id_usu_emp'].$li.$columna['tot_com'];
  fwrite($archivo, "\r\n".$mensaje);
}
$nombre_archivo = "views/modules/superAdmin/extraer_subir/Textos_planos/calificacion_supermercado.txt";
$archivo = fopen($nombre_archivo, "a");
$mensaje = "id_sup".$li."id_calificacion";
fwrite($archivo, $mensaje);
$consulta = "SELECT * FROM calificacion_supermercado";
$resultado = mysqli_query($conexion, $consulta) or die ("no dio consulta");
while ($columna = mysqli_fetch_array($resultado)) {
  $mensaje = $columna['id_sup'].$li.$columna['id_cal'];
  fwrite($archivo, "\r\n".$mensaje);
}
$nombre_archivo = "views/modules/superAdmin/extraer_subir/Textos_planos/detalle_pedido.txt";
$archivo = fopen($nombre_archivo, "a");
$mensaje = "id_ped".$li."id_pro".$li."cantidad".$li."valor".$li."cod_ped";
fwrite($archivo, $mensaje);
$consulta = "SELECT * FROM detalle_pedido";
$resultado = mysqli_query($conexion, $consulta) or die ("no dio consulta");
while ($columna = mysqli_fetch_array($resultado)) {
  $mensaje = $columna['id_ped'].$li.$columna['id_pro'].$li.$columna['can_pro'].$li.$columna['val_tot'].$li.$columna['cod_ped'];
  fwrite($archivo, "\r\n".$mensaje);
}

$nombre_archivo = "views/modules/superAdmin/extraer_subir/Textos_planos/usuario_supermercado.txt";
$archivo = fopen($nombre_archivo, "a");
$mensaje = "id_usu".$li."id_sup";
fwrite($archivo, $mensaje);
$consulta = "SELECT * FROM usuario_supermercado";
$resultado = mysqli_query($conexion, $consulta) or die ("no dio consulta");
while ($columna = mysqli_fetch_array($resultado)) {
  $mensaje = $columna['id_usu'].$li.$columna['id_sup'];
  fwrite($archivo, "\r\n".$mensaje);
}
mysqli_close($conexion);
fclose($archivo);
}
 ?>
