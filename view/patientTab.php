
<?php require('../model/patientsModel.php');

if(!isset($_POST["submit"])){
  $patients = requestPatients($linkpdo);
}
if(!empty($_POST["submit"])){
  if(!empty($_POST["nom"]) || !empty($_POST["prenom"])){
    $patients = requestPatientsSpecifique($linkpdo,$_POST["nom"],$_POST["prenom"]);
  } else {
    $patients = requestPatients($linkpdo);
    echo '<h3>Recherche incorrecte</h3>';
  }
}?>
<main>
  <form action="./patientList.php" method="post">
    Nom:
    <input type="text" name="nom">
    Prenom:
    <input type="text" name="prenom">
    <input type="submit" name="submit" value="Rechercher">
  </form>


  <h2> Liste des patients : </h2>

  <table class="table">
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
  <?php
  foreach($patients as $pat){
    //conversion timestamp to string
    $date = (date('d-m-Y',$pat["date_naissance"]));
  ?>
    <tr>
      <td><?php echo $pat["civilite"] ?></td>
      <td><?php echo $pat["nom"] ?></td>
      <td><?php echo $pat["prenom"] ?></td>
      <td><?php echo $pat["adresse"] ?></td>
      <td><?php echo $pat["code_postal"] ?></td>
      <td><?php echo $pat["ville"] ?></td>
      <td><?php echo $date ?></td>
      <td><?php echo $pat["lieu_naissance"] ?></td>
      <td><?php echo $pat["num_secu"] ?></td>
      <td><?php echo $pat["MedecinReferent"] ?></td>
    </tr>

  <?php
  }
  ?>
  </table>
</main>
