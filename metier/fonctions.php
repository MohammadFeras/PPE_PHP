<?php

session_start();

include_once "../modele/DAO.Formation.php";
include_once "../modele/DAO.Stagiaire.php";

if (isset($_POST['agenceNamePHP'])) {
    $_SESSION['agenceNamePHP'] = $_POST['agenceNamePHP'];

    $listeFormations = getFormationsByName($_SESSION['agenceNamePHP']);

    for ($i = 0; $i < count($listeFormations); $i++) {
        foreach ($listeFormations[$i] as $value) {
            echo "<option value='" . $value . "' >" . $value . "</option>";
        }
    }
}



if (isset($_POST['formationNamePHP'])) {
    $_SESSION['formationNamePHP'] = $_POST['formationNamePHP'];

    $listePromos = getPromosByName($_SESSION['formationNamePHP']);

    for ($i = 0; $i < count($listePromos); $i++) {
        foreach ($listePromos[$i] as $value) {
            echo "<option value='" . $value . "' >" . $value . "</option>";
        }
    }
}

if (isset($_SESSION['agenceNamePHP']) && isset($_SESSION['formationNamePHP']) && isset($_POST['promoNamePHP'])) {

    $listeStagiaires = getStagiairesByAgenceEtFormationEtPromotion($_SESSION['agenceNamePHP'], $_SESSION['formationNamePHP'], $_POST['promoNamePHP']);

    $_SESSION['promoNamePHP'] = $_POST['promoNamePHP'];

    for ($i = 0; $i < count($listeStagiaires); $i++) {
        echo "<option value='" . $listeStagiaires[$i]["nom"] . ' ' . $listeStagiaires[$i]["prenom"] . "' >" . $listeStagiaires[$i]["nom"] . ' ' . $listeStagiaires[$i]["prenom"] . "</option>";
    }
}

if(isset($_POST['nomStagiairePHP'])){    
    $_SESSION['nomStagiairePHP'] = $_POST['nomStagiairePHP'];
    echo $_SESSION['nomStagiairePHP'];
}





