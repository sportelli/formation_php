<?php

function recup_utilisateur_par_identifiant($identifiant)
{
    //TODO: A récupérer de la base de données !!
    $user = array("id" => 4 , 
                    "identifiant" => $identifiant, 
                    "nom" => "sportelli" , 
                    "password" => "abc");
    return $user;
}