<h1 style="color: #00FF00;  ">
    Exercice 5
</h1>
<h3 style="color: #229954; ">Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en
    précisant le nom des champs associés..</h3>
<hr>


<?php
//  $List = array("Nom ", "Prenome ",  "Ville");
 
//   foreach ($List as  $nom ) {
   
//     echo   ' <label for="' . $nom .' ">'.$nom.'  </label> <br> 

//      <input type="text" id="name" name="name"  required 
//        minlength="15" maxlength="15" size="15"><br>';

// }
//-----------------------------------------------------------------------------
// 
//function createTextFieldForm($fields) {
//   $form = '<form>';
//   foreach ($fields as $field) {
//     $form .= '<label for="' . $field . '">' . $field . '</label>';
//     $form .= '<input type="text" name="' . $field . '" id="' . $field . '">';
//   }
//   $form .= '</form>';
//   return $form;
// }
// $fields = array('First Name', 'Last Name', 'Email');
// echo createTextFieldForm($fields);
function createTextFieldForm($fields) {
  $form = '<form>';
  foreach ($fields as $field) {
    $form .= '<label for="' . $field . '" style="color: #229954;">' . $field . '</label>';
    $form .= '<input type="text" name="' . $field . '" id="' . $field . '">';
  }
  $form .= '</form>';
  return $form;
}
