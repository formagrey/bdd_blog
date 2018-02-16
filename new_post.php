<?php

//on se connecte
include 'include/fonction.php';
$link = connect();

// variables auteur
$nom = $_POST["nom"] ;
$prenom = $_POST["prenom"] ;
$mail = $_POST["mail"] ;

// variables Article
$titre = $_POST["titre"] ;
$texte = $_POST["texte"] ;

$id_categorie = $_POST["categorie"] ;

new_article($link,$nom,$prenom,$mail,$titre,$texte,$id_categorie);
?>
