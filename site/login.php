<!DOCTYPE html>
<html lang="fr" >
  <head>
    <meta charset ="UTF-8" />
    <title>  Page de connection </title>
    <?php require('../view/stylebootstrap.html');  ?>

  </head>
  <body>
    <h1> Bienvenue chez Medical Care ! </h1>

    <form class="form-horizontal">
  			<fieldset>

  			<!-- Form Name -->
  			<legend> Connectez vous à votre compte </legend>

  			<!-- Text input-->
  			<div class="form-group">
  			  <label class="col-md-2 control-label" for="login"> Login </label>
  			  <div class="col-md-2">
  			  	<input id="login" name="login" placeholder="login" class="form-control input-md" type="text">

  			  </div>
  			</div>

  			<!-- Text input-->
  			<div class="form-group">
  			  <label class="col-md-2 control-label" for="mdp">Mot de passe</label>
  			  <div class="col-md-2">
  			  <input id="mdp" name="mdp" placeholder="*************" class="form-control input-md" type="text">

  			  </div>
  			</div>

        





  			</fieldset>
  </form>


  </body>


</html>
