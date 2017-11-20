<?php

/**
 * Les fonctions PHP peuvent avoir des valeurs
 * par défaut pour leurs paramètres, les rendant optionnels
 */
function somme ($a = 2 , $b = 3)
{
    return $a+$b;
}

print_r(somme(2, 3) . "\n" ) ;
print_r(somme(2)  . "\n");
print_r(somme());
?>