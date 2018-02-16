<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <?php include 'include/header.php' ?>
        <?php include 'include/fonction.php';?>
        <title>Niarticles par chategorie</title>
    </head>
    <body>
        <div class="col-12 text-center">
            <h1>Blog Chatastrophique</h1>
        </div>
<!--Inclusion de la navbar-->
            <?php include 'include/nav.php' ?>
        <div class="container col-12">
            <div class="row">
                <div class="container">
                    <div class="row">
<!--connection à la base de donnée-->
                <?php
//Requete SQL de récurération des ID et trie par catégorie
                    $categorie = $_GET["id"];
                    connect();
                    cat_page($link);
                ?>
<!--Bouton retour page d'accueil-->
                    <div class="col-12">
                        <form method='post' action='index.php'>
                            <button class='btn btn-dark' type="submit" Value="Submit">Retour</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
