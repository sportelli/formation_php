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

// Permet de créer un utilisateur en fonction des paramètres fournis
function creationUtilisateur (array $user)
{
    $pdo = connexionBDD();

    // Requete SQL qu'on souhaite exécuter
    $sql = "INSERT INTO utilisateurs (u_identifiant, u_motdepasse, u_email)" 
    . " VALUES (:identifiant, :motdepasse, :email) ";

    $stmt = $pdo->prepare($sql);
    $stmt->execute( ["email" => $user["email"] , 
                "identifiant" => $user["identifiant"], 
                "motdepasse" => $user["motdepasse"]] 
            );
}

function recuperationUtilisateurParIdentifiant(string $identifiant)
{
    $pdo = connexionBDD();
    $sql = "SELECT u_id,u_identifiant,u_motdepasse,u_email" 
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
    }
    return $user;
}

function modificationIdentifiantUtilisateur(string $email, string $nouvelIdentifiant)
{
    $pdo = connexionBDD();
    $sqlUpdate = "UPDATE utilisateurs SET u_identifiant = :identifiant WHERE u_email = :email";
    $stmt = $pdo->prepare($sqlUpdate);
    $stmt->execute( ["email" => $email, "identifiant" => $nouvelIdentifiant]);
}

function suppressionUtilisateur(string $email)
{
    $pdo = connexionBDD();
    $sqlDelete = "DELETE FROM utilisateurs WHERE u_email = :email";
    $stmt = $pdo->prepare($sqlDelete);
    $stmt->execute( ["email" => $email] );
}

// A développer dans couche de services : 
$user = array (
    "identifiant" => "lea",
    "email" => "lea@lea.com",
    "motdepasse" => "lea"
);

creationUtilisateur($user);
echo "Création OK<br />";
print_r(recuperationUtilisateurParIdentifiant("lea")); echo "<br />";
modificationIdentifiantUtilisateur("lea@lea.com", "nouvellelea");
print_r(recuperationUtilisateurParIdentifiant("nouvellelea"));echo "<br />";
suppressionUtilisateur("lea@lea.com");
echo "Suppression OK <br/>";