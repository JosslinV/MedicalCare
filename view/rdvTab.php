<?php
require('../model/patientsModel.php');
require('../model/medecinsModel.php');
require('../model/rdvModel.php');

$rdv = requestRdv($linkpdo);
?>
  <div class="scrollable">
  <table class="table table-striped affTab">
    <thead class="thead-dark">
      <tr>
        <th>Patient</th>
        <th>Medecin</th>
        <th>Date RDV</th>
        <th>Heure RDV</th>
        <th>Durée RDV</th>
        <th>Options</th>
      </tr>
    </thead>

  <?php
  foreach ($rdv as $rendezVous) {
    $medecins = requestMedecinId($linkpdo,$rendezVous['Medecin_idMedecin']);

    foreach ($medecins as $med) {
      $nomMed = $med['nom'];
      $prenomMed = $med['prenom'];
    }

    $patients = requestPatientsId($linkpdo,$rendezVous['Patient_idPatient']);

    foreach ($patients as $pat) {
      $nomPat = $pat['nom'];
      $prenomPat = $pat['prenom'];
    }

    //conversion timestamp to string
    $date = (date('d-m-Y',$rendezVous['date']));
    $heure = (date('H:i',$rendezVous["heure"]));
    $duree = (date('H:i',$rendezVous["duree"]-3600));

  ?>
      <tbody>
        <tr>
          <td><?php echo $nomPat.' '.$prenomPat  ?></td>
          <td><?php echo $nomMed.' '.$prenomMed ?></td>
          <td><?php echo $date ?></td>
          <td><?php echo $heure ?></td>
          <td><?php echo $duree ?></td>
          <td>
            <button onclick='location.href="../site/modifier.php?id=<?php echo $pat["idPatient"]?>"' type="button" class="btn btn-success">
               <img src="../view/media/edit.png" alt="edit" height="20" width="20">
            </button>
            <button onclick='location.href="../functions/deleteRDV.php?id=<?php echo $rendezVous["idRendezVous"]?>"' type="button" class="btn btn-danger">
               <img src="../view/media/delete.png" alt="delete" height="20" width="20">
            </button>
          </td>
        </tr>
      </tbody>
    </div>

  <?php
  $nomMed='';
  $prenomMed='';
  }
  ?>
  </table>
</main>
