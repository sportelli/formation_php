<?php
require_once('utils/fonctions_connexion.php');
require_once('utils/variables.php');
require_once('services/user_services.php');

session_start();

/*
<? echo ACCUEIL_URL; ?>
<?=ACCUEIL_URL?>
*/

// récupération des informations envoyées par le formulaire
$identifiant = (isset($_POST['login'])) ? ($_POST['login']) : "";
$motdepasse = (isset($_POST['motdepasse'])) ? ($_POST['motdepasse']) : "";

if ( recupUtilisateurConnecte() == null ){
    if ($_SERVER["REQUEST_METHOD"] == "GET"){
        // Afficher mon formulaire
        ?>

        <form method="post" action="<?=INDEX_URL?>">
            <label for="login">Identifiant</label>
            <input type="text" name="login"/>
            <br />
            <label for="motdepasse">Mot de passe</label>
            <input type="password" name="motdepasse"/>
            <br />
            <input type="submit"/>
        </form>

        <?php


    }else {
        // verification des informations
        $user = verif_identifiant_motdepasse($identifiant, $motdepasse);
        if ( $user  != null){
            $utilisateur = array (
                "identifiant" => $identifiant,
                "nom" => $user["nom"]
            );
            $_SESSION["utilisateur"] = $utilisateur;
        
            // Rediriger utilisateur vers un autre page
            header("Location: " . ACCUEIL_URL );
        }
        
        else {
            echo "Information erronées => <a href=" . INDEX_URL .">Retour</a>";
        }
    }
}
else {
    // Utilisateur déjà connecté => accueil.php
    header("Location: accueil.php");
}