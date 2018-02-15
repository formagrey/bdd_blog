<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <?php include 'include/header.php' ?>
        <?php include 'include/connect.php' ?>
        <title>Tous les niarticles</title>
    </head>
    <body>
        <div class="col-12 text-center">
            <h1>Blog Chatastrophique</h1>
        </div>
<!--On inclue notre navbar-->
        <?php include 'include/nav.php' ?>
        <div class="row col-12">
            <div class="container animated fadeInDown">
                <div class="row text-center">
<!--On récupère les données des articles (titre, contenu et la date) pour tous les afficher-->
                    <?php
                        $sql="SELECT Article.id as id, Article.texte as texte, Article.titre as titre, date
                            FROM `Article`
                            INNER JOIN Auteur ON Article.id_auteur = Auteur.id";
                        $resultat=mysqli_query($link,$sql);
                        if (!$resultat)
                        {
                            die('Erreur dans la requette: '.mysqli_error($link));
                        }
                        while ($row=mysqli_fetch_array($resultat))
                        {
                            echo '<span class="animated flip article col-xs-12 col-md-6" style="overflow: auto"><a href="article.php?id='.$row['id'].'"><h4>'.$row['titre'].'</h4></a>
                                <p class="text-truncate">'.$row['texte'].'</p>
                                <p>'.$row['date'].'</p></span>';
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="animated fadeInUp">
            <?php include 'include/formulaire.php' ?>
        </div>
    </body>
</html>
