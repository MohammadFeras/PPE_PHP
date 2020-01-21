<?php
$racine = dirname(__FILE__);

include "$racine/controleur/controleurPrincipal.php";

if (isset($_GET["action"])) {
    $action = $_GET["action"];
} 
else {
    $action = "defaut";
}

$option="SLAM";
$ville = "Vannes";

setlocale(LC_TIME, "fr_FR", "French");
$date = date("Y-m-d");
$date = strftime("%A %d %B %G", strtotime($date));
$date = ucfirst($date);



$fichier = controleurPrincipal($action);

include "$racine/controleur/$fichier";
?>
     
