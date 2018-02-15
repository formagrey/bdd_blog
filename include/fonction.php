<?php
include 'include/connect.php';

/*Requete SQL de récurération des 10 derniers articles tronqués*/
function article_Accueil($link) {
    $sql="SELECT Article.id as id, Article.texte as texte, Article.titre as titre, date FROM `Article`
        INNER JOIN Auteur ON Article.id_auteur = Auteur.id ORDER BY id DESC LIMIT 10";
    $resultat=mysqli_query($link,$sql);
        if (!$resultat) {
            die('Erreur dans la requette: '.mysqli_error($link));
        }
        while ($row=mysqli_fetch_array($resultat)) {
            echo '<span class="animated flip article col-xs-12 col-md-6"><a href="article.php?id='.$row['id'].'"><h4>'.$row['titre'].'</h4></a>
            <p class="text-truncate">'.$row['texte'].'</p>
            <p>'.$row['date'].'</p> </span>';
        }
}


function all_art($link) {
    $sql="SELECT Article.id as id, Article.texte as texte, Article.titre as titre, date FROM `Article`
    INNER JOIN Auteur ON Article.id_auteur = Auteur.id";
    $resultat=mysqli_query($link,$sql);
        if (!$resultat) {
            die('Erreur dans la requette: '.mysqli_error($link));
        }
        while ($row=mysqli_fetch_array($resultat)) {
            echo '<span class="animated flip article col-xs-12 col-md-6"><a href="article.php?id='.$row['id'].'"><h4>'.$row['titre'].'</h4></a>
        <p class="text">'.$row['texte'].'</p>
        <p class="text">'.$row['date'].'</p> </span>';
        }
}

function id_article($link){
    $id_article = $_GET['id'];
    $sql="SELECT Article.id as id, Article.texte as texte, Article.titre as titre FROM `Article`
        INNER JOIN Auteur ON Article.id_auteur = Auteur.id WHERE Article.id=$id_article";

    $resultat=mysqli_query($link,$sql);
    $row=mysqli_fetch_assoc($resultat);
    echo $row['titre'];
}

function article_page($link, $id_article){

    $sql_article="SELECT Auteur.nom as nom, Article.texte as texte, Article.titre as titre FROM `Article`
    INNER JOIN Auteur ON Article.id_auteur = Auteur.id
    WHERE Article.id=$id_article AND Article.id_auteur=Auteur.id";

    $resultat=mysqli_query($link,$sql_article);
    $row2=mysqli_fetch_assoc($resultat);

    return $row2;
}
?>
