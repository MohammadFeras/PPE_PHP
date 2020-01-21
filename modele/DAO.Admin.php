<?php

include ("../metier/ppe-php.php");
include 'DAO.php';
include_once 'bd.Connexion.php';

class PAdminDAO extends \DAO
    {
  function __construct() {
  parent::__construct("IdA", "admin");
  // echo "constructeur de DAO ", __NAMESPACE__,"<br/>";
  }

  public function read($id) {
  // On utilise le prepared statemet qui simplifie les typages
  $sql = "SELECT * FROM $this->table WHERE $this->key=:id";
  $stmt = Connexion::getInstance()->prepare($sql);
  $stmt->bindParam(':id', $id);
  $stmt->execute();

  $row = $stmt->fetch();
  $idA = $row["IdA"];
  $nom = $row["Nom"];
  $prenom = $row["Prenom"];
  $email = $row["Email"];
  $agance = $row["Agance"];
  // echo "contenu de la base $num $nom $adr $sal ";
  $rep = new \ppe_php\Admin\Admin($nom, $prenom, $email, $agance);
  $rep->setIdA($idA);
  return $rep;
  }

  public function update($objet) {
  // On utilise le prepared statemet qui simplifie les typages
  $sql = "UPDATE $this->table SET Nom = :nom, Prenom = :prenom, Email = :email Agance = :agance  WHERE $this->key=:IdA";
  $stmt = Connexion::getInstance()->prepare($sql);
  $idA = $objet->getIdA();
  $nom = $objet->getNomA();
  $prenom = $objet->getPrenomA();
  $email = $objet->getEmailS();
  $agance = $objet->getAganceA();
  $stmt->bindParam(':IdA', $idA);
  $stmt->bindParam(':Nom', $nom);
  $stmt->bindParam(':Prenom', $prenom);
  $stmt->bindParam(':Email', $email);
  $stmt->bindParam(':Agance', $agance);
  $stmt->execute();
  }

  public function delete($objet) {
  $sql = "DELETE FROM $this->table WHERE $this->key=:IdA";
  $stmt = Connexion::getInstance()->prepare($sql);
  $idA = $objet->getIdA();
  $stmt->bindParam(':IdA', $idA);
  $stmt->execute();
  }

  public function create($objet) {
  $sql = "INSERT INTO $this->table (Nom,Prenom,Email,Agance) VALUES (:Nom, :Prenom,:Email, :Agance)";
  $stmt = Connexion::getInstance()->prepare($sql);
  $nom = $objet->getNomA();
  $prenom = $objet->getPrenomA();
  $email = $objet->getEmailA();
  $agance = $objet->getAganceA();
  $stmt->bindParam(':Nom', $nom);
  $stmt->bindParam(':Prenom', $prenom);
  $stmt->bindParam(':Email', $email);
  $stmt->bindParam(':Agance', $agance);
  $stmt->execute();
  $objet->setNumPil(parent::getLastKey());
  }/*

  static function getAdmins() {
  $sql = "SELECT * FROM admin;";
  $rep = "<table class=\"table table-striped\">";
  $rows = Connexion::getInstance()->query($sql);
  foreach ($rows as $row) {
  $rep .= "<tr><td>" . $row["IdA"];
  $rep .= "</td><td>" . $row["Nom"];
  $rep .= "</td><td>" . $row["Prenom"];
  $rep .= "</td><td>" . $row["Email"];
  $rep .= "</td><td>" . $row["Agance"] . "</td></tr>";
  }
  return $rep . "</table>";
  }
 */
    }

function getAdmins() {
    $resultat = array();
    
    try {
        $cnx = getInstance();
        $req = $cnx->prepare("SELECT * FROM admin");
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

echo "<pre>";
print_r(getAdmins());

$test = getAdmins();

for ($i = 0; $i < count($test); $i++){
    foreach ($test[$i] as $value) {
        echo $value . "</br>";
    }
    echo "</br>";
}