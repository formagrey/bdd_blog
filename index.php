<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <?php include 'include/header.php' ?>
        <?php include 'include/connect.php' ?>
        <title>BLOG - PHP/MYSQL</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>BLOG en PHP MYSQL</h1>
                    <?php include 'include/nav.php' ?>
                </div>
                <div class="container animated fadeInDown">
                    <div class="row text-center">

                            <?php
                                $sql="SELECT Article.id as id, Article.texte as texte, Article.titre as titre FROM `Article`
                                INNER JOIN Auteur ON Article.id_auteur = Auteur.id ORDER BY id DESC LIMIT 10";
                                $resultat=mysqli_query($link,$sql);
                                    if (!$resultat) {
                                        die('Erreur dans la requette: '.mysqli_error($link));
                                    }
                                    while ($row=mysqli_fetch_array($resultat)) {
                                        echo '<span class="animated flip article col-xs-12 col-md-6"><a href="article.php?id='.$row['id'].'"><h4>'.$row['titre'].'</h4></a>
                                    <p class="text-truncate">'.$row['texte'].'</p> </span>';
                                    }
                            ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="animated fadeInUp">
            <?php include 'include/formulaire.php' ?>
        </div>
        <div class="footer">

        </div>

    </body>
</html>
