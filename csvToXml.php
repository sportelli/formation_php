<?php

/**
 * Permet de lire le fichier CSV et 
 * d'en faire un array avec toutes
 * les colonnes
 */
function csvToArray($fileName)
{
    $lines = array();
    $cpt = 0;
    $headers = array();
    $inputFile = fopen($fileName, "r");
    if ($inputFile) {
        // lecture ligne par ligne
        while (($line = fgets($inputFile)) !== false) {
            $lineArray = explode(";", $line);
            if ($cpt++ ==0)
            {
                // Ligne d'en-tête
                $headers = $lineArray;
            }
            else 
            {
                array_push($lines, $lineArray);                
            }
        }
    } else {
        echo "There was an error in the opening file";
    } 
    fclose($inputFile);  
//    var_dump($headers);
//    var_dump($lines);
    $users = array();
    
    // remplir mon tableau d'utilisateurs
    foreach ($lines as $userLine) {
        $user = array();
        foreach ($headers as $key => $value) {
            $user[trim($value)]=chop($userLine[$key]);
        }
        array_push($users, $user);
    }

    return $users;  
}

function arrayToJson($users)
{
    // Array to JSON
    return json_encode($users);
}

function jsonToArray($strUsers)
{
    // JSON to Array
    return json_decode($strUsers);
}

$xmlFile = "resources/data.xml";
$lines = csvToArray("resources/data.csv");
//arrayToXml($lines, $xmlFile)
print_r(arrayToJson($lines));
print_r(jsonToArray(arrayToJson($lines)));
$jsonStr = arrayToJson($lines);
file_put_contents("resources/data.json" , $jsonStr);
