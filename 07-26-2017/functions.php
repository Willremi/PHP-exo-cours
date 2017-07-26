<?php

function addition($a, $b) {
  return $a + $b;
}

$result = addition(2, 3);

echo $result;
echo "<br />\n";

// Créer une fonction echoBoolean qui :
// - prend une variable en paramètre
// - renvoie la chaîne de caractères "vrai" si la variable est true
// - renvoie la chaîne de caractères "faux" si la variable est false

// Appeler cette fonction avec :
// - une valeur true et afficher le résultat
// - une valeur false et afficher le résultat

function echoBoolean($variable) {
  if($variable) {
    return "vrai";
  } else if(!$variable){
    return "faux";
  }
}

$boolean1 = echoBoolean(true);
$boolean2 = echoBoolean(false);

echo $boolean1;
echo "<br />\n";

echo $boolean2;
echo "<br />\n";
