<h1 style="color: #00FF00; ">
    Exercice 8
</h1>
<h3 style="color: #229954; ">Soit l’URL suivante: http://my.mobirise.com/data/userpic/764.jpgCréer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.</h3>
<hr>
<?php

$img = "<img src='764.jpg' wight='20'>";
$i=1;

while($i <= 10){
    echo $img;
    $i++;
}

//for($i=1; $i<= 4; $i++) {
  //  echo $img;
//}

//foreach(range(1,4) as $index) {
    //echo $img;
//}


