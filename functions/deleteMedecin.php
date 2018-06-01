<?php
require('../database/connexionBDD.php');
require('../database/deleteSQL.php');

deleteMedecin($linkpdo, $_GET['id']);

header('location: ../site/medecinList.php');
 ?>
