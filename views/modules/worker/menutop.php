<div class="menu--top">
    <!-- <div class="icon--mobile">
        <i class="fa fa-bars"></i>
    </div> -->
    <?php
      echo 	$_SESSION['USER']['NAME'];
    ?>
    <ul>
        <li><i class="fa fa-bell" aria-hidden="true"></i> </li>
        <li><a href="Ajustes"><i class="fa fa-cog" aria-hidden="true"></i></a></li>
        <li> <a href="cerrar-sesion"> <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
    </ul>
</div>
