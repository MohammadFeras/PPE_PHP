<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
$ville = "Bretagne";

include_once "$racine/modele/authentification.inc.php"; // pour pouvoir utiliser isLoggedOn()
include_once "$racine/vue/vueCSS.php";
include_once "$racine/vue/headerConnexion.html.php";
include_once "$racine/vue/vueNavigation.php";
include_once "$racine/vue/footer.html.php";
include_once "$racine/vue/vueScript.php";


if(isset($_POST['agences'])) $ville =($_POST['agences']);