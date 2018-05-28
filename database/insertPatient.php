<?php
require('connexionBDD.php');

$pdo = $linkpdo;
$stmt = $pdo->prepare("INSERT into Patient (idPatient, civilite, nom, prenom, adresse, code_postal, ville, date_naissance, lieu_naissance, num_secu, MedecinReferent)
VALUES (default, :civilite, :nom, :prenom, :adresse, :code_postal, :ville, :date_naissance, :lieu_naissance, :num_secu, default)");

//conversion string to timestamp
$date = strtotime($_POST['date_naissance']);

$stmt->execute(array('civilite' => $_POST['civilite'],
                      'nom' => $_POST['nom'],
                      'prenom' => $_POST['prenom'],
                      'adresse' => $_POST['adresse'],
                      'code_postal' => $_POST['code_postal'],
                      'ville' => $_POST['ville'],
                      'date_naissance' => $date,
                      'lieu_naissance' => $_POST['lieu_naissance'],
                      'num_secu' => $_POST['num_secu']));

header('location: ../site/patientList.php');
 ?>
