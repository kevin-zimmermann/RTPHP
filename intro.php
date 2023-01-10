<?php
$i = 1;
// On setup un cookie( on passe en paramètre la clé/l'index, la valeur ainsi que la durée du cookie avant son expiration (heure actuelle + 3600 sec -> 1h)
setcookie('nomCookie', $i, time()+3600);
var_dump($_COOKIE);

//On détruit la valeur
unset($_COOKIE['nomCookie']);
var_dump($_COOKIE);

echo $_COOKIE['nomCookie']. "<br>";

//on lance une session
session_start();

// On attribue au tableau associatif une clé "id" ayant une value = 8
$_SESSION['id'] = 8;

echo "Nous sommes avant le session destroy";
var_dump($_SESSION);

// On supprime que les variables de session mais la session existe toujours
session_unset();
//On détruit la session
session_destroy();

echo "Nous sommes après le session destroy";
var_dump($_SESSION['id']);
var_dump($_SESSION);
