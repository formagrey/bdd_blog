<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <?php include 'include/header.php' ?>
        <?php include 'include/fonction.php' ?>
        <title>Niarticles par chategorie</title>
    </head>
    <body>
    <div class="col-12 text-center">
        <h1>Blog Chatastrophique</h1>
    </div>
    <?php include 'include/nav.php' ?>

        <div class="container">
            <div class="row ">
                <div class="container">
                    <div class="article row">

                <?php
                    $id_article = $_GET['id'];
                    $infos_article = article_page($link,$id_article);
                    echo '<h4 class="text-danger">'.$infos_article['titre'].'</h4><br>';
                    echo '<br><br><p>'.$infos_article['texte'].'</p>';
                    echo '<br><br><span class="col-12 text-right text-success">'.$infos_article['nom'].'</span>';
                    //id_article($link);
                ?>

                    </div>
                    <div class="col-12">
                        <form method='post' action='index.php'>
                            <button class='btn btn-default' type="submit" Value="Submit">Retour</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </body>
</html>
