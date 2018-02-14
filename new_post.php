<?php
//on se connecte
include 'include/connect.php';

// variables auteur
$nom = $_POST["nom"] ;
$prenom = $_POST["prenom"] ;
$mail = $_POST["mail"] ;

// variables Article
$titre = $_POST["titre"] ;
$texte = $_POST["texte"] ;
//$lien = $_POST["lien"] ;
//$date = $_POST["date"]
//$image = $_POST["image"]

//Variables Catégories

//création de la requête SQL:

//test utilisateur:
$testUtilisateur = mysqli_query($link, 
	"SELECT mail
	FROM Auteur
	WHERE mail = $mail");

if($testUtilisateur == null || $testUtilisateur == "")
{
	$new_auteur = mysqli_query($link,
	"INSERT INTO Auteur (nom, prenom, mail)
	VALUES ('$nom', '$prenom', '$mail')");
}

else
{
	$id_auteur = mysqli_query($link,
	"SELECT id
	FROM Auteur
	WHERE mail = $testUtilisateur
	");
	return($id_auteur);
}





$new_post = mysqli_query($link, 
	"INSERT INTO Article (titre, texte, id_auteur)
	VALUES('$titre', '$texte', '$id_auteur')";



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
