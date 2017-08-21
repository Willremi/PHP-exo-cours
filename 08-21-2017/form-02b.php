<!-- stocker les données de l'utilisateur dans :
-la variable $url
-la variable $tags

afficher me contenu de ces variables dans la balises body -->

<?php

$url = '';
$tags = [];

if($_POST){
// var_dump($_POST);
if(isset($_POST['url'])) {
  $url = $_POST['url'];
}
if(isset($_POST['tags[]'])) {
  $tags = $_POST['tags[]'];
}
}


 ?><!DOCTYPE html>
 <html lang="fr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <div><?=htmlentities($url)?></div>
   </body>
 </html>
