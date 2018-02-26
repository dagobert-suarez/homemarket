<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>cliente</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="views/assets/css/maincliente.css">
        <link rel="shortcut icon" href="views/assets/image/icono.ico">
  </head>
  <body>
      <section>
          <header class="menu--top black1">
              <?php require_once("views/modules/cliente/menuTopC.php"); ?>
          </header><bR>

          <div id="map">

          </div >
<div class="wrap--content">
    <?php
    require_once("views/modules/cliente/navigator.php");
    // include('views/modules/cliente/contenedor.php');
    ?>
    
