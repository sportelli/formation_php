<?php
require_once('dao/user_dao.php');

function verif_identifiant_motdepasse(string $identifiant, string $motdepasse)
{
    $user = recup_utilisateur_par_identifiant($identifiant);

    // Mots de passe identiques
    if ( strcmp($user["password"] , $motdepasse ) == 0){
        return $user;
    } else {
        return null;
    }
}