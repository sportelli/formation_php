<?php

// Tableau associatifs ( Clé / Valeur )
$utilisateur = array ( "nom" => "sportelli", "prenom" => "felix");
echo $utilisateur["nom"] . " " . $utilisateur["prenom"] . "\n";

var_dump($utilisateur);

echo "\n-------------\n";

$utilisateurs = array(
    array ( "nom" => "sportelli", "prenom" => "felix", "age" => "32"),
    array ( "nom" => "sportelli", "prenom" => "aurelie", "sexe" => "F")
);
//echo $utilisateurs[0]["prenom"] . "\n";

for ($i=0; $i < count($utilisateurs); $i++) { 
	
	// $user est l'objet courant
	$user = $utilisateurs[$i];

	// Pour chaque tuple contenu dans $user
	foreach ($user as $cle => $valeur) {
		echo "clé = " . $cle . ", valeur= ". $valeur . "\n";
	}

	echo "\n----------\n";

}

$dictionnaireUtilisateurs = array(
    "felix" => array ( "nom" => "sportelli", "prenom" => "felix", "age" => "32"),
    "aurelie" => array ( "nom" => "sportelli", "prenom" => "aurelie", "sexe" => "F"),
	"total" => 10
);

echo ">" . $dictionnaireUtilisateurs["felix"]["age"] . "< \n";
echo ">>" . $dictionnaireUtilisateurs["total"] . " < \n";

// Comment recuperer l'age de felix en 1 commande ? 
$utilisateurs = array(
    72 => array ( "nom" => "sportelli", "prenom" => "felix", "age" => "32"),
    99 => array ( "nom" => "sportelli", "prenom" => "aurelie", "sexe" => "F")
);

echo "\nsexe: " . $utilisateurs[99]["sexe"];

?>