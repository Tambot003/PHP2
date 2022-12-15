
    
    
    
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