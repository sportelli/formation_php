<?php
require_once('fonctions_connexion.php');
session_start();

// récupération des informations envoyées par le formulaire
$identifiant = (isset($_POST['login'])) ? ($_POST['login']) : "";
$motdepasse = (isset($_POST['motdepasse'])) ? ($_POST['motdepasse']) : "";

if ( recupUtilisateurConnecte() == null ){
    // verification des informations
    if (($identifiant == "a@a.com") && ($motdepasse == "abc")){
        $utilisateur = array (
            "identifiant" => $identifiant
        );
        $_SESSION["utilisateur"] = $utilisateur;
    
        // Rediriger utilisateur vers un autre page
        header("Location: accueil.php");
    }
    
    else {
        echo "Information erronées => <a href='form6.html'>Retour</a>";
    }
}
else {
    // Utilisateur déjà connecté => accueil.php
    header("Location: accueil.php");
}