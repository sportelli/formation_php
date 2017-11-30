<?php
$host = 'localhost';
$db   = 'formation';
$user = 'myuser';
$pass = 'myuser';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$pdo = new PDO($dsn, $user, $pass);

$stmt = $pdo->query('SELECT id,nom,identifiant FROM utilisateurs');
while ($row = $stmt->fetch())
{
    echo $row['nom'] . $row['id'] . "<br/>";
}

