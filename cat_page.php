<?php
    

include 'include/connect.php';

    $categorie = $_GET["id"];

    $sql="SELECT Article.id as id, Article.texte as texte, Article.titre as titre, Article.id_categorie as cat FROM `Article`
    INNER JOIN Categorie ON Article.id_categorie = Categorie.id
    WHERE Categorie.id = '$categorie' ";
    $resultat=mysqli_query($link,$sql);

        if (!$resultat) {
            die('Erreur dans la requette: '.mysqli_error($link));
        }
        while ($row=mysqli_fetch_array($resultat)) {
            

        echo 
        '<span class="animated flip article col-xs-12 col-md-6"><a href="article.php?id='.$row['id'].'">'.$row['titre'].'</a>
        <p>'.$row['texte'].'</p> </span>





        ';
    }
?>
