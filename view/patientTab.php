
<?php
require('../model/patientsModel.php');
require('../model/medecinsModel.php');
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
}
?>
<main>
  <form action="./patientList.php" method="post">
    Nom:
    <input type="text" name="nom">
    Prenom:
    <input type="text" name="prenom">
    <input type="submit" name="submit" value="Rechercher">
  </form>

  <div class="scrollable">
  <table class="table table-striped affTab">
    <thead class="thead-dark">
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
        <th>Options</th>
      </tr>
    </thead>

  <?php
  foreach($patients as $pat){
    //conversion timestamp to string
    $date = (date('d-m-Y',$pat["date_naissance"]));

    //conversion du medecin par son id
    $medecins = requestMedecinId($linkpdo, $pat["MedecinReferent"]);
      foreach($medecins as $med){
        $nomMed = $med['nom'];
        $prenomMed = $med['prenom'];
      }
      if(!isset($nomMed) && !isset($prenomMed)){
        $nomMed = '';
        $prenomMed = '';
      }
  ?>
      <tbody>
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
          <td><?php echo $nomMed.' '.$prenomMed ?></td>
          <td>
            <button onclick='location.href="../site/priseRdv.php?id=<?php echo $pat["idPatient"]?>"' type="button" class="btn btn-primary">
               <img src="../view/media/calendar.png" alt="Calendar" height="20" width="20">
            </button>
            <button onclick='location.href="../site/modifier.php?id=<?php echo $pat["idPatient"]?>"' type="button" class="btn btn-success">
               <img src="../view/media/edit.png" alt="edit" height="20" width="20">
            </button>
            <button onclick='location.href="../site/supprimer.php?id=<?php echo $pat["idPatient"]?>"' type="button" class="btn btn-danger">
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
