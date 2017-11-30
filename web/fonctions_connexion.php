<?php

/**
 * Fonction qui retourne l'objet utilisateur
 * en session s'il existe, sinon retourne null
 */
function recupUtilisateurConnecte(){
    if ( isset($_SESSION["utilisateur"]) ){    
        return $_SESSION["utilisateur"];
    }
    else 
        return null;        
}