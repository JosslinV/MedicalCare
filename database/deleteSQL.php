<?php

function deletePatient($pdo,$id){
  $pdo->query('DELETE FROM Patient WHERE idPatient='.$id);
  echo("ok");
}

function deleteMedecin($pdo,$id){
  $pdo->query('DELETE * FROM Medecin WHERE idMedecin='.$id.';');
}

function deleteRdv($pdo,$id){
  $pdo->query('DELETE * FROM RendezVous WHERE idRendezVous='.$id.';');
}

 ?>
