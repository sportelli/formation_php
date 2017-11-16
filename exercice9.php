<?php
$tab = array("valeur1", "valeur2" , "valeur3");

// 3 Methodes d'itérations 

// 1 - For
echo "For : ";
for ($i=0; $i < count($tab); $i++) { 
    echo $tab[$i] . "- ";
}

// 2 - Foreach
echo "\nForeach: ";
foreach ($tab as $value) {
    echo $value . "-";
}

// 2bis - ForEach sur tableau associatif
$tabMap = array (1 => "valeur1", 2 => "valeur2", 3 => "valeur3");
echo "\nForeach: ";
foreach ($tabMap as $cle => $value) {
    echo $value . "(" . $cle . ")" . "-";
}

// 3 - While
echo "\nWhile: ";
$i = 0; 
while ($i < count($tab))
{
    echo $tab[$i++] . "-";
}

// 3bis - Do While 
echo "\nDoWhile: ";
$i = 0; 
do 
{
    echo $tab[$i++] . "-";    
} while ($i < count($tab));

?>