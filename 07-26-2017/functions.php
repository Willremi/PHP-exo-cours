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
  } else {
    return "faux";
  }
}

$boolean1 = echoBoolean(true);
$boolean2 = echoBoolean(false);

echo $boolean1;
echo "<br />\n";

echo $boolean2;
echo "<br />\n";

function booleanToString($booleanValue) {
  return $booleanValue ? "vrai" : "faux";
}

$boolean = booleanToString(true);
echo $boolean;
echo "<br />\n";

$boolean = booleanToString(false);
echo $boolean;
echo "<br />\n";

function booleanToString2($booleanValue) {
  if($booleanValue === true) {
    return "vrai";
  } else if($booleanValue === false) {
    return "faux";
  } else {
    return false;
  }
}

$result = booleanToString2("foo bar baz");

if($result == false) {
  echo "booleanValue n'est pas une valeur booléenne";
  echo "<br />\n";
} else {
  echo $result;
  echo "<br />\n";
}

// Définition d'une fonction avec déclaration de type
function booleanToString3(bool $booleanValue) {
  return $booleanValue ? "vrai" : "faux";
}

echo booleanToString3(true);
echo "<br />\n";
echo booleanToString3(false);
echo "<br />\n";
echo booleanToString3("foo bar baz");
echo "<br />\n";
