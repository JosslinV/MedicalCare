<?php
$server = "azimut-pulsar.ddns.net";
$db = "MedicalCare";
$login = "MedicalCare";
$mdp = "perpignan@66";

try {
  $linkpdo = new PDO("mysql:host=$server;dbname=$db", $login, $mdp);
} catch (Exception $e) {
  die('Erreur : ' . $e->getMessage());
}
?>
