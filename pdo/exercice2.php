<?php
$host = 'localhost';
$db   = 'formation';
$user = 'myuser';
$pass = 'myuser';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$pdo = new PDO($dsn, $user, $pass);

$sql = 'SELECT * FROM utilisateurs where id = :id';
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => 2]);
while ($row = $stmt->fetch())
{
    echo $row['nom'] . $row['id'] . "<br/>";
}