<?php
//connexion à la bdd
require('../database/connexionBDD.php');

function requestRdv($pdo){
  $res = $pdo->query('SELECT * FROM RendezVous;');
  $rdv = array();
  while ($data = $res->fetch()) {
      array_push($rdv,$data);
  }
  return $rdv;

}

?>
