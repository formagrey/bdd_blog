
<nav class="navbar navbar-expand-md navbar-dark bg-dark col-12">
    <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?#new_post">Nouvel Article</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="all_art.php">Tous les Articles</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catégories</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
<!--récupération des id + nom de la table catégorie et pour remplir le menu déroulant (maintenance simplifié en cas de rajout de nouvelles catégorie seul le formulaire est à modifier)-->
                  <?php
                  $link = connect();
                  cat_nav_bar($link);
                  ?>

            </div>
        </li>
      </ul>
    </div>
</nav>
