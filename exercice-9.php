<h1 style="color: #00FF00;  ">
    Exercice 9
</h1>
<h3 style="color: #229954; ">Créer une fonctionpersonnalisée permettant d’afficher des boutons radio avec un tableau de valeurs en paramètre("Monsieur","Madame","Mademoiselle").</h3>
<hr>
<?php
  $file = ["Masculin" , "Féminin" , "Autre"];
  foreach($file as $value){ ?>
    <input type='radio' id='<?=$value?>' name='sexe'>
    <?= $value . "<br>" ?>
<?php } ?>
</body>
</html>