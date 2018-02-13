<?php
    $link = mysqli_connect("localhost","root","free");
    if (!$link) { // si link = faux connection doit s'arreter
        die('Not connected: ' .mysqli_error());
    }

    $db_selected = mysqli_select_db($link,"BDD_BLOG");
    if(!$db_selected) { // si $db_selected faux base de donnée inacessible stopper connexion
        die('bdd innaccessible :' .mysqli_error());
    }
 ?>
