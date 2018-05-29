<?php
session_start();
require('../database/connexionBDD.php');
require('../database/requestUser.php');

$user = requestUser($_POST['login'],$linkpdo);

if($_POST['login'] === $user['login'] && sha1($_POST['mdp']) === $user['mdp']){
  $_SESSION['authentifie'] = true;
  $_SESSION['login'] = $login;
  header('location: ../site/patientList.php');
} else {
  header('location: ../site/login.php');
}


 ?>
