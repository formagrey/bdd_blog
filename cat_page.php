<?php
    $sql="SELECT Article.id as id, Article.texte as texte, Article.titre as titre, Article.id_categorie as cat FROM `Article`
    INNER JOIN Auteur ON Article.id_auteur";
    $resultat=mysqli_query($link,$sql);
        if (!$resultat) {
            die('Erreur dans la requette: '.mysqli_error($link));
        }
        while ($row=mysqli_fetch_array($resultat)) {
            echo '<span class="animated flip article col-xs-12 col-md-6"><a href="article.php?id='.$row['id'].'">'.$row['titre'].'</a>
        <p>'.$row['texte'].'</p> </span>';
        }
?>
