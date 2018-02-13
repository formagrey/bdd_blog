<form method="POST" action="requeteContact.php" class="col-6 offset-3">
    <div class="row">
        <span class="form-group col-6 text-left">
            <label>Nom</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="nom">
        </span>
        <span class="form-group col-6 text-left">
            <label>Prénom</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="telephone">
        </span>
    </div>
    <div class="row">
        <span class="form-group col-6 text-left">
            <label>E-mail</label>
            <input type="email" class="form-control" aria-describedby="emailHelp" name="mail">
        </span>
        <span class="form-group col-6 text-left">
            <label>Titre</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="titre">
        </span>
    </div>
    <div class="row">
        <span class="form-group col-6">
            <label>Catégorie</label>
            <select  name="categorie" class="form-control">
                <?php
                    $sql = 'SELECT * FROM Categorie';
                    $grep = mysqli_query($link,$sql);
                    while ($gdata = $grep->fetch()){ ?>
                        <option class="text-center" value="<php echo $gdata['id'] ?>"><?php echo $gdata['nom']?></option>
                <?php } ?>
            </select>
        </span>
    <div class="">
        <span class="form-group col-6 btn btn-default btn-file">
            <input type="file">
        </span>
    </div>
    </div>
    <div class="row">
        <span class="form-group col-12 text-left">
            <label>Texte </label>
            <textarea class="form-control" rows="25" name="texte"></textarea>
        </span>
    </div>
    <div class="row">
        <button type="submit" class="btn btn-primary col-2 offset-9">Enregistrer</button>
    </div>
</form>
