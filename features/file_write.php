<?php

$fileNameSrc = "resources/myfile.txt";
$fileNameDest = "resources/myfile_copy.txt";

$content = file_get_contents($fileNameSrc);
$content .= "\nFin de fichier\n";

file_put_contents($fileNameDest, $content);
// file_put_contents($fileNameDest, $content, FILE_APPEND);
// file_put_contents s'occupe d'appeler fclose()

// On affiche le contenu du fichier de destination 
$fileContent = file_get_contents($fileNameDest);
echo $fileContent;

// Suppresion du fichier
unlink($fileNameDest);

?>