<?php

echo "Les fonctions <br />\n";

// définissez une fonction qui calcule le volume d'un parallélipipède
// appelez cette fonction en passant des variables en paramètres
// et stockez le résultat dans une variable

function volume($longueur, $largeur, $hauteur){
  return $longueur * $largeur * $hauteur;
}

$L = 15;
$l = 5;
$h = 3;

echo "Longueur : " . $L . " largeur : " . $l . " hauteur : " . $h;
echo "<br />\n";

$volume = volume($L, $l, $h);
echo "Le volume d'un parallélipipède est de " . $volume;
echo "<br />\n";
echo "<br />\n";

echo "Boucle for <br />\n";

// boucle for sans count()
for ($i = 1; $i <= 10; $i++) {
	echo $i . "\n";
}
echo "<br />\n";

// affichez à rebours les nombres de 10 à 1
// en utlisant une boucle for
// indice : "$i--" est la même chose que "$i = $i - 1" (c-à-d retrancher 1 de $i)
for ($i=10; $i > 0; $i--) {
  echo $i . "\n";
}
echo "<br />\n";
