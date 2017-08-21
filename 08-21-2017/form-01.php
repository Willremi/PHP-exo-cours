<?php

$title = '';
$body = '';

if($_GET){
// var_dump($_GET);

if(isset($_GET['title'])) {
$title = $_GET['title'];
}
if(isset($_GET['body'])) {
$body = $_GET['body'];
}
}

 ?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="" method="get">

      <input type="text" name="title" value="<?=htmlentities($title)?>" placeholder="titre"/><br />
      <textarea name="body" placeholder="texte"><?=htmlentities($body)?></textarea><br />
      <input type="submit" value="Envoyer" />

    </form>

  </body>
</html>
