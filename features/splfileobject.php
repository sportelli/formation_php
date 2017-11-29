<?php

/*
Source: https://www.w3schools.com/php/func_filesystem_fopen.asp
"r" (Read only. Starts at the beginning of the file)
"r+" (Read/Write. Starts at the beginning of the file)
"w" (Write only. Opens and clears the contents of file; or creates a new file if it doesn't exist)
"w+" (Read/Write. Opens and clears the contents of file; or creates a new file if it doesn't exist)
"a" (Write only. Opens and writes to the end of the file or creates a new file if it doesn't exist)
"a+" (Read/Write. Preserves file content by writing to the end of the file)
*/

// lecture d'un fichier 
$file = new SplFileObject("../resources/myfile.txt","r+");
foreach ($file as $line) {
    print_r ($line);
}

// Ecriture d'un fichier 
$ligneAEcrire = "nouvelle ligne";
$file = new SplFileObject("../resources/myfile2.txt","w+");
$file->fwrite($ligneAEcrire);

// lecture d'un fichier CSV
$csvFile = new SplFileObject("../resources/data.csv","r+");
$csvFile->setFlags(SplFileObject::READ_CSV);
$csvFile->setCsvControl(';', '"', '"');
foreach ($csvFile as $line) {
    var_dump($line);
    foreach ($line as $colonne)
    {
        echo $colonne . "-";
    }
}

