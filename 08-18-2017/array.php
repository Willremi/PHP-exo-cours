<?php
// Création d'un tableau vide
$myArray = [];


// Ajout d'éléments
$myArray[] = 42;
$myArray[] = 3.14;
$myArray[] = "foor bar baz";
$myArray[] = true;

// Lecture du tableau ave un index numérique
for($i = 0; $i < count($myArray); $i++){
  echo $myArray[$i];
  echo '<br />';
}

// Suppression de la donnée située à l'index 2
array_splice($myArray, 2, 1);

// Lecture du tableau ave une boucle foreach
foreach($myArray as $key => $value){
  echo $key;
  echo '<br />';
  echo $value;
  echo '<br />';
}
