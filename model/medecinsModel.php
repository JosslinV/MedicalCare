<?php
//connexion à la bdd
require('../database/connexionBDD.php');

function requestMedecin($pdo){
  $res = $pdo->query('SELECT * FROM Medecin');
  $medecin = array();
  while ($data = $res->fetch()) {
      array_push($medecin,$data);
  }
  return $medecin;
}

function requestMedecinSpecifique($pdo,$nom,$prenom){
  $res = $pdo->query('SELECT * FROM Medecin;');
  $medecin = array();
  while ($data = $res->fetch()) {
    if($nom == $data["nom"] || $prenom == $data["prenom"]){
      array_push($medecin,$data);
    }
  }
  return $medecin;
}

?>
