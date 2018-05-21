<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="views/assets/css/recuperarcontra.css">
    <title></title>
  </head>
  <body>
    <form name="mail_frm" action="email" method="post" enctype="multipart/form-data">
    <br/>
      <div class="kepp">
        <h3>Restablecer Contraseña:</h3>
        <p>Ingresa Tu correo</p>
        <div class="form-group">
          <input type="email" placeholder = "Correo Electronico" class="form-control" id="k" name="mail_txt" />
        </div>
        <div class="form-group">
          <input type="submit" name="enviar_btn" class="btn btn-primary btn-sm" id="sent" value="Enviar" />

          <!-- <button type="button" name="enviar_btn" id="sent">Enviar</button> -->

        </div>
      </div>
  </body>
</html>
