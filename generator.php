<?php


function get_values()
{
	$str = "a;b\nc;d\ne;f";

	$i = 0;
	foreach (explode("\n", $str) as $line) {
		$values = explode(";", $line);
		yield ++$i => $values;
	}
}

foreach (get_values() as $key => $value) {
	echo "Ligne ". $key . ":\n";
	foreach ($value as $key2 => $value2) {
		echo "- " . $value2 . "\n";
	 }
}

?>