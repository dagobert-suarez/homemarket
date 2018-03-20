<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SuperAdmin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="views/assets/css/master.css">
        <link rel="shortcut icon" href="views/assets/image/icono.ico">
  </head>
  <body>
       <section class="container1S">  
        <header class="main--nav ">

           <!--  <div class="icon--mobile">
                <i class="fa fa-window-close">&times;</i>
            </div -->
            <?php

              require_once("views/modules/SuperAdmin/profileS.php");
              require_once("views/modules/SuperAdmin/navigator.php");

             ?>
        </header>
        <div class="wrap--content ">
         <?php
      
             require_once("views/modules/SuperAdmin/menuTopsuA.php");
                  require_once("views/modules/SuperAdmin/superAdmin.php");
           
           ?>


   
