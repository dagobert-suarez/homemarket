<div class="menuS--top">
    <div class="icon--mobile">
        <i class="fa fa-bars"></i>
    </div>
    <div class="user--name">
        <?php
        echo $_SESSION['USER']['NAME'];
        ?>
    </div>
    <ul>
        <li><i class="fa fa-bell" aria-hidden="true"></i></li>
        <li><a href="settings-Super"><i class="fa fa-cog" aria-hidden="true"></i></a></li>
        <li><a href="cerrar-sesion" > <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>

    </ul>

</div>
