<?php

// dans tunnel-02.php, récupérer les données et insérer les dans les clés "product" et "quantity" de session
// afficher les clés "product" et "quantity" de la variable de session
// ajouter un lien nommé "commander" qui renvoit vers la page tunnel-03.php
session_start();

if($_POST) {
  if(isset($_POST['product'])) {
    $_SESSION['product'] = $_POST['product'];
  }
  if(isset($_POST['quantity'])) {
    $_SESSION['quantity'] = $_POST['quantity'];
  }
}

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

    <?php if($product && $quantity): ?>
    <a href="tunnel-03.php">Commander</a>
    <?php endif; ?>
  </body>
</html>
