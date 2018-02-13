<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <?php
            include 'include/header.php';
            include 'include/connect.php';
        ?>
        <title>Contact</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
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
                <span>
                    <br>
                    <?php
                        $id_article = $_GET['id'];
                        $sql_article="SELECT Article.id as id, Article.texte as texte, Article.titre as titre FROM `Article`
                        INNER JOIN Auteur ON Article.id_auteur = Auteur.id WHERE Article.id=$id_article";
                        $resultat=mysqli_query($link,$sql_article);
                        $row2=mysqli_fetch_assoc($resultat);


                    ?>
                    <span="text">Article : <?php echo $row['texte']; ?>
                </span>
            </div>

        </div><br>
        <form method='post' action='index.php'>
            <button type="submit" Value="Submit">Retour</button>
        </form>
        </div>

    </body>
</html>
