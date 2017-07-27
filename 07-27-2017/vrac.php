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

$tableau = [123, 3.14, 'foo bar baz'];

// boucle for avec count()
for ($i = 0; $i < count($tableau); $i++) {
	echo $tableau[$i] . "\n";
}
echo "<br />\n";

// déclarer un tableau avec 5 strings
// effectuez une boucle for avec count()
// et affichez chaque élément du tableau

$array1 = ['pif', 'paf', 'boum', 'abra', 'cadabra'];

for($i = 0; $i < count($array1); $i++) {
  echo $array1[$i] . "\n";
}
echo "<br />\n";

$lignes = [
	[11, 'foo'],
	[12, 'bar'],
	[13, 'baz'],
];

// boucle sur un tableau de tableaux
for ($i = 0; $i < count($lignes); $i++) {
	$ligne = $lignes[$i];
	echo $ligne[0] . "\n";
}

echo "<br />\n";

$users = [
	[11, 'John Doe'],
	[12, 'Lorem Ipsum'],
	[13, 'Foo Bar'],
];

// affichez l'id et le nom des users
// sous la forme "Id: Nom Utilisateur"
// en utilisant une boucle for avec count()
for($i = 0; $i < count($users); $i++) {
  $user = $users[$i];
  echo $user[0] . ": " . $user[1] . "<br />\n";
}

echo "<br />\n";

$lignes = [
	[11, 'foo'],
	[12, 'bar'],
	[13, 'baz'],
];

// boucle sur un tableau de tableaux
for ($i = 0; $i < count($lignes); $i++) {
	// accès direct aux éléments d'un sous-tableau
	$nombre = $lignes[$i][0];
	$texte = $lignes[$i][1];
	echo $nombre . ' ' . $texte . "\n";
}

echo "<br />\n";

$users = [
	[11, 'John Doe'],
	[12, 'Lorem Ipsum'],
	[13, 'Foo Bar'],
];

// affichez l'id et le nom des users
// sous la forme "Id : Nom Utilisateur"
// en utilisant une boucle for avec count()
// et en utilisant l'accès direct aux élément du sous-tableau
// c-à-d sans passer par des variables intremédiaires
for($i = 0; $i < count($users); $i++) {
  $id = $users[$i][0];
  $name = $users[$i][1];
  echo $id . ": " . $name . "<br />\n";
}

echo "<br />\n";

/*
id   name        active
42   John Doe    true
123  Lorem Ipsum false
255  Foo Bar     true
*/
$users = [
	[
		'id' => 42,
		'name' => 'John Doe',
		'active' => true,
	],
	[
		'id' => 123,
		'name' => 'Lorem Ipsum',
		'active' => false,
	],
	[
		'id' => 255,
		'name' => 'Foo Bar',
		'active' => true,
	],
];

for ($i = 0; $i < count($users); $i++) {
	echo $users[$i]['id'] . ' : ' . $users[$i]['name'] . "\n";
}

echo "<br />\n";

/*
id   name        active
42   John Doe    true
123  Lorem Ipsum false
255  Foo Bar     true
*/

$users = [
	[
		'id' => 42,
		'name' => 'John Doe',
		'active' => true,
	],
	[
		'id' => 123,
		'name' => 'Lorem Ipsum',
		'active' => false,
	],
	[
		'id' => 255,
		'name' => 'Foo Bar',
		'active' => true,
	],
];

// affichez la liste des users actifs
// en utilisant une boucle for
for($i = 0; $i < count($users); $i++){
  if($users[$i]['active']) {
    echo $users[$i]['id'] . ": " . $users[$i]['name'] . "<br />\n";
  }
}

echo "<br />\n";

$users = [
	[
		'id' => 42,
		'name' => 'John Doe',
		'active' => true,
	],
	[
		'id' => 123,
		'name' => 'Lorem Ipsum',
		'active' => false,
	],
	[
		'id' => 255,
		'name' => 'Foo Bar',
		'active' => true,
	],
];

// affichez la liste de tous les users
// sous la forme "Id : Nom User (actif)" si actif
// et "Id : Nom User (désactivé)" si pas actif
// en utilisant une boucle for
for($i = 0; $i < count($users); $i++) {
  if($users[$i]['active']) {
    $active = 'actif';
  } else {
    $active = 'désactivé';
  }
// affichage des valeurs par interpolation
  echo "{$users[$i]['id']} : {$users[$i]['name']} ($active)<br/>\n";
}

echo "<br />\n";
echo "<br />\n";

echo "Boucle foreach <br />\n";
$tableau = [123, 3.14, 'lorem ipsum', true];

// boucle sur toutes les valeurs d'un tableau à clés numériques
foreach ($tableau as $element) {
	echo $element . "\n";
}

echo "<br />\n";
$user = [
	'id' => 42,
	'name' => 'Foo Bar',
	'active' => true,
];

// boucle sur toutes les valeurs d'un tableau à clés alphanumériques
foreach ($user as $value) {
	echo $value . "\n";
}

echo "<br />\n";
$tableau = [123, 3.14, 'lorem ipsum', true];

// boucle sur toutes les valeurs d'un tableau à clés numériques
foreach ($tableau as $cle => $valeur) {
	echo $cle . ' : ' . $valeur . "\n";
}

echo "<br />\n";

$user = [
	'id' => 42,
	'name' => 'Foo Bar',
	'active' => true,
];

// boucle sur toutes les valeurs d'un tableau à clés alphanumériques
foreach ($user as $key => $value) {
	echo $key . ' : ' . $value . "\n";
}

echo "<br />\n";

/*
affectez à la variable $user le tableau suivant
en utilisant l'entête comme clé alphanumérique

id   name        active
42   John Doe    true
*/

// affichez tous les champs à l'aide d'un boucle foreach
$array1 = [
  'id' => 42,
  'name' => 'John Doe',
  'active' => true,
];

foreach($array1 as $key => $value) {
  echo $key . ' : ' . $value . "<br />\n";
}
echo "<br />\n";
/*
affectez à la variable $users le tableau suivant
en utilisant l'entête comme clé de chaque sous-tableau

id   name        active
42   John Doe    true
123  Lorem Ipsum false
255  Foo Bar     true
*/

$users = [
	[
		'id' => 42,
		'name' => 'John Doe',
		'active' => true,
	],
	[
		'id' => 123,
		'name' => 'Lorem Ipsum',
		'active' => false,
	],
	[
		'id' => 255,
		'name' => 'Foo Bar',
		'active' => true,
	],
];

// affichez la liste des users actifs
// en utilisant une boucle foreach
foreach($users as $user) {
  if($user['active']) {
    echo $user['id'] . ' : ' . $user['name'] . "<br />\n";
  }
}
echo "<br />\n";
