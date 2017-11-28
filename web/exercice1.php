<?php
var_dump($_SERVER);

$clientIP = $_SERVER['REMOTE_ADDR'];
$port = $_SERVER['SERVER_PORT'];
$page = $_SERVER['DOCUMENT_URI'];
?>

Bienvenue<br/>
Votre IP : <?=$clientIP ?> <br />
Vous êtes connecté sur notre port <?=$port ?> <br />
Vous accédez à la page <?=$page ?> <br />
