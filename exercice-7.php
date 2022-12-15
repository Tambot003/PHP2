<h1 style="color: #00FF00;  ">
    Exercice 7
</h1>
<h3 style="color: #229954; ">Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non.</h3>
<hr>
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<?php
$numperson = ["choix 1", "choix 2", "choix 3"];


foreach ($numperson as $value) {
?>
   <input type="checkbox" id="$value" name="$value">
   <?php 
   echo $value . "<br>";
   ?>
    <?php
}
 ?>
</body>
</html>

 
 