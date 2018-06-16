<?php
require('database/connexionBDD.php');
require('model/medecinsModel.php');
require('model/rdvModel.php');
require('database/connexionBDD.php');


$medecins = requestMedecin($linkpdo);
?>

<table class="table w-50 p-3" style="width: 50%; margin: auto;">
  <thead>
    <tr>
      <th scope="col"><h3>Docteur</h3></th>
      <th scope="col">Volume horaire effectué</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($medecins as $med){
      echo '<tr><th>'.$med['nom'].' '.$med['prenom'].'</th>';

      $rdv = requestRdvMedecin($linkpdo,$med['idMedecin']);
      $horaire = 0;
      foreach($rdv as $rendezVous){
        $horaire += $rendezVous['duree'];
      }

      // Conversion de l'horaire
      $horaire = (date('H:i',$horaire - 3600));
      echo '<td>'.$horaire.'</td></tr>';
    }

     ?>
  </tbody>
</table>
