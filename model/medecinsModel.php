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

?>
