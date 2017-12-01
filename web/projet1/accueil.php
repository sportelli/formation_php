<?php
require_once('utils/fonctions_connexion.php');
require_once('utils/variables.php');

session_start();

$utilisateur = recupUtilisateurConnecte();

if ( $utilisateur != null ){    
    echo "bonjour " . $utilisateur["nom"];

    ?>
        <form method="post" action="<?=CREATION_URL?>">
            <label for="identifiant">Identifiant</label>
            <input type="text" name="identifiant"/>
            <br />
            <label for="email">Email</label>
            <input type="text" name="email"/>
            <br />
            <label for="motdepasse">Mot de passe</label>
            <input type="password" name="motdepasse"/>
            <br />
            <input type="submit"/>
        </form>

    <?php

}
else 
{
//    header('Location: form6.html');
    echo "Vous devez être connecté pour afficher cette page <br/>";
    echo "<a href='".INDEX_URL."'>Se connecter</a>";
}