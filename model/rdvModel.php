<?php

function requestRdv($pdo){
  $res = $pdo->query('SELECT * FROM RendezVous;');
  $rdv = array();
  while ($data = $res->fetch()) {
      array_push($rdv,$data);
  }
  return $rdv;
}

function requestRdvMedecin($pdo,$idMedecin){
  $res = $pdo->query('SELECT * FROM RendezVous WHERE Medecin_idMedecin='.$idMedecin.';');
  $rdv = array();
  while ($data = $res->fetch()) {
      array_push($rdv,$data);
  }
  return $rdv;
}

?>
