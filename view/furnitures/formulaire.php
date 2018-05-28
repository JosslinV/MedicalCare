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

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="numSecu">N° SS</label>
	  <div class="col-md-4">
	  	<input id="numSecu" name="num_secu" placeholder="num de sécurité sociale" class="form-control input-md" type="text" required="">

	  </div>
	</div>

	<!-- Button Drop Down -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="médecinref">Médecin traitant</label>
	  <div class="col-md-4">
	    <div class="input-group">
	      <input id="médecinref" name="MedecinReferent" class="form-control" placeholder="médecin traitant" type="text">
	      <div class="input-group-btn">
	        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">

	          <span class="caret"></span>
	        </button>
	        <ul class="dropdown-menu pull-right">
	          <li><a href="#">M. Rodriguez</a></li>
	          <li><a href="#">M. Saussine</a></li>
	          <li><a href="#">...</a></li>
	          <li><a href="#">Option three</a></li>
	        </ul>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Button Drop Down -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="buttondropdown">Civillité</label>
	  <div class="col-md-2">
	    <div class="input-group">
	      <input id="buttondropdown" name="civilite" class="form-control" placeholder="M." type="text">
	      <div class="input-group-btn">
	        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">

	          <span class="caret"></span>
	        </button>
	        <ul class="dropdown-menu pull-right">
	          <li><a href="#">M.</a></li>
	          <li><a href="#">Mme.</a></li>
	          <li><a href="#">Melle</a></li>
	          <li><a href="#">Option three</a></li>
	        </ul>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="Nom du Patient">Nom</label>
	  <div class="col-md-4">
	  <input id="Nom du Patient" name="nom" placeholder="Nom " class="form-control input-md" required="" type="text">

	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="Prénom du Patient">Prénom</label>
	  <div class="col-md-4">
	  <input id="Prénom du Patient" name="prenom" placeholder="Prénom " class="form-control input-md" required="" type="text">

	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="AdresseVoie1">Adresse</label>
	  <div class="col-md-5">
	  <input id="AdresseVoie1" name="adresse" placeholder="n° de la voie, nom de la voie ..." class="form-control input-md" type="text">

	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="AdresseVoie2"></label>
	  <div class="col-md-5">
	  <input id="AdresseVoie2" name="AdresseVoie2" placeholder="étage, appartement, résidence, ..." class="form-control input-md" type="text">

	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="cp">Code Postal</label>
	  <div class="col-md-2">
	  <input id="cp" name="code_postal" placeholder="XXXXX" class="form-control input-md" type="text">

	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="ville">Ville</label>
	  <div class="col-md-4">
	  <input id="ville" name="ville" placeholder="ville" class="form-control input-md" type="text">

	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="DateNaissance">Date de Naissance</label>
	  <div class="col-md-4">
	  <input id="DateNaissance" name="date_naissance" placeholder="XX/XX/XXXX" class="form-control input-md" type="text">

	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="villeNaissance">Lieu de Naissance</label>
	  <div class="col-md-4">
	  <input id="villeNaissance" name="lieu_naissance" placeholder="ville de naissance" class="form-control input-md" type="text">

	  </div>
	</div>

	<!-- Button -->
	<div class="center-block">
		<div class="col-md-4">
		<button type="submit" class="btn btn-success btn-lg btn-block">Ajouter le patient</button>

		</div>
	</div>

	</fieldset>
</form>
