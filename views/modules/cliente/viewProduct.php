<?php
    $data = $this->viewProducts();
    // print_r($data);

    foreach ($data as $row) {
      echo $row["nom_pro"];
       echo $row["des_pro"];
       echo $row["mar_pro"];
        echo $row["id_tip_pro"];

    }
 ?>
