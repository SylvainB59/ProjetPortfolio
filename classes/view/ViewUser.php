<?php
class ViewUser{
    public static function ajoutUser(){
?>
<div>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" name="ajout_user" target="_self">
		<div class="form-group">
			<label for="nom">nom</label>
			<input type="text" class="form-control" id="nom" name="nom">
		</div>
		<div class="form-group">
			<label for="prenom">prenom</label>
			<input type="text" class="form-control" id="prenom" name="prenom">
		</div>
		<div class="form-group">
			<label for="mail">mail</label>
			<input type="email" class="form-control" id="mail" name="mail">
		</div>
		<div class="form-group">
			<label for="tel">tel</label>
			<input type="text" class="form-control" id="tel" name="tel">
		</div>
		<div class="form-group">
			<label for="adresse">adresse</label>
			<input type="text" class="form-control" id="adresse" name="adresse">
		</div>
		<div class="form-group">
			<label for="photo">photo</label>
			<input type="text" class="form-control" id="photo" name="photo">
		</div>
		<div class="form-group">
			<label for="description">description</label>
			<input type="textarea" class="form-control" id="description" name="description">
		</div>
		<!-- <div class="form-group"> -->
	  		<button type="submit" name="ajout" class="btn btn-primary">valider</button>
	  		<!-- <button type="reset" name="annuler" class="btn btn-danger">Annuler</button> -->
	  	<!-- </div> -->
	</form>
</div>

<?php
    }
}