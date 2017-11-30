<?php
// Remplacer un identifiant en base par un identifiant en MAJUSCULE

$hostDB = "127.0.0.1";
$userDB = "formation";
$passDB = "formation";
$nameDB = "formation";
$charset = "utf-8";

// mock email
$email = "leo@leo.com";

// Chaine de connexion (toutes les informations dont PDO a besoin)
$dsn = "mysql:host=$hostDB;dbname=$nameDB";
$pdo = new PDO($dsn, $userDB, $passDB);

// Requete SQL qu'on souhaite exécuter
$sql = "SELECT u_id,u_identifiant as identifiant,u_motdepasse,u_email FROM utilisateurs WHERE u_email = :email";

// Récupération du "statement" (curseur qui va parcourir les résultats)
$stmt = $pdo->prepare($sql);
$stmt->execute( ["email" => $email] );

$record = $stmt->fetch();
$identifiant = $record['identifiant'] ?? "";

// Modification en base (UPDATE) de l'identifiant 
if ($identifiant != ""){
    $sqlUpdate = "UPDATE utilisateurs SET u_identifiant = :identifiant WHERE u_email = :email";
    $stmt = $pdo->prepare($sqlUpdate);
    $stmt->execute( ["email" => $email, "identifiant" => strtoupper($identifiant)]);
}