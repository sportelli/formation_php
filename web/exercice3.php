<?php

// Form post 
// envoie un contenu json

// côté PHP 
// transformer le json recu en array php

$description = (isset($_POST['texte'])) 
                ? $_POST['texte'] : "";

header('Content-Type: application/json');

if ( ($description != "") ){
    $user = json_decode($description);
    print_r(json_encode($user));

}
