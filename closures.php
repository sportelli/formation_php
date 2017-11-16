<?php

// anonymous function 
function a ($x)
{
    echo $x;
}

$maFonction = function ()
{
    echo "maFonction appelée";
};

$maFonction();

// Avec arguments 
$maFonction2 = function ($x) 
{
    echo ++$x;
};

$maFonction2(2);

// Portée variable
$x = 3;
$maFonction3 = function () 
{
    echo ++$x;
};

// $maFonction3(); // Error

$x = 3;
$maFonction4 = function () use($x)
{
    echo ++$x;
};

$maFonction4();
echo $x; // Passage par copie ou référence ?

$maFonction5 = function ()
{
    echo "je suis 5";
};

function traitement($func) 
{
    // Traitement ...
    $func(); // Aucune idée quelle méthode il appelle
    // Traitement ...
}

traitement($maFonction5);