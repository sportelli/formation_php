<?php

// Form post 
// envoie nom + prenom

// côté PHP 
// creer un array id (1), nom, prenom
// transformer et renvoyer au format json

$nom = (isset($_POST['nom'])) ? $_POST['nom'] : "";
$prenom = (isset($_POST['prenom'])) ? $_POST['prenom'] : "";

header('Content-Type: application/json');

if ( ($prenom != "") && ($nom != "")){
    $user = array();
    $user["id"] = rand(1, 1000);
    $user["nom"] = $nom;
    $user["prenom"]=$prenom;
    
    // Format JSON 
    // { "id" : 1 , "nom": "SPORTELLI", "prenom" : "Felix"}
    echo json_encode($user);
}
