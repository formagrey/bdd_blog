<?php
function connect(){
    $link = mysqli_connect("localhost","root","free"); // connection à la base de donnée (ip serveur, nom d'utilisateur, mot de passe)
    if (!$link) { // si link = faux connection doit s'arreter
        die('Not connected: ' .mysqli_error());
    }

    $db_selected = mysqli_select_db($link,"BDD_BLOG");
    if(!$db_selected) { // si $db_selected faux base de donnée inacessible stopper la connexion
        die('bdd innaccessible :' .mysqli_error($link));
    }
    return $link;
}

/*Requete SQL de récurération des 10 derniers articles tronqués*/
function article_Accueil($link) {
    $sql=
        "SELECT Article.id as id, Article.texte as texte, Article.titre as titre, date FROM `Article`
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
}


function all_art($link) {
    $sql=
        "SELECT Article.id as id, Article.texte as texte, Article.titre as titre, date FROM `Article`
        INNER JOIN Auteur ON Article.id_auteur = Auteur.id";
    $resultat=mysqli_query($link,$sql);
        if (!$resultat) {
            die('Erreur dans la requette: '.mysqli_error($link));
        }
        while ($row=mysqli_fetch_array($resultat)) {
            echo '<span class="animated flip article col-xs-12 col-md-6"><a href="article.php?id='.$row['id'].'"><h4>'.$row['titre'].'</h4></a>
        <p class="text">'.$row['texte'].'</p>
        <p class="text">'.$row['date'].'</p> </span>';
        }
}

function id_article($link){
    $id_article = $_GET['id'];
    $sql=
        "SELECT Article.id as id, Article.texte as texte, Article.titre as titre
        FROM `Article`
        INNER JOIN Auteur ON Article.id_auteur = Auteur.id WHERE Article.id=$id_article";

    $resultat=mysqli_query($link,$sql);
    $row=mysqli_fetch_assoc($resultat);
    echo $row['titre'];
}

function article_page($link, $id_article){

    $sql_article=
        "SELECT Auteur.nom as nom, Article.texte as texte, Article.titre as titre FROM `Article`
        INNER JOIN Auteur ON Article.id_auteur = Auteur.id
        WHERE Article.id=$id_article AND Article.id_auteur=Auteur.id";

    $resultat=mysqli_query($link,$sql_article);
    $row2=mysqli_fetch_assoc($resultat);

    return $row2;
}

function cat_page($link){
    $categorie = $_GET["id"];

    $sql=
        "SELECT Article.id as id, Article.texte as texte, Article.titre as titre, Article.id_categorie as cat, date FROM `Article`
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
}

function cat_nav_bar($link){
    $sql = "SELECT id, nom
            FROM Categorie";
    $resultat=mysqli_query($link,$sql);
        if (!$resultat) {
            die('Erreur dans la requette: '.mysqli_error($link));
        }
        while ($row=mysqli_fetch_array($resultat)) {
            echo '<a href="cat_page.php?id='.$row['id'].'">'. mb_strtoupper($row['nom']).'</a></br>';
        }
}

function new_article($link){
    // variables auteur
    $nom = $_POST["nom"] ;
    $prenom = $_POST["prenom"] ;
    $mail = $_POST["mail"] ;

    // variables Article
    $titre = $_POST["titre"] ;
    $texte = $_POST["texte"] ;

    $id_categorie = $_POST["categorie"] ;

    //création de la requête SQL:
    //test utilisateur:
    $testUtilisateur = mysqli_query($link,
        "SELECT mail
        FROM Auteur
        WHERE mail = '$mail' ");
       $res_test_user = mysqli_num_rows($testUtilisateur);

            if($res_test_user == 0)
            {
                $new_auteur = mysqli_query($link,
                "INSERT INTO Auteur (nom, prenom, mail)
                VALUES ('$nom', '$prenom', '$mail')");
            }

                $res = mysqli_query($link,
                "SELECT id
                FROM Auteur
                WHERE mail = '$mail' ");
               $res_auteur = mysqli_fetch_assoc($res);
               $id_auteur = $res_auteur['id'];



    if($id_categorie != 0)
    {
        $requete = mysqli_query($link,
        "INSERT INTO Article (titre, texte, id_auteur, id_categorie)
        VALUES ('$titre', '$texte', '$id_auteur', '$id_categorie')");

        //affichage des résultats, pour savoir si l'insertion a marchée:
        if($requete)
            {
                echo("L'insertion a été correctement effectuée") ;
                header("Location: index.php");
            }

        else
            {
                echo("L'insertion à échouée" . mysqli_error($link)) ;
            }
    }

    else
    {
        echo("L'insertion à échouée: " . mysqli_error($link)) ;
    }

}

?>
