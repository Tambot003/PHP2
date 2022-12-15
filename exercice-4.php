<h1 style="color: #00FF00;  ">
    Exercice 4
</h1>

<h3 style="color: #229954; ">A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).On admet que l’URL de la page Wikipédia de la capitale adopte la forme:https://fr.wikipedia.org/wiki/</h3>
<hr>

<?php

function afficherTabl($table){
    

    echo"<table border= '25'>

    <thead>
     <tr>
        <th> Pays</th>
        <th> Capitale</th>
        <th> lien Wiki</th>
     </tr>
    </thead>
    
    <body>";

   
    foreach($table as $pays => $cap){
    echo"<tr>
    <td>$pays</td>
    <td>$cap</td>
    <td><a href ='https://fr.wikipedia.org/wiki/$cap' target='_blank'>Lien</a></td>
    
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
