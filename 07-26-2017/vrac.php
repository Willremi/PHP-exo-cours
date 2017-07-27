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

$age = random_int(12, 25);
$abonne = random_int(0, 1);

// déterminez si un utilisateur a droit ou non d'accéder à une ressource :
// - non si l'utilisateur a moins de 16 ans
// - non si l'utilisateur a 16 ou plus mais qu'il n'est pas abonné
// - oui si l'utlisateur a 16 ou plus et qu'il est abonné

echo "Age : " . $age;
echo "<br />\n";
echo "abonné : " . $abonne;
echo "<br />\n";

if($age < 16){
  echo "accès refusé (âge < 16)\n";
} else if($age >= 16 && $abonne == 0) {
  echo "accès refusé car vous devez être abonné.\n";
} else if($age >= 16 && $abonne == 1) {
  echo "accès autorisé.\n";
}


echo "<br />\n";

$scoreJoueur1 = random_int(0, 100);
$scoreJoueur2 = random_int(0, 100);

echo "Joueur 1 : " . $scoreJoueur1 . "\n";
echo "et Joueur 2 : " . $scoreJoueur2;

echo "<br />\n";
// si au moins un des deux joueurs a un score plus grand que 50
// les joueurs peuvent passer au niveau supérieur
// sinon : game over

if($scoreJoueur1 > 50 || $scoreJoueur2 > 50) {
  echo "Joueur 1 et 2 peuvent passer au niveau suivant";
} else {
  echo "GAME OVER !!!";
}

echo "<br />\n";

$scoreJoueur1 = random_int(0, 100);
$scoreJoueur2 = random_int(0, 100);

$bonusJoueur1 = random_int(0, 1);
$bonusJoueur2 = random_int(0, 1);

echo "joueur 1: $scoreJoueur1\n";
echo " et joueur 2: $scoreJoueur2\n";
echo " avec bonus joueur 1: $bonusJoueur1\n";
echo " et bonus joueur 2: $bonusJoueur2\n";

// si les deux joueurs ont plus de 50 points
// ou  si un des deux joueurs a attrapé un bonus
// ils peuvent passer au niveau supérieur
// sinon : game over
echo "<br />\n";

if(($scoreJoueur1 > 50 && $scoreJoueur2 > 50) || $bonusJoueur1 == 1 || $bonusJoueur2 == 1) {
  echo "Level ++\n";
} else {
  echo "GAME OVER !!!\n";
}

echo "<br />\n";

$i = random_int(1, 10);
$j = random_int(1, 10);

echo "i == $i\n";
echo " et j == $j\n";

echo "<br />\n";

// i > 5 et j > 5 sinon i > 5 et j < 5
// i < 5 et j > 5 sinon i < 5 et j < 5

if($i > 5) {
  if($j > 5) {
    echo "i et j sont plus grands que 5";
  } else {
    echo "i est seulement plus grand que 5";
  }
} else {
  if($j < 5) {
    echo "i et j sont plus petits que 5";
  } else {
    echo "j est seulement plus grand que 5";
  }
}
