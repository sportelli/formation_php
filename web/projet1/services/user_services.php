<?php
require_once('dao/user_dao.php');

function verif_identifiant_motdepasse(string $identifiant, string $motdepasse)
{
    $user = recup_utilisateur_par_identifiant($identifiant);

    // Mots de passe identiques
    if (( isset($user["password"] ) ) && ( strcmp($user["password"] , $motdepasse ) == 0)){
        return $user;
    } else {
        return null;
    }
}

function ajout_nouvel_utilisateur(string $identifiant, string $email, string $motdepasse)
{
    $user = array();
    $user["identifiant"] = $identifiant;
    $user["email"] = $email;
    $user["motdepasse"] = $motdepasse;
    $user["nom"] = $identifiant;

    
}