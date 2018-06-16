<!doctype html>

<?php require('functions/verifConnexion.php');?>

<html>
  <head>
      <meta charset="utf-8">
      <title>  Vos consultation </title>
      <?php require('css/style.php');  ?>
  </head>

  <body>
      <?php require('view/navBar.html'); ?>
      <main>
        <h1> Vos consultations </h1>
        <?php require('view/rdvTab.php'); ?>
      </main>
  </body>
</html>
