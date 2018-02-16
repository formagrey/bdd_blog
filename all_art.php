<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <?php include 'include/header.php' ?>
        <?php include 'include/fonction.php' ?>

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
                        $link = connect();
                        all_art($link);
                    ?>
                </div>
            </div>
        </div>
<!--On inclue notre formulaire de nouvel article-->
        <div class="animated fadeInUp">
            <?php include 'include/formulaire.php' ?>
        </div>
    </body>
</html>
