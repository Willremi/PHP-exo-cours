<?php

// ajouter un lien nommé "commander" qui renvoit vers la page tunnel-03.php

session_start();

$product = '';
$quantity = '';

if(isset($_SESSION['product'])) {
  $product = $_SESSION['product'];
}
if(isset($_SESSION['quantity'])) {
  $quantity = $_SESSION['quantity'];
}

?><!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">

    <title></title>
  </head>
  <body>

    <div>Produit: <?= htmlentities($product) ?></div>
    <div>Quantité: <?= htmlentities($quantity) ?></div>

  </body>
</html>
