<?php
$ipUtilisateur = $_SERVER['REMOTE_ADDR'];
echo "Votre ip est " . $ipUtilisateur . "<br/>";

$port = $_SERVER['SERVER_PORT'];
echo ($port == 443) ? "Sécurisée": "Non sécurisée";
echo "<br />";

$page = $_SERVER['REQUEST_URI'];
echo "Page demandée: " . $page . "<br/><br/>";

print_r($_GET);