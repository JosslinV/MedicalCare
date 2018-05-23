<?php require('../model/medecinsModel.php');

if(!isset($_POST["submit"])){
  $patients = requestMedecin($linkpdo);
}
if(!empty($_POST["submit"])){
  if(!empty($_POST["nom"]) || !empty($_POST["prenom"])){
    $patients = requestMedecinSpecifique($linkpdo,$_POST["nom"],$_POST["prenom"]);
  } else {
    $patients = requestMedecin($linkpdo);
    echo '<h3>Recherche incorrecte</h3>';
  }
}?>

<form action="./medecinList.php" method="post">
  Nom:
  <input type="text" name="nom">
  Prenom:
  <input type="text" name="prenom">
  <input type="submit" name="submit" value="Rechercher">
</form>


<?php include("navBar.html"); ?>


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
