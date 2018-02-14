<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <?php
            include 'include/header.php';
            include 'include/connect.php';
        ?>
        <title>Article</title>
    </head>
    <body>
        <div class="container-fluid col-12">
            <div class="row">
                <?php include 'include/nav.php' ?>
                <?php
                    $id_article = $_GET['id'];

                    $sql="SELECT Article.id as id, Article.texte as texte, Article.titre as titre FROM `Article`
                    INNER JOIN Auteur ON Article.id_auteur = Auteur.id WHERE Article.id=$id_article";

                    $resultat=mysqli_query($link,$sql);
                    $row=mysqli_fetch_assoc($resultat);

                ?>
                <span="nom">Titre : <?php echo $row['titre']; ?>
            </div>

            <div class="row">
                <span class="titre">
                    <br>
                    <?php
                        //$id_article = $_GET['id'];
                        $sql_article="SELECT Auteur.nom as nom, Article.texte as texte FROM `Article`
                        INNER JOIN Auteur ON Article.id_auteur = Auteur.id
                        WHERE Article.id=$id_article AND Article.id_auteur=Auteur.id";

                        $resultat=mysqli_query($link,$sql_article);
                        $row2=mysqli_fetch_assoc($resultat);


                    ?>
                    <span class="article col-12">Article : <?php echo $row2['texte'];?></span>

                    <div class="auteur">Auteur : <?php echo $row2['nom'];?></div>
                </span>
            </div>

        </div><br>
        <form method='post' action='index.php'>
            <button type="submit" Value="Submit">Retour</button>
        </form>
        </div>

    </body>
</html>
