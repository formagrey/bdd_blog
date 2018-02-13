<?php include 'include/connect.php' ?>

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
               <option value="0"></option>
               <option value="1">Sport</option>
               <option value="2">Travail</option>
               <option value="3">Media</option>
               <option value="3">Technologie</option>
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
       <button type="submit" class="btn btn-success col-2 offset-9">Envoie</button>
   </div>
</form>
