<?php

	// indexed arrays
	$indexedArray = array("windows", "mac", "linux");
	echo $indexedArray[0];
	echo count($indexedArray);
	echo "\n";
	for($i = 0; $i < count($indexedArray); $i++) {
    	echo $indexedArray[$i] . "\n"; 
	}

	// named / associative arrays
	$associativeArray = array ("os" => "windows", "brand" => "microsoft");
	$associativeArray['processor'] = "i7";
	foreach($associativeArray as $key => $value) {
    	echo "Key=" . $key . ", Value=" . $value;
    	echo "\n";
	}

	// multi dimensional arrays
	$expenses = array (
		array ( "id" => 1, "store" => "amazon" , "price" => 99),
		array ( "id" => 2, "store" => "apple" , "price" => 1199),
		array ( "id" => 3, "store" => "google" , "price" => 0.99)
	);

?>