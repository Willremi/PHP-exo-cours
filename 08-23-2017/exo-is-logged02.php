<?php

//Si l'utilisateur est loggé, le rediriger sur duckduckgo.com
//Sinon afficher le message: "Vous n'êtes pas loggés"



if (isset($_SESSION['logged']) && $_SESSION['logged']) {
  $url= "http://duckduckgo.com";
header("Location: " . $url, true, 302);
} else {
  echo "Vous n'êtes pas loggés";
}
