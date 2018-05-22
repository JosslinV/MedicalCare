<?php require('../model/medecinsModel.php');

$patients = requestMedecin($linkpdo); ?>

<table>
  <tr>
    <th>Civilité</th>
    <th>Nom</th>
    <th>Prénom</th>
  </tr>
<?php
foreach($patients as $pat){
?>
  <tr>
    <td><?php echo $pat["civilite"] ?></td>
    <td><?php echo $pat["nom"] ?></td>
    <td><?php echo $pat["prenom"] ?></td>
  </tr>

<?php
}
?>
</table>
