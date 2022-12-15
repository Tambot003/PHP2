<h1 style="color: #00FF00;  ">
    Exercice 6
</h1>
<h3 style="color: #229954; ">Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.</h3>
<hr>
    
    
    
  <select>
      <option selected="selected">Sélectionner une valeur<option>
     
      <?php
      $numperson = array("Madam", "Monsieur", "Mademoiselle");
      
      
      foreach($numperson as $value){
      ?>

      <option value="

      <?php
          echo ($value);
          
      ?>

      ">
      
      <?php echo $value; ?>
    
      </option>
    
     

     <?php
      }
      ?>
  </select>