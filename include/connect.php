<?php
    $link = mysqli_connect("localhost","root","free"); // connection à la base de donnée (ip serveur, nom d'utilisateur, mot de passe)
    if (!$link) { // si link = faux connection doit s'arreter
        die('Not connected: ' .mysqli_error());
    }

    $db_selected = mysqli_select_db($link,"BDD_BLOG");
    if(!$db_selected) { // si $db_selected faux base de donnée inacessible stopper la connexion
        die('bdd innaccessible :' .mysqli_error());
    }
 ?>
