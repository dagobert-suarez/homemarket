<!-- empieza menu -->
<!-- ------------------------->
      <div class="menuS--top">
          <div class="icon--mobile">
              <i class="fa fa-bars"></i>

          </div>
          <div class="user--name">
              <?php
              echo $_SESSION['USER']['NAME'];
              ?>
          </div>
          <div class="down">
              <a href="#" class="down-all"><i class="fa fa-user-o"></i> Perfil <i class="fa fa-caret-down"></i> </a>
              <div class="content-down">
                  <li><a href="Notificaciones"><i class="fa fa-bell" aria-hidden="true"></i> Notificaciones</a> </li>
                  <li><a href="settings-Super"><i class="fa fa-cog" aria-hidden="true"></i> Ajustes</a></li>
              </div>
          </div>
          <div class="log-out">
            <ul>
              <li> <a href="cerrar-sesion">Cerrar Sesion <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
            </ul>
          </div>
      </div>
<!-- termina menu -->
