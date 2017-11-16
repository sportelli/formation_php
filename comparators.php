<?php 

$str = (2 == "2") ? "ok" : "nok";
echo $str . "\n";

$str = (2 === "2") ? "ok" : "nok";
echo $str . "\n";

// Spaceship operator (PHP 7)
print_r( 3 <=> 2 );
print_r( 1 <=> 2 );
print_r( 2 <=> 2 );
// Ne fonctionne pas : 
// print_r( 3 <==> "b" );

?>