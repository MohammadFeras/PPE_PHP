<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}

include_once "$racine/vue/entete.html.php";
include_once "$racine/vue/vuePresentation.php";
include_once "$racine/vue/vueTechnologie.php";
include_once "$racine/vue/vueProjets.php";
include_once "$racine/vue/vueSeRenseigner.php";
include_once "$racine/vue/vueContact.php";
include_once "$racine/vue/footer.html.php";
include_once "$racine/vue/vueProjet1.php";
include_once "$racine/vue/vueProjet2.php";
include_once "$racine/vue/vueProjet3.php";
include_once "$racine/vue/vueScript.php";


?>
