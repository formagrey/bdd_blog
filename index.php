<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <?php include 'include/header.php' ?> <!--bootstrap + animate.css + main.css + fontawsome-->
        <?php include 'include/fonction.php' ?><!--connection à la base de donnée + acces aux fonctions-->
        <title>Niaccueil</title>
    </head>
    <body>
        <div class="col-12 text-center">
            <h1>Blog Chatastrophique</h1>
        </div>
<!--Inclusion de la navbar-->
        <?php include 'include/nav.php' ?>
            <div class="row col-12">
                <div class="container animated fadeInDown">
                    <div class="row text-center">
<!--Requete SQL de récurération des 10 derniers articles tronqués -->
                            <?php
                                $link = connect();
                                article_Accueil($link);
                            ?>
                    </div>
                </div>
            </div>
<!--Inclusion du formulaire de nouvel article-->
	        <div class="animated fadeInUp">
	            <?php include 'include/formulaire.php' ?>
	        </div>
    </body>
</html>
