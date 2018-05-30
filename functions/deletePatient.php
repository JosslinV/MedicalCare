<?php
require('../database/connexionBDD.php');
require('../database/deleteSQL.php');

deletePatient($linkpdo, $_GET['id']);

header('location: ../site/patientList.php');
 ?>
