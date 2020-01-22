<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
include_once "$racine/modele/DAO.Formation.php";

$listeAgences = getAgences();
$ville = "Bretagne";

include_once "$racine/fonctions.php";
include_once "$racine/vue/vueCSS.php";
include_once "$racine/vue/header.html.php";
include_once "$racine/vue/vueNavigation.php";
include_once "$racine/vue/vueAjoutFormat.php";
include_once "$racine/vue/footer.html.php";
include_once "$racine/vue/vueScript.php";





if(isset($_POST['agences'])) $ville =($_POST['agences']);
