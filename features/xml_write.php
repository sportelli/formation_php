<?php
$xml = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><document></document>');

$xml->addAttribute('version', '1.0');

$xml->addChild('datetime', date('Y-m-d H:i:s'));

$person = $xml->addChild('person');
$person->addChild('firstname', 'Felix');
$person->addChild('familyname', 'SPORTELLI');
$person->addAttribute('id', 1);

echo $xml->asXml();
// Pour ecrire dans un fichier : 
//$xml->asXml("resources/export.xml");

// Pour ecrire dans un fichier "joli"
$dom = new DOMDocument("1.0");
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;
$dom->loadXML($xml->asXML());
$dom->save("resources/export_nice.xml");

?>