<?php

class Human
{

}

class Person extends Human
{
	public $nom;
	private $id;

	public function setId($id)
	{
		$this->id = $id;
	}

	public function __construct($id = 0, $nom = "") {
        $this->id= $id;
        $this->nom=$nom;
    }
}

$me = new Person(5, "felix");
$classePerson = new ReflectionClass('Person');
print_r($classePerson->hasProperty("nom") . "-\n");
print_r($classePerson->hasProperty("test") . "-\n");
print_r($classePerson->hasProperty("id") . "-\n");

print_r("parent : " . $classePerson->getParentClass()->getName() . "\n");

print_r("-----\n");
print_r("Attributs : \n");
foreach ($classePerson->getProperties() as $attribut)
{
	$attribut->setAccessible(true);
	echo $attribut->getName(), ' => ', $attribut->getValue($me) , "\n";
}

print_r("-----\n");
print_r("Methods : \n");
foreach ($classePerson->getMethods() as $method)
{
	echo $method->getName(), "\n";
}


print_r("-----\n");
print_r($classePerson->hasMethod("xyz") . "-\n");
print_r($classePerson->hasMethod("setId") . "-\n");


?>