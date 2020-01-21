<?php

function login($mail, $mdp) {
    if (!isset($_SESSION)) {
        session_start();
    }

    $mailU = $mail;
    $mdpU = $mdp;

    if (trim($mdpU) == trim(crypt($mdpU, $mdpU))) {
        // le mot de passe est celui de l'utilisateur dans la base de donnees
        $_SESSION["mail"] = $mailU;
        $_SESSION["mdp"] = $mdpU;
    }
}

function logout() {
    if (!isset($_SESSION)) {
        session_start();
    }
    unset($_SESSION["mail"]);
    unset($_SESSION["mdp"]);
}

function getMailULoggedOn(){
    if (isLoggedOn()){
        $ret = $_SESSION["mail"];
    }
    else {
        $ret = "";
    }
    return $ret;
        
}

function isLoggedOn() {
    if (!isset($_SESSION)) {
        session_start();
    }
    $ret = false;

    if (isset($_SESSION["mail"])) {
        $util = getUtilisateurByMailU($_SESSION["mail"]);
        if ($util["mail"] == $_SESSION["mail"] && $util["mdp"] == $_SESSION["mdp"]
        ) {
            $ret = true;
        }
    }
    return $ret;
}

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    // prog principal de test
    header('Content-Type:text/plain');

    if (isLoggedOn()) {
        echo "logged";
    } else {
        echo "not logged";
    }

    // deconnexion
    logout();
}
?>