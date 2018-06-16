<?php
require('database/connexionBDD.php');
require('database/connexionBDD.php');
require('model/patientsModel.php');
require('model/medecinsModel.php');
$patients = requestPatientsId($linkpdo,$_GET['id']);
foreach($patients as $pat){
  $pat = $pat;
}

$medecins = requestMedecin($linkpdo);

?>
<form method="post" action="database/insertRDV.php?idPat=<?php echo $pat['idPatient'];?>">
  <ul>
    <li>
      <h3> Patient </h3>
      <div id = "Patientcard">
        <div class = "contentCard">
          <strong> n°SS : </strong> <?php echo $pat['num_secu']; ?>
          <br><br>
          <strong> Nom : </strong><?php echo $pat['nom']; ?>
          <br><br>
          <strong> Prénom : </strong><?php echo $pat['prenom']; ?>
          <br><br>
          <strong> Adresse : </strong>
          <?php echo $pat['adresse']; ?>
          <?php echo $pat["code_postal"]; ?>
          <?php echo $pat["ville"]; ?>
          <br><br><br>
          <?php $date = (date('d-m-Y',$pat["date_naissance"]));?>
         <strong> Date de naissance : </strong><?php echo $date ?>
         <br><br>
         <strong> Lieu de naissance : </strong><?php echo $pat["lieu_naissance"]; ?>
       </div>
      </div>
    </li>
    <li>
      <h3 style="margin-left: 20px;"> Médecin </h3>
      <div id = "MedecinCard">
        <div class = "contentCard">
          <select class="form-control" name="medecin" id="Medecin référent">
            <?php foreach($medecins as $med){?>
            <option><?php echo ($med['nom'].' '.$med['prenom']);?></option>
            <?php }?>
          </select>
        </div>
      </div>
    </li>
  </ul>
  <ul>
    <li>
      <h3 style="margin-left: 20px;"> Date et Durée de la consultation </h3>
      <div id = "DateCard">
        <div class = "contentCard" >
          <strong>Date de la consultation</strong>
          <input id="dateConsultation" name="Date" placeholder="XX-XX-XX" class="form-control input-md" required="" type="text">
          <br/>
          <strong>Heure de la consultation </strong>
          <input id="duréeConsultation" name="heure" placeholder="XX:XX" class="form-control" required="" type="text" class="col-xs-2">
          <br/>
          <strong>Durée de la consultation </strong>
          <input id="duréeConsultation" name="Duree" placeholder="XX:XX" class="form-control" required="" type="text" class="col-xs-2">
      </div>
    </li>
    <button type="submit" class="btn btn-success btn-lg" style="margin-left: 20px; margin-top: 10%;">Ajouter le RDV</button>
  <ul>
</form>
