<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>cliente</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="views/assets/css/maincliente.css">
  </head>
  <body>
  <section class="">
    <div class="menu--top green1">
      <div class="content-profile">
        <p><?php if (isset($_SESSION['user'])) {
            echo"Hola:"." ".$_SESSION['user'];
        }else{}
       ?></p>
      </div>
      <ul>
        <li><i class="fa fa-bell" aria-hidden="true"></i> </li>
        <li><i class="fa fa-cog" aria-hidden="true"></i></li>
        <li><i class="fa fa-sign-out" aria-hidden="true"></i></li>
      </ul>
    </div>
    <div class="info-map gray1">
      <div id="map"></div>
    </div>
    <div class="more">
      <?php
        require_once 'views/modules/cliente/more.php';
        require_once 'views/modules/cliente/content.gallery.php';

      ?>
    </div>
