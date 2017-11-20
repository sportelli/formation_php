<?php

$fileName = "resources/myfile.txt";

// file_get_contents
echo "file_get_contents : \n";
$fileContent = file_get_contents($fileName);
echo $fileContent;

// fopen + fgets
echo "\nfopen + fgets : \n";
$inputFile = fopen($fileName, "r");
if ($inputFile) {
    // lecture ligne par ligne
    while (($line = fgets($inputFile)) !== false) {
        echo $line."\n";
    }
} else {
    echo "There was an error in the opening file";
} 
fclose($inputFile);


?>