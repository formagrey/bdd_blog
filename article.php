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

        <div class="container col-12">
            <div class="row col-12">
                <div class="container">
            <div class="article ">

                <?php
                    $id_article = $_GET['id'];
                    id_article($link);
                ?>


            <div class="row col-12">
                <span class="titre col-12">
                    <br>
                    <?php
                        $sql_article="SELECT Auteur.nom as nom, Article.texte as texte FROM `Article`
                        INNER JOIN Auteur ON Article.id_auteur = Auteur.id
                        WHERE Article.id=$id_article AND Article.id_auteur=Auteur.id";

                        $resultat=mysqli_query($link,$sql_article);
                        $row2=mysqli_fetch_assoc($resultat);
                    ?>
                    <span class="col-12">Article : <?php echo $row2['texte'];?></span>

                    <div class="auteur text-right"></br>Auteur : <?php echo $row2['nom'];?></div>
                </span>
            </div>
        </div>
                    <div class="col-12">
                        <form method='post' action='index.php'>
                            <button type="submit" Value="Submit">Retour</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </body>
</html>
