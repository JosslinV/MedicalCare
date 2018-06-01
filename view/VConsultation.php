<?php
require('../database/connexionBDD.php');
require('../model/patientsModel.php');
require('../model/medecinsModel.php');
$patients = requestPatientsId($linkpdo,$_GET['id']);
foreach($patients as $pat){
  $pat = $pat;
}

$medecins = requestMedecinId($linkpdo, $_GET['id']);
foreach ($medecins as $med) {
  $med = $med;
}
?>

<ul>
  <li>
    <h2 class = "col1"> Patient </h2>
    <div id = "Patientcard">
      <div class = "contentCard">
        <strong> n°SS </strong> <?php echo $pat['num_secu'] ?>
        <br><br>
        <strong> Nom </strong><?php echo $pat['nom'] ?>
        <br><br>
        <strong> Prénom </strong><?php echo $pat['prenom'] ?>
        <br><br>
        <strong> Adresse </strong>
        <?php echo $pat['adresse'] ?>
        <?php echo $pat["code_postal"] ?>
        <?php echo $pat["ville"] ?>
        <br>
        <br>
        <br>
       <strong>Lieu de naissance </strong><?php echo $pat["lieu_naissance"] ?>
     </div>
    </div>
  </li>
  <li>
    <h3 class = "col2"> Médecin </h3>
      <div id = "MedecinCard">
        <div class = "contentCard">
         <?php echo $med["civilite"]." ".$med["nom"]." ".$med["prenom"] ?>
       </div>
      </div>
  </li>
</ul>
<ul>
  <li >
    <h3 class = "col2"> Date de la consultation </h3>
    <div id = "DateCard">
      <div class = "contentCard" >
        Date de la consultation :<?php echo $pat["date"] ?> à <?php echo $pat["heure"] ?>
        Durée de la consultation <?php echo $pat["duree"] ?>
      </div>
    </div>
  </li>
<ul>
