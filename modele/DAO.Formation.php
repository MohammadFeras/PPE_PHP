<?php

include ("../metier/ppe-php.php");
include 'DAO.php';
include_once 'bd.Connexion.php';
/*
  function __construct() {
  parent::__construct("ID", "formation");
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
  $agance = $row["Agance"];
  $nomFormation = $row["Nom_Formation"];
  $promo = $row["Promo"];
  // echo "contenu de la base $num $nom $adr $sal ";
  $rep = new \Aero\Pilote\Pilote($agance, $nomFormation, $promo);
  $rep->setIdFormation($num);
  return $rep;
  }

  function update($objet) {
  // On utilise le prepared statemet qui simplifie les typages
  $sql = "UPDATE $this->table SET Agance = :agance, Nom_Formation = :nomFormation, Promo = :promo  WHERE $this->key=:ID";
  $stmt = Connexion::getInstance()->prepare($sql);
  $id = $objet->getIdFormation();
  $agance = $objet->getAganceFormation();
  $nomFormation = $objet->getNomFormation();
  $promo = $objet->getPromo();
  $stmt->bindParam(':id', $id);
  $stmt->bindParam(':agance', $agance);
  $stmt->bindParam(':nomFormation', $nomFormation);
  $stmt->bindParam(':promo', $promo);
  $stmt->execute();
  }

  function delete($objet) {
  $sql = "DELETE FROM $this->table WHERE $this->key=:ID";
  $stmt = Connexion::getInstance()->prepare($sql);
  $id = $objet->getIdFormation();
  $stmt->bindParam(':ID', $id);
  $stmt->execute();
  }

  function create($objet) {
  $sql = "INSERT INTO $this->table (Agance,Nom_Formation,Promo) VALUES (:agance, :nomFormation, :promo)";
  $stmt = Connexion::getInstance()->prepare($sql);
  $agance = $objet->getAganceFormation();
  $nomFormation = $objet->getNomFormation();
  $promo = $objet->getPromo();
  $stmt->bindParam(':agance', $agance);
  $stmt->bindParam(':nomFormatio', $nomFormation);
  $stmt->bindParam(':promo', $promo);
  $stmt->execute();
  $objet->setNumPil(parent::getLastKey());
  }

  function getFormations() {
  $sql = "SELECT * FROM formation;";
  $rep = "<table class=\"table table-striped\">";
  $rows = Connexion::getInstance()->query($sql);
  foreach ($rows as $row) {
  $rep .= "<tr><td>" . $row["ID"];
  $rep .= "</td><td>" . $row["Agance"];
  $rep .= "</td><td>" . $row["Nom_Formation"];
  $rep .= "</td><td>" . $row["Promo"] . "</td></tr>";
  }
  return $rep . "</table>";
  }
 */

function getFormations() {
    $resultat = array();
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("SELECT * FROM formation");
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

print_r(getFormations());

