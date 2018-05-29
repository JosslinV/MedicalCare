<?php require('../functions/verifConnexion.php')?>
<!doctype html>
<html>
  <head>
      <meta charset="utf-8">
      <title>Medical Care - patient</title>
      <?php require('../css/style.php');  ?>

  </head>

  <body>
      <?php require('../view/navBar.html'); ?>
      <main>
        <?php echo($_GET['id']); ?>
    </main>
  </body>
</html>
