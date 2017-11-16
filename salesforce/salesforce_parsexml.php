<?php
$xml=simplexml_load_file("package.xml") 
            or die("Error: Cannot create PHP object");

print_r("Namespace: ");
foreach ($xml->getNamespaces() as $namespace) {
    echo $namespace . "-";
}
echo "\n";

foreach ($xml->children() as $child) {
    //var_dump($child->members[1]);
    //print_r($child->getName());  
    switch($child->getName())
    {
        case "types":
            echo "name : " . $child->name . "\n";
            echo "Members: ";
            foreach ($child->members as  $member)
                echo $member . ";";
            break;
        case "version":
            echo "Version : " . $child;
    }
    echo "\n";
}

?>