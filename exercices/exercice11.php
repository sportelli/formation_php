<?php

function bonjour()
{
    echo "bonjour <br />";
}

bonjour();

function somme($a , $b )
{
    return $a+$b;
}

echo somme(2,3) . "\n";

// Fonctionne uniquement en PHP7
function somme7 ( int $a , int $b) : int 
{
    return $a+$b;
}
echo somme7(2 , 6);

?>