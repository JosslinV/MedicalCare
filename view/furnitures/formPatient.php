<?php
$medecins = requestMedecin($linkpdo);
?>
<link rel="stylesheet" type="text/css" href="../css/form.css">
<form id="newPatient" class="form-horizontal" method="post" action="../database/insertPatient.php">
	<fieldset>

	<!-- Form Name -->
	<legend>Nouveau Patient </legend>

	<!-- Bouton fermer -->
	<div class="form-group">
		<div class="pull-right">
			<button type="button" class="btn btn-danger" onclick="toggleForm()">Fermer</button>
		</div>
	</div>

	<!-- numéro SS-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="numSecu">N° SS</label>
	  <div class="col-md-4">
	  	<input id="numSecu" name="num_secu" placeholder="num de sécurité sociale" class="form-control input-md" type="text" required="">

	  </div>
	</div>

	<!-- choix médecin traitant -->
	<div class="form-group">
		<label class="col-md-4 control-label" for="medecinReferent">Médecin référent</label>
		<div class="col-md-4">
			<select class="form-control" name="medecinReferent" id="Medecin référent">
				<option></option>
				<?php foreach($medecins as $med){?>
				<option><?php echo ($med['nom'].' '.$med['prenom']);?></option>
				<?php }?>
			</select>
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

	<!-- nom-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="Nom du Patient">Nom</label>
	  <div class="col-md-4">
	  <input id="Nom du Patient" name="nom" placeholder="Nom " class="form-control input-md" required="" type="text">

	  </div>
	</div>

	<!-- prénom-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="Prénom du Patient">Prénom</label>
	  <div class="col-md-4">
	  <input id="Prénom du Patient" name="prenom" placeholder="Prénom " class="form-control input-md" required="" type="text">

	  </div>
	</div>

	<!-- addresse -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="AdresseVoie1">Adresse</label>
	  <div class="col-md-5">
	  <input id="AdresseVoie1" name="adresse" placeholder="n° de la voie, nom de la voie ..." class="form-control input-md" type="text">

	  </div>
	</div>

	<div class="form-group">
	  <label class="col-md-4 control-label" for="AdresseVoie2"></label>
	  <div class="col-md-5">
	  <input id="AdresseVoie2" name="AdresseVoie2" placeholder="étage, appartement, résidence, ..." class="form-control input-md" type="text">

	  </div>
	</div>

	<!-- CP-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="cp">Code Postal</label>
	  <div class="col-md-2">
	  <input id="cp" name="code_postal" placeholder="XXXXX" class="form-control input-md" type="text">

	  </div>
	</div>

	<!-- Ville-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="ville">Ville</label>
	  <div class="col-md-4">
	  <input id="ville" name="ville" placeholder="ville" class="form-control input-md" type="text">

	  </div>
	</div>

	<!-- DateNaissance-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="DateNaissance">Date de Naissance</label>
	  <div class="col-md-4">
	  <input id="DateNaissance" name="date_naissance" placeholder="XX/XX/XXXX" class="form-control input-md" required="" type="text">

	  </div>
	</div>

	<!-- villeNaissance-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="villeNaissance">Lieu de Naissance</label>
	  <div class="col-md-4">
	  <input id="villeNaissance" name="lieu_naissance" placeholder="ville de naissance" class="form-control input-md" type="text">

	  </div>
	</div>

	<!-- Ajouter -->
	<div class="center-block">
		<div class="col-md-4">
		<button type="submit" class="btn btn-success btn-lg btn-block">Ajouter le patient</button>

		</div>
	</div>

	</fieldset>
</form>
