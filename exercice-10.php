<h1 style="color: #00FF00;  ">
    Exercice 10
</h1>
<h3 style="color: #229954; ">En utilisant l’ensemble des fonctions personnalisées crées précédemment,  créer  un  formulaire complet  qui  contient  les  informations  suivantes:  champs  de  texteavec  nom,  prénom,  adresse  e-mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation: «Développeur Logiciel»,«Designer web», «Intégrateur» ou «Chef de projet».Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement de validation (submit).</h3>
<hr>
<!DOCTYPE HTML>  
 <html>
  <head> </head>
<body>  


<h2>Développeur Logiciel</h2>
 
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="email" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  <select>
      
  <option selected="selected">Sélectionner une valeur<option>
      <?php
      $formation = array("Développeur Logiciel", "Designer web", "Intégrateur" ,"Chef de projet");
      foreach($formation as $value){
      ?>

   <option value="
        <?php
          echo ($value);    
        ?>
         ">   
        <?php echo $value; ?>
    </option>

     <?php }  ?>
  </select>
 
</form>
<label for=" submit" id="submit"></label>
<input type="submit" name="" id="submit">
<label for="submit" id="submit">
    <br>
 <a href="https://www.google.com/"> submit</label>
</body>
</html>
<?php  ?>

