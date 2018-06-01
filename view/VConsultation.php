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
        <strong> n°SS </strong> <?php echo $pat['num_secu']; ?>
        <br><br>
        <strong> Nom </strong><?php echo $pat['nom']; ?>
        <br><br>
        <strong> Prénom </strong><?php echo $pat['prenom']; ?>
        <br><br>
        <strong> Adresse </strong>
        <?php echo $pat['adresse']; ?>
        <?php echo $pat["code_postal"]; ?>
        <?php echo $pat["ville"]; ?>
        <br>
        <br>
        <br>
       <strong> Lieu de naissance </strong><?php echo $pat["lieu_naissance"]; ?>
     </div>
    </div>
  </li>
  <li>
    <h3 class = "col2"> Médecin </h3>
      <div id = "MedecinCard">
        <div class = "contentCard">
         <?php echo $med["nom"];?>
        </div>
      </div>
  </li>
</ul>
<ul>
  <li >
    <h3 class = "col1"> Date et Durée de la consultation </h3>
    <div id = "DateCard">
      <div class = "contentCard" >
        <strong>Date de la consultation</strong> <input id="dateConsultation" name="Date" placeholder="XX-XX-XX" class="form-control input-md" required="" type="text">
        <br>
        <strong>Durée de la consultation </strong> <input id="duréeConsultation" name="Duree" placeholder="XX-XX" class="form-control" required="" type="text" class="col-xs-2">
    </div>
  </li>
<ul>
