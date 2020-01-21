<?php

include ("../metier/ppe-php.php");
include 'DAO.php';
include_once 'bd.Connexion.php';
  class AccesDAO extends \DAO
    {

function __construct() {
    parent::__construct("ID", "acces");
    // echo "constructeur de DAO ", __NAMESPACE__,"<br/>";
}

function read($id) {
    // On utilise le prepared statemet qui simplifie les typages
    $sql = "SELECT * FROM $this->table WHERE $this->key=:ID";
    $stmt = Connexion::getInstance()->prepare($sql);
    $stmt->bindParam(':ID', $id);
    $stmt->execute();

    $row = $stmt->fetch();
    $num = $row["ID"];
    $email = $row["Email"];
    $mdp = $row["mdp_hachee"];
    $gds = $row["Grain_de_sel"];
    // echo "contenu de la base $num $nom $adr $sal ";
    $rep = new \Aero\Pilote\Pilote($email, $mdp, $gds);
    $rep->setNumPil($num);
    return $rep;
}

function update($objet) {
    // On utilise le prepared statemet qui simplifie les typages
    $sql = "UPDATE $this->table SET Email = :email, mdp_hachee = :mdp, Grain_de_sel = :gds  WHERE $this->key=:ID";
    $stmt = Connexion::getInstance()->prepare($sql);
    $num = $objet->getIdAcces();
    $email = $objet->getEmailAcces();
    $mdp = $objet->getMotDePass();
    $gds = $objet->getGrainDeSel();
    $stmt->bindParam(':ID', $num);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':mdp', $mdp);
    $stmt->bindParam(':gds', $gds);
    $stmt->execute();
}

function delete($objet) {
    $sql = "DELETE FROM $this->table WHERE $this->key=:ID";
    $stmt = Connexion::getInstance()->prepare($sql);
    $num = $objet->getIdAcces();
    $stmt->bindParam(':ID', $num);
    $stmt->execute();
}

function create($objet) {
    $sql = "INSERT INTO $this->table (Email,mdp_hachee,Grain_de_sel) VALUES (:email, :mdp, :gds)";
    $stmt = Connexion::getInstance()->prepare($sql);
    $email = $objet->getEmailAcces();
    $mdp = $objet->getMotDePass();
    $gds = $objet->getGrainDeSel();
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':mdp', $mdp);
    $stmt->bindParam(':gds', $gds);
    $stmt->execute();
    $objet->setNumPil(parent::getLastKey());
}

/*
function getAcces() {
    $sql = "SELECT * FROM acces;";
    $rep = "<table class=\"table table-striped\">";
    $rows = Connexion::getInstance()->query($sql);
    foreach ($rows as $row) {
        $rep .= "<tr><td>" . $row["ID"];
        $rep .= "</td><td>" . $row["Email"];
        $rep .= "</td><td>" . $row["mdp_hachee"];
        $rep .= "</td><td>" . $row["Grain_de_sel"] . "</td></tr>";
    }
    return $rep . "</table>";
}*/
  }
 

function getAcces() {
    $resultat = array();
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("SELECT * FROM acces");        
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

