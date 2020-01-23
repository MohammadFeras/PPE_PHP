<?php

include_once "../modele/DAO.Formation.php";

if (isset($_POST['agenceNamePHP'])) {

    $listeFormations = getFormationsByName($_POST['agenceNamePHP']);

    for ($i = 0; $i < count($listeFormations); $i++) {
        foreach ($listeFormations[$i] as $value) {
            echo "<option value='" . $value . "' >" . $value . "</option>";
        }
    }
}



if (isset($_POST['formationNamePHP'])) {
    
    $listePromos = getPromosByName($_POST['formationNamePHP']);
    
    for ($i = 0; $i < count($listePromos); $i++) {
        foreach ($listePromos[$i] as $value) {
            echo "<option value='" . $value . "' >" . $value . "</option>";
        }
    }
}

if(isset($_POST['formationNamePHP'])&& isset($_POST['agenceNamePHP'])&& isset($_POST['promoNamePHP'])){
    
}





