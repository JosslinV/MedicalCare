
<form id="newPatient" class="form-horizontal">
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
	  	<input id="numSecu" name="numSecu" placeholder="num de sécurité sociale" class="form-control input-md" type="text">

	  </div>
	</div>

	<!-- choix médecin traitant -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="médecinref">Médecin traitant</label>
	  <div class="col-md-4">
	    <div class="input-group">
	      <input id="médecinref" name="médecinref" class="form-control" placeholder="médecin traitant" type="text">
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

	<!-- choix titre -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="buttondropdown">Civillité</label>
	  <div class="col-md-2">
	    <div class="input-group">
	      <input id="buttondropdown" name="buttondropdown" class="form-control" placeholder="M." type="text">
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

	<!-- nom-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="Nom du Patient">Nom</label>
	  <div class="col-md-4">
	  <input id="Nom du Patient" name="Nom du Patient" placeholder="Nom " class="form-control input-md" required="" type="text">

	  </div>
	</div>

	<!-- prénom-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="Prénom du Patient">Prénom</label>
	  <div class="col-md-4">
	  <input id="Prénom du Patient" name="Prénom du Patient" placeholder="Prénom " class="form-control input-md" required="" type="text">

	  </div>
	</div>

	<!-- addresse -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="AdresseVoie1">Adresse</label>
	  <div class="col-md-5">
	  <input id="AdresseVoie1" name="AdresseVoie1" placeholder="n° de la voie, nom de la voie ..." class="form-control input-md" type="text">

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
	  <input id="cp" name="cp" placeholder="XXXXX" class="form-control input-md" type="text">

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
	  <input id="DateNaissance" name="DateNaissance" placeholder="XX/XX/XXXX" class="form-control input-md" type="text">

	  </div>
	</div>

	<!-- villeNaissance-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="villeNaissance">Lieu de Naissance</label>
	  <div class="col-md-4">
	  <input id="villeNaissance" name="villeNaissance" placeholder="ville de naissance" class="form-control input-md" type="text">

	  </div>
	</div>

	<!-- Ajouter -->
	<div class="center-block">
		<div class="col-md-4">
		<button type="button" class="btn btn-success btn-lg btn-block">Ajouter le patient</button>

		</div>
	</div>

	</fieldset>
</form>
