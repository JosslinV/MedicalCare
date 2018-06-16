<button onclick="toggleForm()" class="btn btn-success btn-md ">Ajouter un médecin</button>

<?php require('furnitures/formMedecins.php')?>


<script>
  function toggleForm(){
      // on réccupère l'élément form.
      var formulaire = document.getElementById('newMedecin');

      // Condition pour afficher/cacher le formulaire en fonction de son état
      if(formulaire.style.display == 'block'){
          formulaire.style.display = 'none';
      }else{
          formulaire.style.display = 'block';
      }
  }
</script>
