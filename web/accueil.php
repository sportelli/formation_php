<?php
require_once('fonctions_connexion.php');

session_start();

$utilisateur = recupUtilisateurConnecte();

if ( $utilisateur != null ){    
    echo "bonjour " . $utilisateur["identifiant"];
}
else 
{
//    header('Location: form6.html');
    echo "Vous devez être connecté pour afficher cette page <br/>";
    echo "<a href='form6.html'>Se connecter</a>";
}