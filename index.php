<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <?php include 'include/header.php' ?> <!--bootstrap + animate.css + main.css + fontawsome-->
        <?php include 'include/connect.php' ?> <!--connection à la base de donnée-->
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
                                $sql="SELECT Article.id as id, Article.texte as texte, Article.titre as titre, date FROM `Article`
                                INNER JOIN Auteur ON Article.id_auteur = Auteur.id ORDER BY id DESC LIMIT 10";
                                $resultat=mysqli_query($link,$sql);
                                    if (!$resultat) {
                                        die('Erreur dans la requette: '.mysqli_error($link));
                                    }
                                    while ($row=mysqli_fetch_array($resultat)) {
                                        echo '<span class="animated flip article col-xs-12 col-md-6"><a href="article.php?id='.$row['id'].'"><h4>'.$row['titre'].'</h4></a>
                                    	<p class="text-truncate">'.$row['texte'].'</p>
                                    	<p>'.$row['date'].'</p> </span>';
                                    }
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
