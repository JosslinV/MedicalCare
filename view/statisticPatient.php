<?php
require('../model/patientsModel.php');
require('../database/connexionBDD.php');

$patients = requestPatients($linkpdo);
$h25 = $h2550 = $h50 = $f25 = $f2550 = $f50 = 0;
foreach($patients as $pat){
  //Conversion des dates en objets 'DateTime'
  $dateJour = date('d-m-Y');
  $dateJour = new DateTime($dateJour);

  $date = (date('d-m-Y',$pat["date_naissance"]));
  $date = new DateTime($date);

  //Calcul de la différence entre les deux dates
  $calcul = $date->diff($dateJour);

  if($pat['civilite'] == "M"){
    //Hommes
    if($calcul->y < 25){
      $h25++;
    } elseif($calcul->y >= 25 && $calcul->y < 50){
      $h2550++;
    } else {
      $h50++;
    }
  } else {
    //Femmes
    if($calcul->y < 25){
      $f25++;
    } elseif($calcul->y >= 25 && $calcul->y < 50){
      $f2550++;
    } else {
      $f50++;
    }
  }
}
?>

<table class="table w-50 p-3" style="width: 50%; margin: auto;">
  <thead>
    <tr>
      <th scope="col"><h3>Patients</h3></th>
      <th scope="col">Femmes</th>
      <th scope="col">Hommes</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Moins de 25ans</th>
      <td><?php echo  $f25?></td>
      <td><?php echo  $h25?></td>
    </tr>
    <tr>
      <th scope="row">Entre 25 et 50ans</th>
      <td><?php echo  $f2550?></td>
      <td><?php echo  $h2550?></td>
    </tr>
    <tr>
      <th scope="row">Plus de 50ans</th>
      <td><?php echo  $f50?></td>
      <td><?php echo  $h50?></td>
    </tr>
  </tbody>
</table>
