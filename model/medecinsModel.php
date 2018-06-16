<?php

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
    if(strtoupper($nom) == strtoupper($data["nom"]) || strtoupper($prenom) == strtoupper($data["prenom"])){
      array_push($medecin,$data);
    }
  }
  return $medecin;
}

function requestMedecinId($pdo,$id){
  $res = $pdo->query('SELECT * FROM Medecin;');
  $medecin = array();
  while ($data = $res->fetch()) {
    if($id == $data["idMedecin"]){
      array_push($medecin,$data);
    }
  }
  return $medecin;
}


?>
