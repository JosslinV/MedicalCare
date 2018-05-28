<?php
require('connexionBDD.php');

$pdo = $linkpdo;
$stmt = $pdo->prepare("INSERT into Medecin (idMedecin, civilite, nom, prenom)
VALUES (default, :civilite, :nom, :prenom)");

//conversion string to timestamp
$date = strtotime($_POST['date_naissance']);

$stmt->execute(array('civilite' => $_POST['civilite'],
                      'nom' => $_POST['nom'],
                      'prenom' => $_POST['prenom']));

header('location: ../site/medecinList.php');
 ?>
