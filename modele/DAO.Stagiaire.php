<?php

include ("../metier/ppe-php.php");
include 'DAO.php';

namespace DAO\Stagiaire
{

    use DB\Connexion\Connexion;

    class StagiaireDAO extends \DAO\DAO
    {

        function __construct()
        {
            parent::__construct("IdS", "stagiaire");
            // echo "constructeur de DAO ", __NAMESPACE__,"<br/>";
        }

        public function read($id)
        {
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

        public function update($objet)
        {
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

        public function delete($objet)
        {
            $sql = "DELETE FROM $this->table WHERE $this->key=:IdS";
            $stmt = Connexion::getInstance()->prepare($sql);
            $num = $objet->getIdS();
            $stmt->bindParam(':IdS', $num);
            $stmt->execute();
        }

        public function create($objet)
        {
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

        static function getStgiaires()
        {
            $sql = "SELECT * FROM stagiaire;";
            $rep = "<table class=\"table table-striped\">";
            $rows = Connexion::getInstance()->query($sql);
            foreach ($rows as $row) {
                $rep .= "<tr><td>" . $row["IdS"];
                $rep .= "</td><td>" . $row["Nom"];
                $rep .= "</td><td>" . $row["Prenom"];
                $rep .= "</td><td>" . $row["Email"];
                $rep .= "</td><td>" . $row["Agance"];
                $rep .= "</td><td>" . $row["ID_Formation"];
                $rep .= "</td><td>" . $row["Date_Entree"];
                $rep .= "</td><td>" . $row["Date_Sortie"]. "</td></tr>";
            }
            return $rep . "</table>";
        }
    }
}

