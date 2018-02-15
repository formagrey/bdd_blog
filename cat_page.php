<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <?php include 'include/header.php' ?>
        <title>Niarticles par chategorie</title>
    </head>
    <body>
           <h1>Blog Chatastrophique</h1>
    </div>
    <?php include 'include/nav.php' ?>

        <div class="container col-12">
            <div class="row">
                <div class="container">
                    <div class="row">
                <?php include 'include/connect.php';

                    $categorie = $_GET["id"];

                    $sql="SELECT Article.id as id, Article.texte as texte, Article.titre as titre, Article.id_categorie as cat, date FROM `Article`
                    INNER JOIN Categorie ON Article.id_categorie = Categorie.id
                    WHERE Categorie.id = '$categorie' ";
                    $resultat=mysqli_query($link,$sql);

                        if (!$resultat) {
                            die('Erreur dans la requette: '.mysqli_error($link));
                        }
                        while ($row=mysqli_fetch_array($resultat)) {


                         echo '<span class="animated flip article col-xs-12 col-md-6" style="overflow: auto"><a href="article.php?id='.$row['id'].'"><h4 class="text-center">'.$row['titre'].'</h4></a>
                        <p class="text-truncate">'.$row['texte'].'</p>
                        <p>'.$row['date'].'</p></span>';
                    }
                ?>
                
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
