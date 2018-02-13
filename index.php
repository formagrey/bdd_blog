<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <?php include 'include/header.php' ?>
        <?php include 'include/connect.php' ?>
        <title>BLOG - PHP/MYSQL</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row col-12">
                <div class="col-12 text-center animated fadeInDown">
                    <h1>BLOG en PHP MYSQL</h1>
                </div>
                    <nav class="navbar navbar-expand-md navbar-dark bg-dark col-12">
                      <a class="navbar-brand" href="#"></a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>

                      <div class="collapse navbar-collapse" id="navbarsExample04">
                        <ul class="navbar-nav mr-auto">
                          <li class="nav-item active">
                            <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#new_post">Nouvel Article</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catégories</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                              <a class="dropdown-item" href="#">Sport</a>
                              <a class="dropdown-item" href="#">Travail</a>
                              <a class="dropdown-item" href="#">Média</a>
                              <a class="dropdown-item" href="#">Technologie</a>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </nav>
                <div class="container animated fadeInUp">
                    <div class="row text-center col-12">
                            <?php
                                $sql="SELECT Article.id as id, Article.texte as texte, Article.titre as titre FROM `Article`
                                INNER JOIN Auteur ON Article.id_auteur = Auteur.id LIMIT 10";
                                $resultat=mysqli_query($link,$sql);
                                    if (!$resultat) {
                                        die('Erreur dans la requette: '.mysqli_error($link));
                                    }
                                    while ($row=mysqli_fetch_array($resultat)) {
                                        echo '<span class="col-xs-12 col-md-6"><a href="article.php?id='.$row['id'].'">'.$row['titre'].'</a>
                                    <p class="text-truncate">'.$row['texte'].'</p> </span>';
                                    }
                            ?>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'include/formulaire.php' ?>
        <div class="footer">
          
        </div>
    </body>
</html>
