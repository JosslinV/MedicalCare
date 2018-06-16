<link rel="stylesheet" type="text/css" href="css/form.css">
<form id="newMedecin" class="form-horizontal" method="post" action="database/insertMedecin.php">
	<fieldset>

	<!-- Form Name -->
	<legend>Nouveau Médecin </legend>

	<!-- Bouton fermer -->
	<div class="form-group">
		<div class="pull-right">
			<button type="button" class="btn btn-danger" onclick="toggleForm()">Fermer</button>
		</div>
	</div>

	<!-- choix titre -->
	<div class="form-group">
		<label class="col-md-4 control-label" for="civilite">civilite</label>
		<div class="col-md-4">
			<select class="form-control" name="civilite" id="Civilité">
				<option>M</option>
				<option>Mme</option>
				<option>Mlle</option>
			</select>
		</div>
	</div>

	<!-- Nom-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="Nom du médecin">Nom</label>
	  <div class="col-md-4">
	  <input id="Nom du médecin" name="nom" placeholder="Nom " class="form-control input-md" required="" type="text">

	  </div>
	</div>

	<!-- Prénom-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="Prénom du médecin">Prénom</label>
	  <div class="col-md-4">
	  <input id="Prénom du médecin" name="prenom" placeholder="Prénom " class="form-control input-md" required="" type="text">

	  </div>
	</div>

	<!-- Button -->
	<div class="center-block">
		<div class="col-md-4">
		<button type="submit" class="btn btn-success btn-lg btn-block">Ajouter le médecin</button>

		</div>
	</div>

	</fieldset>
</form>
