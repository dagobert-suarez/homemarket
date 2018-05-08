<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dashboard empleado</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="views/assets/css/mainWorker.css">
        <link rel="shortcut icon" href="views/assets/image/icono.ico">
  </head>
  <body>
      <section class="container1k">
        <header class="main--nav black1">

            <!-- <div class="icon--mobile">
                <i class="fa fa-window-close"></i>
            </div> -->
            <?php
            require_once("views/modules/worker/profile.php");
            require_once("views/modules/worker/navigator.php");
            require_once("views/modules/worker/navigator2.php")
            ?>
        </header>
        <div class="wrap--content">
        <?php
            require_once("views/modules/worker/menutop.php");
            require_once("views/modules/worker/menutwo.php");
            ?>

            <article>
