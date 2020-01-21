<?php

include ("../metier/ppe-php.php");
include 'DAO.php';
include_once 'bd.Connexion.php';

  class FormateurDAO extends \DAO
    {
  function __construct() {
  parent::__construct("IdF", "formateur");
  // echo "constructeur de DAO ", __NAMESPACE__,"<br/>";
  }

  function read($id) {
  // On utilise le prepared statemet qui simplifie les typages
  $sql = "SELECT * FROM $this->table WHERE $this->key=:IdF";
  $stmt = Connexion::getInstance()->prepare($sql);
  $stmt->bindParam(':IdF', $id);
  $stmt->execute();

  $row = $stmt->fetch();
  $num = $row["IdF"];
  $nom = $row["Nom"];
  $prenom = $row["Prenom"];
  $email = $row["Email"];
  $agance = $row["Agance"];
  // echo "contenu de la base $num $nom $adr $sal ";
  $rep = new \ppe_php\formateur\formateur($nom, $prenom, $email, $agance);
  $rep->setIdF($num);
  return $rep;
  }

  function update($objet) {
  // On utilise le prepared statemet qui simplifie les typages
  $sql = "UPDATE $this->table SET nom = :Nom, prenom = :Prenom, email = :Email, agance = :Agance  WHERE $this->key=:IdF";
  $stmt = Connexion::getInstance()->prepare($sql);
  $num = $objet->getIdF();
  $nom = $objet->getNomF();
  $prenom = $objet->getPrenomF();
  $email = $objet->getEmailF();
  $agance = $objet->getAganceF();
  $stmt->bindParam(':IdF', $num);
  $stmt->bindParam(':Nom', $nom);
  $stmt->bindParam(':Prenom', $prenom);
  $stmt->bindParam(':Email', $email);
  $stmt->bindParam(':Agance', $agance);
  $stmt->execute();
  }

  function delete($objet) {
  $sql = "DELETE FROM $this->table WHERE $this->key=:IdF";
  $stmt = Connexion::getInstance()->prepare($sql);
  $num = $objet->getIdF();
  $stmt->bindParam(':IdF', $num);
  $stmt->execute();
  }

  function create($objet) {
  $sql = "INSERT INTO $this->table (Nom,Prenom,Email,Agance) VALUES (:nom, :prenom, :email, :agance)";
  $stmt = Connexion::getInstance()->prepare($sql);
  $nom = $objet->getNomF();
  $prenom = $objet->getPrenomF();
  $email = $objet->getEmailF();
  $agance = $objet->getAganceF();
  $stmt->bindParam(':nom', $nom);
  $stmt->bindParam(':prenom', $prenom);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':agance', $agance);
  $stmt->execute();
  $objet->setNumPil(parent::getLastKey());
  }

/*
  function getFormateurs() {
  $sql = "SELECT * FROM formateur;";
  $rep = "<table class=\"table table-striped\">";
  $rows = Connexion::getInstance()->query($sql);
  foreach ($rows as $row) {
  $rep .= "<tr><td>" . $row["IdF"];
  $rep .= "</td><td>" . $row["Nom"];
  $rep .= "</td><td>" . $row["Prenom"];
  $rep .= "</td><td>" . $row["Email"];
  $rep .= "</td><td>" . $row["Agance"] . "</td></tr>";
  }
  return $rep . "</table>";
  }*/
 }

function getFormateurs($idR) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("SELECT * FROM formateur");
        $req->bindValue(':idR', $idR, PDO::PARAM_INT);

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
