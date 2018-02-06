<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/neighbour.css">
    <style>
    nav, header{
      display: block;/*sirve para hacer reconocer todos los elementos en bloque*/
    }

    #menu {
      background-color: black;
      padding: 0px 20px;
    }

    #menu li {
      display: inline-block;
      list-style: none;
      padding: 5px;
      font: bold 14px verdana, sans-serif;
    }

    #menu ul li {
      color: white;
    }

    #menu ul li:hover {
      background-color: #eee;
      color: #0c0c0c;
      cursor: pointer;
    }

    #cabeza {
      background-color: blue;
    }
    </style>
  </head>
  <body>
    <header id="cabeza">
      <h1>pagina de los aliados</h1>
    </header>

    <nav id="menu">
      <ul>
        <li><a href="inicio">inicio</a></li>
      </ul>
    </nav>
