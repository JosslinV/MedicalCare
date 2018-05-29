<form class="form-horizontal" method="post" action="../functions/session.php">
  <fieldset>

    <!-- Form Name -->
    <legend> Connectez vous à votre compte </legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-2 control-label" for="login"> Login </label>
      <div class="col-md-2">
        <input id="login" name="login" type="text" placeholder="login" class="form-control input-md" type="text">
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-2 control-label" for="mdp">Mot de passe</label>
      <div class="col-md-2">
        <input id="mdp" name="mdp" type="password" placeholder="*************" class="form-control input-md" type="text">
      </div>
    </div>

    <!-- Button -->
    <div class="center-block">
      <div class="col-md-2">
        <a href="./patientList.php">
          <button type="submit" class="btn btn-success btn-lg btn-block" > se connecter </button>
        </a>
      </div>
    </div>
  </fieldset>
</form>
