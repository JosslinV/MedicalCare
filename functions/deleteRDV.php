<?php
require('../database/connexionBDD.php');
require('../database/deleteSQL.php');

deleteRdv($linkpdo, $_GET['id']);

header('location: ../site/consultation.php');
 ?>
