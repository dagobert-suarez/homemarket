<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>exportar</title>
  </head>
  <body>

<?php
$nombre_archivo = "ficha1355155.txt";
if (file_exists($nombre_archivo)) {
  $mensaje = "el archivo nombre $nombre_archivo se ha modificado";
}else {
  $mensaje = "el archivo $nombre_archivo se ha creado";
}
if ($archivo = fopen($nombre_archivo, "a")) {
  if (fwrite($archivo, date("d m Y H:m:s"). " ". $mensaje. "\n")) {
    echo "se ha ejecutado correctamente";
  }
  else {
    echo "ha habido un problema al crear el archivo";
  }
  fclose($archivo);
}
 ?>
</body>
</html>
