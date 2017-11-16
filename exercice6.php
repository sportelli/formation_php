<?php

// Tableau d'entiers
$tabEntier = array ( 1 , 2 , 3);
echo "Valeur 0 : " . $tabEntier[0] . "\n";
echo "Taille : " . count($tabEntier) . "\n";

for ($i=0; $i < count($tabEntier); $i++) { 
	echo $tabEntier[$i] . "-";
}
echo "\n";

// Tableaux de chaines
$tabStr = array ("frederic" , "aurelien", 1, "gregory", "michel" );
echo "Presents: \n";
for ($i=0; $i < count($tabStr); $i++) { 
	echo "- " . $tabStr[$i] . "\n";
}
echo "\n";

?>