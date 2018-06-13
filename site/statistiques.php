<?php require('../functions/verifConnexion.php')?>
<!doctype html>
<html>
  <head>
      <meta charset="utf-8">
      <title>Medical Care - Statistiques</title>
      <?php require('../css/style.php');  ?>

  </head>

  <body>
      <?php require('../view/navBar.html'); ?>
      <main>
        <?php require('../functions/statisticView.php'); ?>
      </main>
  </body>
</html>
