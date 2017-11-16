<?php

function affiche_utilisateurs ( $users )
{
    foreach ($users as $key => $value) {
        echo "key: $key , value: $value \n";
    }
    echo "---------\n";
}

function ajoute_utilisateur($id, $nom, &$utilisateurs) 
{
    // Cree utilisateur dans $utilisateurs
    // affiche_utilisateurs()
    $utilisateurs[$id] = $nom;
    affiche_utilisateurs($utilisateurs);
}

$utilisateurs = array(
        "utilisateur1" => "felix",
        "utilisateur2" => "aurelie"
    );

affiche_utilisateurs($utilisateurs);
ajoute_utilisateur("utilisateur3", null, $utilisateurs);
affiche_utilisateurs($utilisateurs);

?>