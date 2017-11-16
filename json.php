<?php

/** 
 * Notation JSON 
    {
        "nom": "sportelli",
        "prenom" : "felix",
        "femme" : 
            {
                "nom" : "sportelli",
                "prenom" : "aurelie"
            },
        "notesAuBac" : [ 9, 11],
        "adresses" : 
            [
                {
                    "numero" : "1",
                    "rue" : "Av. des champs Elysees",
                    "codePostal" : "75016",
                    "ville" : "Paris"
                } , 
                {
                    "numero" : "1",
                    "rue" : "Place Massena",
                    "ville" : "Nice"                    
                }
            ]
    }
***/
    $user = array( "prenom" => "felix");
    $user["id"] = 4;
    $user["nom"] = "sportelli";

    $user2 = array( "prenom" => "aurelie");
    $user2["id"] = 6;
    $user2["nom"] = "sportelli";

    $users = array();
    array_push($users, $user);
    array_push($users, $user2);

    // Transformer un objet PHP en JSON
    $json = json_encode($users);

    var_dump($json);

    $mesUsers = json_decode($json);

    var_dump($mesUsers);

?>