<?php
require('../model/medecinsModel.php');
require('../database/connexionBDD.php');

$medecins = requestMedecinId($linkpdo,$_GET['id']);

foreach ($medecins as $med) {
	$medecins = $med;
}

?>

<form class="form-horizontal" method="post" action="../functions/updateMedecin.php?id=<?php echo $_GET['id'];?>">
	<fieldset>

	<!-- Form Name -->
	<legend>Nouveau Médecin </legend>

	<!-- choix titre -->
	<div class="form-group">
		<label class="col-md-4 control-label" for="civilite">civilite</label>
		<div class="col-md-4">
			<select class="form-control" name="civilite" id="Civilité" value="<?php echo $medecins['civilite']; ?>">
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
	  <input id="Nom du médecin" name="nom" placeholder="Nom " class="form-control input-md" required="" type="text" value="<?php echo $medecins['nom']; ?>">

	  </div>
	</div>

	<!-- Prénom-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="Prénom du médecin">Prénom</label>
	  <div class="col-md-4">
	  <input id="Prénom du médecin" name="prenom" placeholder="Prénom " class="form-control input-md" required="" type="text" value="<?php echo $medecins['prenom']; ?>">

	  </div>
	</div>

	<!-- Button -->
	<div class="center-block">
		<div class="col-md-4">
		<button type="submit" class="btn btn-success btn-lg btn-block">Modifier médecin</button>

		</div>
	</div>

	</fieldset>
</form>
