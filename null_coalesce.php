<?php 

/**
 * Fonction qui me retourne le nom
 * passé en parametre si non null
 * si null , renvoyer "test"
 */
function recupNom($nom = null , $r2 = null)
{
    $r = "";
    // PHP5 
    $r = ($nom == null) ? "test" : $nom;

    // PHP7 
    $r = $nom ?? $r2 ?? "test";

    return $r;
}

echo recupNom() . "\n";
echo recupNom("felix") . "\n";
echo recupNom(null, "x") . "\n";

?>