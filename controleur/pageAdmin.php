<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
$ville = "Bretagne";
if(isset($_POST['agences']) && $_POST['agences'] != "default") $ville =($_POST['agences']);

include_once "$racine/vue/vueCSS.php";
include_once "$racine/vue/header.html.php";
include_once "$racine/vue/vueNavigation.php";
include_once "$racine/vue/vueTableauAdmin.php";
include_once "$racine/vue/footer.html.php";
include_once "$racine/vue/vueScript.php";

