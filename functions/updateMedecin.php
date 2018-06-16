<?php
require('../database/connexionBDD.php');


print_r($_POST);

//requête SQL
$stmt = $linkpdo->prepare("UPDATE  Medecin SET civilite = '".$_POST['civilite']."', nom='".$_POST['nom']."', prenom='".$_POST['prenom']."' WHERE idMedecin=".$_GET['id'].";");

$stmt->execute();

header('location: ../medecinList.php');

?>
