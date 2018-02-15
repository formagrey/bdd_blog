<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <?php include 'include/header.php' ?>
        <title>Niarticles par chategorie</title>
    </head>
    <body>
        <div class="col-12 text-center">
            <h1>Blog Chatastrophique</h1>
        </div>
<!--On inclue notre navbar-->
        <?php include 'include/nav.php' ?>
        <div class="container col-12">
            <div class="row col-12">
                <div class="container">
                    <div class="article ">
<!--On récupère les données de l'article (son id, son contenu et son titre)
    pour l'article sur lequel on clique-->
                        <?php
                            $id_article = $_GET['id'];
                            $sql="SELECT Article.id as id, Article.texte as texte, Article.titre as titre
                                FROM `Article`
                                INNER JOIN Auteur ON Article.id_auteur = Auteur.id
                                WHERE Article.id=$id_article";
                            $resultat=mysqli_query($link,$sql);
                            $row=mysqli_fetch_assoc($resultat);
                        ?>
<!--On affiche le titre, le contenu et l'auteur de l'article (après l'avoir récupéré)-->
                        <span class="nom">Titre : <?php echo $row['titre']; ?>
                            <div class="row col-12">
                                <span class="titre col-12">
                                    <br>
                                    <?php
                                        $sql_article="SELECT Auteur.nom as nom, Article.texte as texte
                                            FROM `Article`
                                            INNER JOIN Auteur ON Article.id_auteur = Auteur.id
                                            WHERE Article.id=$id_article AND Article.id_auteur=Auteur.id";
                                        $resultat=mysqli_query($link,$sql_article);
                                        $row2=mysqli_fetch_assoc($resultat);
                                    ?>
                                    <span class="col-12">
                                        Article : <?php echo $row2['texte'];?>
                                    </span>
                                    <div class="auteur text-right">
                                        <br>Auteur : <?php echo $row2['nom'];?>
                                    </div>
                                </span>
                            </div>
                        </span>
                        <div class="col-12">
<!--Bouton retour pour revenir à la page d'accueil-->
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
