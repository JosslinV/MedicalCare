<?php
require('../database/connexionBDD.php');
require('../model/patientsModel.php');
require('../model/medecinsModel.php');

$patients = requestPatientsId($linkpdo,$_GET['idPat']);
foreach($patients as $pat){
  $patients = $pat;
}

$medecins = explode(' ',$_POST['medecin']);
$medecins = requestMedecinSpecifique($linkpdo, $medecins[0], $medecins[1]);
foreach($medecins as $med){
  $medecins = $med;
}

$date = strtotime($_POST['Date']);

//conversion des heures en TimeStamp unix
$heure = strtotime(date($_POST['Date']." ".$_POST['heure']));
$duree = strtotime(date("01-01-1970"." ".$_POST['Duree']))+3600;


$pdo = $linkpdo;
$stmt = $pdo->prepare("INSERT into RendezVous (idRendezVous, date, heure, duree, Patient_idPatient, Medecin_idMedecin)
VALUES (default, :date, :heure, :duree, :Patient_idPatient, :Medecin_idMedecin)");

$stmt->execute(array('date' => $date,
                      'heure' => $heure,
                      'duree' => $duree,
                      'Patient_idPatient' => $patients['idPatient'],
                      'Medecin_idMedecin' =>  $medecins['idMedecin']));

 ?>
