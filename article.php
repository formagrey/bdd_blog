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
                    $id_auteur = $_GET['id'];

                    $sql="SELECT * FROM Auteur WHERE id=$id_auteur";

                    $resultat=mysqli_query($link,$sql);
                    $row=mysqli_fetch_assoc($resultat);

                ?>
                <span="nom">Auteur : <?php echo $row['nom']; ?>
            </div>

            <div class="row">
                <span>
                    <br>
                    <?php

                    $sql="SELECT * FROM `Article`
                    INNER JOIN Auteur ON Article.id_auteur = Auteur.id";

                    $resultat=mysqli_query($link,$sql);
                    //$id_article = $_GET['texte'];
                    $row=mysqli_fetch_assoc($resultat);

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
