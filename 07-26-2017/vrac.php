<?php

$pi = 3.1416;

echo number_format($pi, 0);
echo "<br />\n";
echo number_format($pi, 1);
echo "<br />\n";
echo number_format($pi, 2);
echo "<br />\n";
echo number_format($pi, 3);
echo "<br />\n";

$lorem = "\"boo\"";
echo $lorem;
echo "<br />\n";

$i = 123;
echo $i;
echo "<br />\n";

if($i < 100) {
  echo "i est plus petit que 100";
} else if($i == 100) {
  echo "i est égale à 100";
} else {
  echo "i est plus grand que 100";
}
echo "<br />\n";
$j = random_int(1, 1000);

// déterminer si $j est :
// - plus grand que 500
// - plus petit que 500
// - ou égal à 500
echo $j;
echo "<br />\n";

if($j > 500) {
  echo "j est plus grand que 500";
} else if($i == 500) {
  echo "j est égale à 500";
} else {
  echo "j est plus petit que 500";
}

echo "<br />\n";
$i = random_int(0, 100) / 100;

echo "i == $i\n";
echo "<br />\n";

// déterminez si $i est plus petit ou égal à 0,5 (bloc "if")
// ou non (bloc "else")
if($i <= 0.5) {
  echo "i est plus petit ou égal à 0,5";
} else {
  echo "i est plus grand que 0,5";
}

echo "<br />\n";

$i = random_int(1, 10);

echo "i == $i\n";
echo "<br />\n";
// déterminez si $i est :
// - égal à 5
// - plus grand que 5
// - se trouve dans le dernier cas (dite lequel)
if($i == 5) {
  echo "i == 5\n";
} else if($i > 5) {
  echo "i > 5\n";
} else {
  echo "i < 5\n";
}
echo "<br />\n";

$i = random_int(0, 2);

echo "i == $i\n";
echo "<br />\n";

// $i représente un nombre de personnes
// en fonction de $i, affichez la phrase correspondante :
// - il n'y a personne
// - il y a une seule personne
// - il y a plusieurs personnes
if($i == 0){
  echo "il n'y a personne";
} else if($i == 1) {
  echo "il y a une seule personne";
} else  {
  echo "il y a plusieurs personnes";
}

echo "<br />\n";

// liste de textes
$textes = ['foo', 'bar', 'baz', 'lorem ipsum'];

/// tirage au sort d'un texte
$texte = $textes[random_int(0, 3)];

// structure de contrôle "if elseif else" avec plusieurs "elseif"
if ($texte == 'foo') {
	echo "Vous avez dit foo ?\n";
} elseif ($texte == "bar") {
	echo "Vous avez dit bar ?\n";
} elseif ($texte == "baz") {
	echo "Vous avez dit baz ?\n";
} else {
	echo "Vous avez dit autre chose.\n";
}

echo "<br />\n";

$i = random_int(0, 50);
echo $i;
echo "<br />\n";

// si $i est compris entre 0 et 9, affichez "i est plus petit que 10"
// si $i est compris entre 10 et 19, affichez "i est plus petit que 20"
// si $i est compris entre 20 et 29, affichez "i est plus petit que 30"
// si $i est compris entre 30 et 39, affichez "i est plus petit que 40"
// sinon "i est plus grand ou égal à 40"

if($i < 10){
  echo "i est plus petit que 10";
} else if($i >= 10 && $i < 20) {
  echo "i est plus petit que 20";
} else if($i >= 20 && $i < 30) {
  echo "i est plus petit que 30";
} else if($i >= 30 && $i < 40) {
  echo "i est plus petit que 40";
} else {
  echo "i est plus grand ou égal à 40";
}

echo "<br />\n";
