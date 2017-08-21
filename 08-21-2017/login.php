<!-- Créer un formulaire de login :
- champ login
- champ password

Récupérer ces données côté php puis :
- afficher les données de l'utilisateur dans les champs
- vérifier que :
  -le login correspond à "toto"
  -le password correspond à "123"
- afficher un message d'erreur si le login ou le mot de passe est faux
- afficher un message de bienvenue si le login et mot de passe sont corrects -->
<?php

  $login = '';
  $Mdp = '';
  $message = '';

  if($_POST){
    // var_dump($_POST);
    if(isset($_POST['login'])) {
      $login = $_POST['login'];
    }
    if(isset($_POST['Mdp'])) {
      $Mdp = $_POST['Mdp'];
    }
    if ($login == 'toto' && $Mdp == 123) {
      $message = "Bienvenu !";
    } else {
      $message = "Erreur, le login ou le mot de passe est erroné";
    }
  }
 ?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title></title>
  </head>
  <body>
    <div><?= htmlentities($messages) ?></div>
    <form action="login.php" method="post">
      <input type="text" name="login" value="<?=htmlentities($login) ?>" placeholder="login" />
      <input type="password" name="Mdp" value="<?=htmlentities($Mdp) ?>" placeholder="Mot de passe" />
      <input type="submit" value="Envoyer" />
    </form>

  </body>
</html>
