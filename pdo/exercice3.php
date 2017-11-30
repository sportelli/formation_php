<?php
$hostDB = "127.0.0.1";
$userDB = "formation";
$passDB = "formation";
$nameDB = "formation";
$charset = "utf-8";

$user = array (
    "identifiant" => "leo",
    "email" => "leo@leo.com",
    "motdepasse" => "leo"
);


// Chaine de connexion (toutes les informations dont PDO a besoin)
$dsn = "mysql:host=$hostDB;dbname=$nameDB";
$pdo = new PDO($dsn, $userDB, $passDB);

// Requete SQL qu'on souhaite exécuter
$sql = "INSERT INTO utilisateurs (u_identifiant, u_motdepasse, u_email)" 
        . " VALUES (:identifiant, :motdepasse, :email) ";

$stmt = $pdo->prepare($sql);
$stmt->execute( ["email" => $user["email"] , 
                    "identifiant" => $user["identifiant"], 
                    "motdepasse" => $user["motdepasse"]] 
                );
