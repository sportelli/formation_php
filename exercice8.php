<?php
// On créé un array d'utilisateurs vide
$utilisateurs = array();

echo "Nb utilisateurs: " . count($utilisateurs) . "\n";

// On créé nos utilisateurs
$user1 = array("nom" => "sportelli", "prenom" => "felix");
$user2 = array("nom" => "sportelli", "prenom" => "aurelie");
$user3 = array("nom" => "sportelli", "prenom" => "lea");

array_push($utilisateurs, $user1);
array_push($utilisateurs, $user2);
$utilisateurs[ count($utilisateurs) ] = $user3;

var_dump($utilisateurs);

?>