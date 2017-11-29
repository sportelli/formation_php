<?php 
//define(NB_VISITES, "nbVisites");
const NB_VISITES = "nbVisites";
//var_dump($_SESSION);

session_start();

if (isset($_GET['purge']) && ($_GET["purge"] == "1")){
    $_SESSION[NB_VISITES]=0;
}

else {
    // Affiche la valeur actuelle de sessoin
    if (isset($_SESSION[NB_VISITES]))
        echo $_SESSION[NB_VISITES];
    else 
        echo 0;
    
    // Incrémente le nombre de visites de 1 
    if (isset($_SESSION[NB_VISITES]))
        $_SESSION[NB_VISITES]++;
    else    
        $_SESSION[NB_VISITES]=1;

}