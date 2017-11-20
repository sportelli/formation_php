<?php

$age = 60;

if ($age < 18)
    echo "mineur";
else if (( $age >= 18) && ( $age < 60))
    echo "majeur";
else 
    echo "senior";

echo "\n-----\n";
$niveau = 1; 

switch ($niveau){
    case 1 :
        echo "debutant";
        break;
    case 2 : 
        echo "intermediaire";
        break;
    case 3 : 
        echo "expert";
        break;
}

?>