<?php require('../model/patientsModel.php');

$patients = requestPatients($linkpdo); ?>

<?php include("navBar.html"); ?>
<table>
  <tr>
    <th>Civilité</th>
    <th>Nom</th>
    <th>Prénom</th>
    <th>Adresse</th>
    <th>Code postal</th>
    <th>Ville</th>
    <th>Date de naissance</th>
    <th>Lieu de naissance</th>
    <th>Num sécurité sociale</th>
    <th>Médecin traitant</th>
  </tr>
<?php foreach($patients as $pat){ ?>

  <tr>
    <td><?php echo $pat["civilite"] ?></td>
    <td><?php echo $pat["nom"] ?></td>
    <td><?php echo $pat["prenom"] ?></td>
    <td><?php echo $pat["adresse"] ?></td>
    <td><?php echo $pat["code_postal"] ?></td>
    <td><?php echo $pat["ville"] ?></td>
    <td><?php echo $pat["date_naissance"] ?></td>
    <td><?php echo $pat["lieu_naissance"] ?></td>
    <td><?php echo $pat["num_secu"] ?></td>
    <td><?php echo $pat["MedecinReferent"] ?></td>
  </tr>


<?php
}
?>

</table>
