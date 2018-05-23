<button onclick="toggleForm()">Ajouter un patient</button>

<?php require('furnitures/formulaire.html')?>

<script>
  function toggleForm(){
      // on réccupère l'élément form.
      var formulaire = document.getElementById('newPatient');

      // Condition pour afficher/cacher le formulaire en fonction de son état
      if(formulaire.style.display == 'block'){
          formulaire.style.display = 'none';
      }else{
          formulaire.style.display = 'block';
      }
  }
</script>
