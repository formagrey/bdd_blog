<?php include 'include/connect.php' ?>

<form method="POST" action="new_post.php" class="align-items-center col-8 offset-2">
    <div class="row">
        <span class="form-group col-xs-12 col-md-6">
            <label>Nom</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="nom">
        </span>
        <span class="form-group col-xs-12 col-md-6">
            <label>Prénom</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="prenom">
        </span>
    </div>
    <div class="row">
        <span class="form-group col-xs-12 col-md-6 ">
            <label>E-mail</label>
            <input type="email" class="form-control" aria-describedby="emailHelp" name="mail">
        </span>
        <span class="form-group col-xs-12 col-md-6 ">
            <label>Titre</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="titre">
        </span>
    </div>
    <div class="row">
        <span class="form-group col-xs-12 col-md-6">
            <label>Catégorie</label>
            <select  name="id_categorie" class="form-control">
                <option value="0"></option>
                <option value="1">Sport</option>
                <option value="2">Travail</option>
                <option value="3">Media</option>
                <option value="3">Technologie</option>
            </select>
        </span>
<!--<div class="">
        <span class="form-group col-6 btn btn-default btn-file">
            <input type="file">
        </span>
    </div>-->
    </div>
    <div class="row">
        <span class="form-group col-12 text-left">
            <label>Texte </label>
            <textarea class="form-control" style="min-height: 50px" rows="25" name="texte"></textarea>
        </span>
    </div>
    <div class="row">
        <button type="submit" class="btn btn-success col-12">Envoie</button>
    </div>
</form>
