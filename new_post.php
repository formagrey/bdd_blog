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
$id_categorie = $_POST["id_categorie"] ;



//création de la requête SQL:

//test utilisateur:
$testUtilisateur = mysqli_query($link,
	"SELECT mail
	FROM Auteur
	WHERE mail = '$mail' ");
    $res_test_user = mysqli_num_rows($testUtilisateur);

if($res_test_user == 0)
{
	$new_auteur = mysqli_query($link,
	"INSERT INTO Auteur (nom, prenom, mail)
	VALUES ('$nom', '$prenom', '$mail')");
}




	$res = mysqli_query($link,
	"SELECT id
	FROM Auteur
	WHERE mail = '$mail' ");
    $res_auteur = mysqli_fetch_assoc($res);
    $id_auteur = $res_auteur['id'];



if($id_categorie != 0)
{
	$requete = mysqli_query($link,
	"INSERT INTO Article (titre, texte, id_auteur, id_categorie)
	VALUES ('$titre', '$texte', '$id_auteur', '$id_categorie')");

	//affichage des résultats, pour savoir si l'insertion a marchée:
	if($requete)
		{
		    echo("L'insertion a été correctement effectuée") ;
		    header("Location: index.php");
		}

	else
		{
		    echo("L'insertion à échouée" . mysqli_error($link)) ;
		}
}

else
{
	echo("L'insertion à échouée: " . mysqli_error($link)) ;
}

?>