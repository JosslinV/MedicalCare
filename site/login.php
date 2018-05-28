<?php
if($_POST["login"] == "docteur" && $_POST["mdp"] == "strange"){
  echo "mot de passe ok";
}else {
  echo "mauvais mot de passe";
}
 ?>


<!doctype html>
<html>
  <head>
      <meta charset="utf-8">
      <title>  Page de connection </title>
      <?php require('../css/style.html');  ?>
  </head>

  <body>
      <main>
        <h1> Bienvenue chez Medical Care ! </h1>

        <?php require('../view/formlogin.php'); ?>
      </main>
  </body>
</html>
