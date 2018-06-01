<?php require('../model/medecinsModel.php');

if(!isset($_POST["submit"])){
  $medecins = requestMedecin($linkpdo);
}
if(!empty($_POST["submit"])){
  if(!empty($_POST["nom"]) || !empty($_POST["prenom"])){
    $medecins = requestMedecinSpecifique($linkpdo,$_POST["nom"],$_POST["prenom"]);
  } else {
    $medecins = requestMedecin($linkpdo);
    echo '<h3>Recherche incorrecte</h3>';
  }
}?>
<main>
  <form action="./medecinList.php" method="post">
    Nom:
    <input type="text" name="nom">
    Prenom:
    <input type="text" name="prenom">
    <input type="submit" name="submit" value="Rechercher">
  </form>

  <div class="scrollable">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Civilité</th>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Options</th>
        </tr>
      </thead>
    <?php
    foreach($medecins as $med){
    ?>
      <tbody>
        <tr>
          <td><?php echo $med["civilite"] ?></td>
          <td><?php echo $med["nom"] ?></td>
          <td><?php echo $med["prenom"] ?></td>
          <td>
            <button onclick='location.href="../site/modifier.php?id=<?php echo $med["idMedecin"]?>"' type="button" class="btn btn-success">
               <img src="../view/media/edit.png" alt="edit" height="20" width="20">
            </button>
            <button onclick='location.href="../functions/deleteMedecin.php?id=<?php echo $med["idMedecin"]?>"' type="button" class="btn btn-danger">
               <img src="../view/media/delete.png" alt="delete" height="20" width="20">
          </td>
        </tr>
      </tbody>
    <?php
    }
    ?>
    </table>
  </div>
</main>
