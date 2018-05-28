
<form id="newMedecin" class="form-horizontal">
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

	<!-- Nom-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="Nom du médecin">Nom</label>
	  <div class="col-md-4">
	  <input id="Nom du médecin" name="Nom du médecin" placeholder="Nom " class="form-control input-md" required="" type="text">

	  </div>
	</div>

	<!-- Prénom-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="Prénom du médecin">Prénom</label>
	  <div class="col-md-4">
	  <input id="Prénom du médecin" name="Prénom du médecin" placeholder="Prénom " class="form-control input-md" required="" type="text">

	  </div>
	</div>

	<!-- Button -->
	<div class="center-block">
		<div class="col-md-4">
		<button type="button" class="btn btn-success btn-lg btn-block">Ajouter le médecin</button>

		</div>
	</div>

	</fieldset>
</form>
