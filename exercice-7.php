
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>This is a Heading</h1>
<p>This is a paragraph.</p>
<?php
$numperson = ["choix", "choix", "choix"];


foreach ($numperson as $value) {
?>
   <input type="checkbox" id="$value" name="$value">
   <?php echo $choix . "<br>";?>
    <?php
}
 ?>
</body>
</html>

 
 