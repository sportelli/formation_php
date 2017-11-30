<?php

// Fonction qui permet de se connecter à la base de données
// A réutiliser dans toutes mes functions de DAO
function connexionBDD()
{
    $hostDB = "127.0.0.1";
    $userDB = "formation";
    $passDB = "formation";
    $nameDB = "formation";
    $charset = "utf-8";
    
    // Chaine de connexion (toutes les informations dont PDO a besoin)
    $dsn = "mysql:host=$hostDB;dbname=$nameDB";
    $pdo = new PDO($dsn, $userDB, $passDB);

    return $pdo;
}

// VERSION SANS BASE DE DONNEES
/*
function recup_utilisateur_par_identifiant($identifiant)
{
    //TODO: A récupérer de la base de données !!
    $user = array("id" => 4 , 
                    "identifiant" => $identifiant, 
                    "nom" => "sportelli" , 
                    "password" => "abc");
    return $user;
}
*/

// VERSION AVEC BASE DE DONNEES
function recup_utilisateur_par_identifiant($identifiant)
{
    $pdo = connexionBDD();
    $sql = "SELECT u_id,u_identifiant,u_motdepasse,u_email " 
           . " FROM utilisateurs WHERE u_identifiant = :identifiant";

    // Récupération du "statement" (curseur qui va parcourir les résultats)
    $stmt = $pdo->prepare($sql);
    $stmt->execute( ["identifiant" => $identifiant] );

    $user = array();
    while ( $ligne = $stmt->fetch())
    {
        $user["identifiant"]= $ligne['u_identifiant'];
        $user["email"]= $ligne['u_email'];
        $user["id"]= $ligne['u_id'];
        $user["nom"]= $ligne['u_identifiant'];
        $user["password"] = $ligne['u_motdepasse'];
    }
    return $user;
    
}