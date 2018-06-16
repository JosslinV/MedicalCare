<?php

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
    if(strtoupper($nom) == strtoupper($data["nom"]) || strtoupper($prenom) == strtoupper($data["prenom"])){
      array_push($patients,$data);
    }
  }
  return $patients;
}

function requestPatientsId($pdo,$id){
  $res = $pdo->query('SELECT * FROM Patient;');
  $patients = array();
  while ($data = $res->fetch()) {
    if($id == $data["idPatient"]){
      array_push($patients,$data);
    }
  }
  return $patients;
}

?>
