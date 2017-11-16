<?php

$str = "Bonjour, c'est Felix. Tout va bien. Moi tout va bien\n";

// Mise en majuscule 
echo strtoupper($str);

// Mise en minuscule
echo strtolower($str);

// Permet d'échapper les apostrophes
echo addslashes($str);

// Permet de récupérer la position d'un caractère
echo strpos($str, ",") . "\n";

// Extraire une partie de chaine
echo substr($str, 7) . "\n";
echo substr($str, 7, 3) . "\n";

// Exploser une string dans un tableau
// Equivalent 
print_r(explode(".", $str));

$users = array("michel", "gregory", "aurelien", "frederic");
$userStr = implode("-", $users);
$usersNew = explode("-", $userStr);

print_r($usersNew);

$msg = "Bonjour #nom# et bienvenue #nom# \n";
echo substr_replace($msg, "felix", 8, 5 );
echo str_replace("#nom#", "felix", $msg);
echo str_replace("#nom#", "felix", $msg, $nb);
echo "Nb remplacements: $nb \n";

echo "Taille: " . strlen($msg) . "\n";

// Compter le nb d'occurences
echo substr_count($str, ".");

$msg1 = "a";
$msg2 = "a";
$msg3 = "A";
$msg4 = "b";

echo ( $msg1 == $msg2 );
echo "\n";
echo ( $msg1 === $msg2 );
echo "\n";
echo strcmp($msg1, $msg2);
echo "\n";
echo strcmp($msg1, $msg4);
echo "\n";

?>