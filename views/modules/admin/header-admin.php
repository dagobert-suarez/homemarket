<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>tu eres el admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="views/assets/css/mainAdmin.css">
  </head>
  <body>
  <section class="">
    <?php
        require_once 'menuadmin.php';
    ?>
    <div class="wrap--content">
                <!-- <?php require_once("views/include/scope.menutop.php"); ?> -->

                <article>

    <!-- <div class="content-admin">
          <?php
          // require_once "createProduct.php";
          // require_once 'admin.php';
          ?>

    </div> -->

<header>
  <?php
      require_once "createProduct.php";
      require_once 'admin.php';
  ?>

  <a href="cerrar-sesion">salir</a>
</header>
