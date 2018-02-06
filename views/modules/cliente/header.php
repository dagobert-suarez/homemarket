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
      <div class="menu--top green1">
          <div class="content-profile">

          </div>
          <div class="left">
              <span><i class="fa fa-bars" aria-hidden="true" id="menu"></i><i class="fa fa-bars" aria-hidden="true" id="menu-mobile"></i></span>
          </div>
          <div class="r">
              <ul class="options">
                  <li><i class="fa fa-bell" aria-hidden="true"></i> </li>
                  <li><i class="fa fa-cog" aria-hidden="true"></i></li>
                  <li> <a href="cerrar-sesion"> <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
              </ul>
          </div>
      </div>
  <section class="clien-one">
    <!-- <div class="wrap-menu-mobile">
        <div class="close--mobile">&times;</div>
        <ul>
            <li>inicio</li>
            <li><a href="Supermecados"></a>Supermercados</li>
            <li><a href="Productos"></a>Productos</li>
            <li>notificaciones</li>
            <li>ajustes</li>
            <li><a href="cerrar-sesion"></a>cerra sesion</li>
        </ul>
    </div> -->
    <!-- <div class="info-map gray1">
    </div><br><br><br><br> -->
    <div id="map">

    </div >
    <div class="more">
      <?php
        require_once 'views/modules/cliente/more.php';
      ?>


    <article class="">
