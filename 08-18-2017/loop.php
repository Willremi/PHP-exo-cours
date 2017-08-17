<?php

$exemple = rand(0, 100);

echo $exemple;
echo '<br />';

// exo 1
// Créer un tableau nommé $data
// ajoutez y 100 valeurs aléatoires comprises entre 0 et 10
echo '<br />';
$data = [];

for($i = 0; $i < 100; $i++){
$data[$i] = rand(0, 10);
echo "$i : $data[$i]";
echo '<br />';
}

// exo 2
// Créer un tableau nommé $words qui contient 50 mots différents
// Réinitialiser un tableau vide dans $data
// ajoutez-y 100 tableaux ayant la structure suivante :
// - une clé "word" contenant un des 50 mots du tableau $words sélectionné au hasard
// - une clé "count" contenant une valeur aléatoire comprises entre 0 et 10
$words = ["Lorem", "ipsum", "dolor", "sit", "amet", "consectetur", "adipiscing", "elit", "Phasellus", "nibh", "elit", "hendrerit", "consequat", "auctor", "vel", "consectetur", "ac", "mauris", "Proin", "non", "sagittis", "dolor", "et", "rhoncus", "mauris", "Duis", "ac", "finibus", "libero", "Donec", "at", "laoreet", "enim", "convallis", "fringilla", "lectu", "Nulla", "vitae", "viverra", "erat", "ut", "faucibus", "nisi", "Nam", "sed", "commodo", "enim", "Mauris", "ac", "augue",];
