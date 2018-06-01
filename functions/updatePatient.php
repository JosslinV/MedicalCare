<?php
require('../database/connexionBDD.php');
require('../model/medecinsModel.php');


if($_POST['medecinReferent'] != ''){
  $medecins = explode(' ',$_POST['medecinReferent']);
  $medecins = requestMedecinSpecifique($linkpdo, $medecins[0], $medecins[1]);

  foreach ($medecins as $med) {
    $idMedecin = $med['idMedecin'];
  }
} else {
  $idMedecin = 0;
}

//conversion string to timestamp
$date = strtotime($_POST['date_naissance']);

//requête SQL
$stmt = $linkpdo->prepare("UPDATE  Patient SET civilite = '".$_POST['civilite']."', nom='".$_POST['nom']."', prenom='".$_POST['prenom']."', adresse='".$_POST['adresse']."',
                                               code_postal='".$_POST['code_postal']."', ville='".$_POST['ville']."', date_naissance='".$date."',
                                               lieu_naissance='".$_POST['lieu_naissance']."', num_secu='".$_POST['num_secu']."', MedecinReferent='".$idMedecin."'
                                               WHERE idPatient=".$_GET['id'].";");

$stmt->execute();

header('location: ../site/patientList.php');

?>
