<?php 

$equipe = array(
    array("id"=>1, "nom" => "nicolas abc", "niveau" => 2, "age" => 27),
    array("id"=>2, "nom" => "jerome def", "niveau" => 2, "age" => 18),
    array("id"=>3, "nom" => "xavier ghi", "niveau" => 1, "age" => 15),
    array("id"=>4, "nom" => "felix ifj", "niveau" => 3, "age" => 65)
);

// Fonctions à développer : 
// - niveau : debutant (1), intermediaire (2), expert (3)
// - tranche age : mineur(0-17), majeur (18-60), senior (60+)
// - trigramme: 1ère lettre du prénom + 2 premières lettres du nom :-)

// Tableau que j'attends en HTML : 
// id trigramme niveau "tranche age"

function getTrancheAge (int $age) : string 
{
    if ($age < 18)
        return "mineur";
    else if (( $age >= 18) && ( $age < 60))
        return "majeur";
    else 
        return "senior";
}

function getNiveauDesc(int $niveau) : string 
{
    $niveauDesc = "Inconnu";
    switch ($niveau){
        case 1 :
            $niveauDesc =  "debutant";
            break;
        case 2 : 
            $niveauDesc =  "intermediaire";
            break;
        case 3 : 
            $niveauDesc =  "expert";
            break;
    }
    return $niveauDesc;
}

function getTrigramme($nom): string 
{
    $trigramme = substr($nom, 0, 1);
    $positionEspace = strpos($nom, " ") +1;
    $trigramme .= substr($nom, $positionEspace , 2 );
    return strtoupper($trigramme);
}

// boucle sur l'équipe pour afficher le contenu HTML : 

echo "<table>";
echo "<thead><tr><th>id</th><th>trigramme</th><th>niveau</th><th>tranche age</th></tr></thead>";
foreach ($equipe as $membre) {
    echo "<tr>";
    echo "<td>" . $membre["id"] . "</td>";
    echo "<td>" . getTrigramme($membre["nom"]) . "</td>";
    echo "<td>" . getNiveauDesc($membre["niveau"]) . "</td>";
    echo "<td>" . getTrancheAge($membre["age"]) . "</td>";
    echo "</tr>";
}
echo "</table>";