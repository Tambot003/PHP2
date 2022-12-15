<h1 style="color: #00FF00;  ">
    Exercice 2
</h1>

<h3 style="color: #229954; ">Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à une fonction personnalisée.</h3>
<hr>

<?php
  function afficherTabl($table){

    echo"<table border= '25'>

    <thead>
     <tr>
        <th> Pays</th>
        <th> Capitale</th>
     </tr>
    </thead>
    
    <body>";

    foreach($table as $pays => $cap){
    echo"<tr>
    <td>$pays</td>
    <td>$cap</td>
    
    </tr>";
 }echo "</tbody>
  </table>";
 }

 $capitales =[
   "France" => "Paris",
   "Allemagne" => "Berlin",
   "USA"   =>"Washington",
   "Italie" => "Rome"

 ];
 asort($capitales);
 afficherTabl($capitales);


    
    
    


