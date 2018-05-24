<!-- empieza menu -->
<!-- ------------------------->
      <div class="menuS--top">
          <div class="icon--mobile">
              <i class="fa fa-bars"></i>
          </div>
          <div class="wrap-top">
            <div class="user--name">
              <?php
                echo $_SESSION['USER']['NAME'];
                // echo $_SESSION['SUPERMERCADO']['supermerket'];
              ?>
            </div>
            <div class="perf">
              <div class="down">
                <a href="#" class="down-all"><i class="fa fa-user-o"></i> Perfil <i class="fa fa-caret-down"></i> </a>
                <div class="content-down">
                  <a href="Notificaciones"><i class="fa fa-bell" aria-hidden="true"></i> Notificaciones</a> 
                  <a href="settings-Super"><i class="fa fa-cog" aria-hidden="true"></i> Ajustes</a>
                </div>
              </div>
              <div class="log-out">
                <ul>
                  <li> <a href="cerrar-sesion">Cerrar Sesion <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
      </div>
<!-- termina menu -->
