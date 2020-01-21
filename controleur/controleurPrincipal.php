<?php
function controleurPrincipal($action) {
    $lesActions = array();
    $lesActions["defaut"] = "pageAccueil.php";
    $lesActions["connexion"] = "pageConnexion.php";
    $lesActions["admin"] = "pageAdmin.php";
    $lesActions["formateur"] = "pageFormateur.php";
    $lesActions["stagiaire"] = "pageStagiaire.php";

    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } 
    else {
        return $lesActions["defaut"];
    }
}
