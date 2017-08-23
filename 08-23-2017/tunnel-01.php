<?php

//dans tunnel-01.php, créer un formulaire avec :
// - un champ texte nommé "product"
// - un champ numérique nommé "quantity"
// le formulaire doit envoyer les données à tunnel-02.php

// dans tunnel-02.php, récupérer les données et insérer les dans les clés "product" et "quantity" de session
// afficher les clés "product" et "quantity" de la variable de session
// ajouter un lien nommé "commander" qui renvoit vers la page tunnel-03.php

// dans tunnel-03.php, afficher les clés "product" et "quantity" de la variable de session



 ?>
 <!DOCTYPE html>
 <html lang="fr">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title></title>
     <link href="vendor/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" />
     <link href="vendor/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel="stylesheet" />
     <title></title>
   </head>
   <body>

     <form action="tunnel-02.php" class="form-horizontal" method="post">
 <fieldset>

 <!-- Form Name -->
 <legend>Type de produit et la quantité</legend>

 <!-- Text input-->
 <div class="form-group">
   <label class="col-md-4 control-label" for="product">Produit</label>
   <div class="col-md-4">
   <input id="product" name="product" placeholder="produit" class="form-control input-md" type="text" />

   </div>
 </div>

 <!-- Text input-->
 <div class="form-group">
   <label class="col-md-4 control-label" for="quantity">Quantité</label>
   <div class="col-md-4">
   <input id="quantity" name="quantity"  class="form-control input-md" type="number" />

   </div>
 </div>

<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
 <input type="submit" value="Valider" />
</div>
</div>

 </fieldset>
 </form>

 <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
 <script src="vendor/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
   </body>
 </html>
