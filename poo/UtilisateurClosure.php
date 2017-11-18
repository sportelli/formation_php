<?php

interface JSONable 
{
    public function toJSON();
}

class Personne 
{
    
    
    public function disBonjour()
    {
        return "bonjour \n";
    }
    
}

class Utilisateur extends Personne
{
    private $id;
    private $nom;
    
    const HOMME=1;
    const FEMME=2;
    
    public function toJSON()
    {
        // Methode 1
        $str = " { "
            . "\"id\": \"" .$this->id ."\""
            . ", \"nom\": \"" . $this->nom . "\"}";
        
        // Methode 2 
        $dictionnaire = array ( "id" => $this->id,
                                "nom" => $this->nom);
        $str = json_encode($dictionnaire);

        return $str; 
    }
    private static $nbInstances;

    public static function recupNbInstances()
    {
        return self::$nbInstances . "\n";
    }
    
    public function __construct($id = 0, $nom ="")
    {
        $this->id = $id;
        $this->nom = $nom;
        self::$nbInstances=4;
    	echo "constructeur appelé \n";
    }

    public function __destruct()
    {
        echo "\ndestructeur appelé";
    }

    public function bonjour()
    {
        return parent::disBonjour();
    }

    // Traiter l'objet Personne 
    // comme une chaine de caractères
    public function __toString()//PHP7 :string
    {
    	return "mon objet Personne avec id" . $this->id . "\n"; 
    }

    /**
     * @return mixed
     */
    public function getId() 
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     *
     * @return self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function longueMethode()
    {
        sleep(5);
    }

    public function tresLongueMethode()
    {
        echo "avant ... \n";
        sleep(15);
        echo "apres ... \n";
    }

    public function calculeTemps($fonction)
    {
        $date = new DateTime();
        $debut= $date->getTimestamp();

        echo "avant ... \n";
        
        echo $fonction();
        
        echo "apres ... \n";
        $date = new DateTime();
        $temps = $date->getTimestamp() - $debut;

        return $temps;
    }
}

$user = new Utilisateur();
$user->setId(3);
$user->setNom("felix");
echo $user;

// Appel de la méthode héritée
echo $user->disBonjour();

// Appel de constantes
echo $user::HOMME . "\n";

// Appel de méthodes qui appelle la méthode parente
echo $user->bonjour();

// Methodes statiques
echo Utilisateur::recupNbInstances();

echo $user->toJSON();

//echo $user->longueMethode();
//echo $user->tresLongueMethode();

$method = function() use ($user)
{
    return $user->longueMethode();
};

echo "Temps écoulé : " . $user->calculeTemps($method);