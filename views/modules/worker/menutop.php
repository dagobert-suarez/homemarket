<div class="menu--top">
    <!-- <div class="icon--mobile">
        <i class="fa fa-bars"></i>
    </div> -->
    <div class="user--name">
        <?php
        echo $_SESSION['USER']['NAME'];
        echo $_SESSION['SUPERMERCADO']['supermarket'];
        ?>
    </div>
    <div class="down">
        <a href="#" class="down-all"><i class="fa fa-user-o"></i> Perfil <i class="fa fa-caret-down"></i></a>
        <div class="content-down">
            <!-- <li><i class="fa fa-bell" aria-hidden="true"></i> Notificaciones</li> -->
            <li><a href="settings-worker"><i class="fa fa-cog" aria-hidden="true"></i> Ajustes</a></li>

        </div>
    </div>
    <ul>
        <li> <a href="cerrar-sesion">Cerrar Sesion <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>

    </ul>
</div>
