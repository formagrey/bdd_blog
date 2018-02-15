<!--connection à la base de donnée-->
<?php include 'include/connect.php' ?>

<form method="POST" action="new_post.php" class="col-8 offset-2 formNewArticle">
    <br><h3>Nouveau message</h3><br>
    <div id="new_post" class="row">
        <span class="form-group col-xs-12 col-md-6">
            <label>Nom</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="nom" required>
        </span>
        <span class="form-group col-xs-12 col-md-6">
            <label>Prénom</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="prenom">
        </span>
    </div>
    <div class="row">
        <span class="form-group col-xs-12 col-md-6 ">
            <label>E-mail</label>
            <input type="email" class="form-control" aria-describedby="emailHelp" name="mail" required>
        </span>
        <span class="form-group col-xs-12 col-md-6 ">
            <label>Titre</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="titre" required>
        </span>
    </div>
    <div class="row">
        <span class="form-group col-xs-12 col-md-6">
            <label>Catégorie</label>
            <select  name="categorie" class="form-control">
                <option value="0"></option>
                <option value="1">Sport</option>
                <option value="2">Travail</option>
                <option value="3">Media</option>
                <option value="3">Technologie</option>
            </select>
        </span>
    </div>
    <div class="row">
        <span class="form-group col-12 text-left">
            <label>Texte </label>
            <textarea class="form-control texteheight" rows="25" name="texte"></textarea>
        </span>
    </div>
    <div class="row">
        <button type="submit" class="btn btn-success col-12">Envoie</button>
    </div>
</form>
