<?php

// Verifier si nom est une string
// Verifier si age est un entier, sinon le forcer

$nom = (isset($_POST['nom'])) ? ($_POST['nom']) : "";
$age = (isset($_POST['age'])) ? ($_POST['age']) : 0;

$user = array ( "nom" => $nom , "age" => $age);
var_dump($user);
echo "<br />";

$vraioufaux = (is_string($nom)) ? "vrai" : "faux";
print_r( $vraioufaux );

// si age vaut 32ans => va falloir 32
settype($age, "int");

echo "<br />";
$vraioufaux = (is_string($age)) ? "vrai" : "faux";
print_r( $vraioufaux );

echo "<br />";
$user = array ( "nom" => $nom , "age" => $age);
var_dump($user);

echo "<br />";
$contenu = (isset($_POST['contenu'])) ? json_decode($_POST['contenu']) : array();
var_dump($contenu);

if ( is_int($contenu->id ) ){
    settype($contenu->id, "int");
}

var_dump($contenu);

// Renvoie booléen si vrai ou faux
// is_TYPES (is_int, is_string, is_bool ...)
// isset()
// is_null()
// empty()
