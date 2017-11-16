<?php
$xml=simplexml_load_file("resources/export.xml") or die("Error: Cannot create PHP object");
//print_r($xml);

print_r($xml->person);
echo($xml->person->firstname);
echo "----\n";
foreach ($xml->person->attributes() as $key=>$value) {
    echo "$key vaut $value";
}

?>