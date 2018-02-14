<?php
//on se connecte
include 'include/connect.php';

// variables auteur
$nom = $_POST["nom"] ;
$nom = $_POST["prenom"] ;
$mail = $_POST["mail"] ;

// variables Article
$titre = $_POST["titre"] ;
$texte = $_POST["texte"] ;
//$lien = $_POST["lien"] ;
//$date = $_POST["date"]
//$image = $_POST["image"]

//Variables Catégories

//création de la requête SQL:

$new_post = "INSERT INTO Article(titre, texte, nom, prenom, mail)
         VALUES('$titre', '$texte', '$nom', '$prenom', '$mail')";


//exécution de la requête SQL:
$requete = mysqli_query($link, $new_post);


//affichage des résultats, pour savoir si l'insertion a marchée:
if($requete)
    {
      echo("L'insertion a été correctement effectuée") ;
      header("Location: index.php");
    }
else
    {
      echo("L'insertion à échouée") ;
    }
 ?>
