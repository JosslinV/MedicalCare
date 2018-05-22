<?php
//connexion à la bdd
require('../database/connexionBDD.php');

function requestPatients($pdo){
  $res = $pdo->query('SELECT * FROM Patient;');
  $patients = array();
  while ($data = $res->fetch()) {
      array_push($patients,$data);
  }
  return $patients;
}

function requestPatientsSpecifique($pdo,$nom,$prenom){
  $res = $pdo->query('SELECT * FROM Patient;');
  $patients = array();

  while ($data = $res->fetch()) {
    if($nom == $data["nom"] || $prenom == $data["prenom"]){
      array_push($patients,$data);
    }
  }
  return $patients;
}

?>
