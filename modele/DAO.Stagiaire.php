<?php

include ("../metier/ppe-php.php");
include 'DAO.php';
include_once 'bd.Connexion.php';
/*
  function __construct() {
  parent::__construct("IdS", "stagiaire");
  // echo "constructeur de DAO ", __NAMESPACE__,"<br/>";
  }

  function read($id) {
  // On utilise le prepared statemet qui simplifie les typages
  $sql = "SELECT * FROM $this->table WHERE $this->key=:IdS";
  $stmt = Connexion::getInstance()->prepare($sql);
  $stmt->bindParam(':IdS', $id);
  $stmt->execute();

  $row = $stmt->fetch();
  $num = $row["IdS"];
  $nom = $row["Nom"];
  $prenom = $row["Prenom"];
  $email = $row["Email"];
  $agance = $row["Agance"];
  $idFormation = $row["ID_Formation"];
  $dateEntree = $row["Date_Entree"];
  $dateSortie = $row["Date_Sortie"];
  // echo "contenu de la base $num $nom $adr $sal ";
  $rep = new \ppe_php\stagiaire\stagiaire($nom, $prenom, $email, $agance, $idFormation, $dateEntree, $dateSortie);
  $rep->setIdS($num);
  return $rep;
  }

  function update($objet) {
  // On utilise le prepared statemet qui simplifie les typages
  $sql = "UPDATE $this->table SET Nom = :nom, Prenom = :prenom, Email = :email, Agance = :agance, ID_Formation = :idFormation, Date_Entree = :dateEntree, Date_Sortie = :dateSortie  WHERE $this->key=:IdS";
  $stmt = Connexion::getInstance()->prepare($sql);
  $num = $objet->getIdS();
  $nom = $objet->getNoms();
  $prenom = $objet->getPrenomS();
  $email = $objet->getEmailS();
  $agance = $objet->getAganceS();
  $idFormation = $objet->getIdFormationS();
  $dateEntree = $objet->getDateEntreeS();
  $dateSortie = $objet->getDateSortieS();
  $stmt->bindParam(':IdS', $num);
  $stmt->bindParam(':nom', $nom);
  $stmt->bindParam(':prenom', $prenom);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':agance', $agance);
  $stmt->bindParam(':idFormation', $idFormation);
  $stmt->bindParam(':dateEntree', $dateEntree);
  $stmt->bindParam(':dateSortie', $dateSortie);
  $stmt->execute();
  }

  function delete($objet) {
  $sql = "DELETE FROM $this->table WHERE $this->key=:IdS";
  $stmt = Connexion::getInstance()->prepare($sql);
  $num = $objet->getIdS();
  $stmt->bindParam(':IdS', $num);
  $stmt->execute();
  }

  function create($objet) {
  $sql = "INSERT INTO $this->table (Nom,Prenom,Email,Agance,ID_Formation,Date_Entree,Date_Sortie)"
  . " VALUES (:nom, :prenom, :agance, :idFormation, ;dateEntree, :dateSortie)";
  $stmt = Connexion::getInstance()->prepare($sql);
  $nom = $objet->getNomS();
  $prenom = $objet->getPrenomS();
  $email = $objet->getEmail();
  $agance = $objet->getAganceS();
  $idFormation = $objet->getIdFormationS();
  $dateEntree = $objet->getDateEntreeS();
  $dateSortie = $objet->getDateSortieS();
  $stmt->bindParam(':nom', $nom);
  $stmt->bindParam(':prenom', $prenom);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':agance', $agance);
  $stmt->bindParam(':idFormation', $idFormation);
  $stmt->bindParam(':dateEntree', $dateEntree);
  $stmt->bindParam(':dateSortie', $dateSortie);
  $stmt->execute();
  $objet->setNumPil(parent::getLastKey());
  }
 */

function getStagiaires() {
    $resultat = array();

    try {
        $cnx = getInstance();
        $req = $cnx->prepare("SELECT * FROM stagiaire");
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
print_r(getStagiaires());

$test = getStagiaires();

echo 'test';
for ($i = 0; $i < count($test); $i++){
    foreach ($test[$i] as $value) {
        echo $value . "</br>";
    }
    echo "</br>";
}
    
?>






