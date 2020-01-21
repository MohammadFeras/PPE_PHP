<?php
namespace ppe_php\admin {

	class admin {
		private $idA = -1;
		private $nom = null;
		private $prenom = null;
		private $email = null;
		private $agance = null;
                
		function __construct($nom,$prenom,$email ,$agance) {
			$this->nom = $nom;
			$this->prenom = $prenom;
			$this->email = $email;
                        $this->agance=$agance;
			// echo "constructeur de Pilote ", __NAMESPACE__,"<br/>";
		}
		
		public function getIdA() {
			return $this->idA;
		}
		public function setIdA($idA) {
			$this->idA = $idA;
			return $this;
		}
		
		public function getNomA() {
			return $this->nom;
		}
		public function setNomA($nom) {
			$this->nom = $nom;
			return $this;
		}
		
		public function getPrenomA() {
			return $this->prenom;
		}
                public function setPrenomA($prenom) {
			$this->prenom = $prenom;
			return $this;
		}
		public function getEmailA() {
			return $this->email;
		}
                public function setEmailA($email) {
			$this->email = $email;
			return $this;
		}
                
		public function getAganceA() {
			return $this->agance;
		}
                public function setAganceA($agance) {
			$this->agance = $agance;
			return $this;
		}
		
		/*function __toString() {
			$rep = "<div class=\"pilote\">$this->numPil $this->nomPil $this->adr $this->sal</div>";
			return $rep;
		}*/

	
	
	}
}

namespace ppe_php\formateur {

	class formateur {
		private $idF = -1;
		private $nom = null;
		private $prenom = null;
		private $email = null;
                private $agance = null;



		function __construct($nom,$prenom,$email , $agance) {
			$this->nom = $nom;
			$this->prenom = $prenom;
			$this->email = $email;
                        $this->agance = $agance;
                        
			// echo "constructeur d Avion ", __NAMESPACE__,"<br/>";
		}

		public function getIdF() {
			return $this->idF;
		}
		public function setIdF($idF) {
		    $this->idF = $idF;
		    return $this;
		}
		public function getNomF() {
			return $this->nom;
		}
                public function setNomF($nom) {
		    $this->nom = $nom;
		    return $this;
		}
		public function getPrenomF() {
			return $this->prenom;
		}
                public function setPrenomF($prenom) {
		    $this->prenom = $prenom;
		    return $this;
		}
		public function getEmailF() {
			return $this->email;
		}
                public function setEmailF($email) {
		    $this->email = $email;
		    return $this;
		}

		/*function __toString() {
		    $rep = "<div class=\"avion\">numAv : $this->numAv nom : $this->nomAv, situé à $this->loc pour $this->capacite passagers</div>";
			return $rep;
		}*/
	}
}

namespace ppe_php\stagiaire {

	class stagiaire {
		private $idS = -1;
		private $nom;
		private $prenom;
		private $email;
		private $agance;
		private $id_formation;
		private $date_entree;
                private $date_sortie;
		


		function __construct($nom,$prenom,$email,$agance,$id_formation,$date_entree , $date_sortie) {
			$this->nom = $nom;
			$this->prenom = $prenom;
			$this->email=$email;
			$this->agance=$agance;
			$this->id_formation=$id_formation;
			$this->date_entree=$date_entree;
                        $this->date_sortie=$date_sortie;
			// echo "constructeur de Vol ", __NAMESPACE__,"<br/>";
		}

		public function geIdS() {
			return $this->idS;
		}
		public function getNomS() {
			return $this->nom;
		}
		public function getPrenomS() {
			return $this->prenom;
		}
		public function getEmailS() {
			return $this->email;
		}
		public function getIdFormationS() {
			return $this->id_formation;
		}
		public function getDateEntreeS() {
			return $this->date_entree;
		}
		public function getDateSortieS() {
			return $this->date_sortie;
		}
		
		public function setIdS($idS) {
			$this->idS = $idS;
			return $this;
		}

		public function setNomS($nom) {
			$this->nom = $nom;
			return $this;
		}
                public function setPrenomS($prenom) {
			$this->prenom = $prenom;
			return $this;
		}
                public function setEmailS($email) {
			$this->email = $email;
			return $this;
		}
                public function setAganceS($agance) {
			$this->agance = $agance;
			return $this;
		}
                public function setIdFormationS($id_formation) {
			$this->id_formation = $id_formation;
			return $this;
		}
                public function setDateEntreeS($date_entree) {
			$this->date_entree = $date_entree;
			return $this;
		}
                public function setDateSortieS($date_sortie) {
			$this->date_sortie = $date_sortie;
			return $this;
		}
		/*function __toString() {
			$rep = "<div class=\"infosVol\">vol numéro $this->numVol</div>$this->pilote $this->avion <div class=\"infosVol\">de $this->villeDep vers $this->villeArr départ $this->dateDep arrivée $this->dateArr</div>";
			//$rep = "<img  width=" . Carte::largeur . " height=" . Carte::hauteur . " " . $src . " alt=\"image\" value=\"$this->position\" />";
			return $rep;
		}*/
		
	
	
	}
        
}
class formation {
		private $id = -1;
		private $agance = null;
		private $nomFormation = null;
		private $promo = null;
                
		function __construct($agance,$nomFormation,$promo) {
			$this->agance = $agance;
			$this->nomFormation = $nomFormation;
			$this->promo = $promo;
			// echo "constructeur de Pilote ", __NAMESPACE__,"<br/>";
		}
		
		public function getIdFormation() {
			return $this->id;
		}
		public function setIdFormation($id) {
			$this->id = $id;
			return $this;
		}
		
		public function getAganceFormation() {
			return $this->agance;
		}
		public function setAganceFormation($agance) {
			$this->agance = $agance;
			return $this;
		}
		
		public function getNomFormation() {
			return $this->nomFormation;
		}
                public function setNomFormation($nomFormation) {
			$this->nomFormation = $nomFormation;
			return $this;
		}
		public function getPromo() {
			return $this->promo;
		}
                public function setPromo($promo) {
			$this->promo = $promo;
			return $this;
		}
               
		
		/*function __toString() {
			$rep = "<div class=\"pilote\">$this->numPil $this->nomPil $this->adr $this->sal</div>";
			return $rep;
		}*/

	
	
	}
        class acces {
		private $id = -1;
		private $email = null;
		private $mdb = null;
		private $gds = null;
                
		function __construct($email,$mdb,$gds) {
			$this->email = $email;
			$this->mdb = $mdb;
			$this->gds = $gds;
			// echo "constructeur de Pilote ", __NAMESPACE__,"<br/>";
		}
		
		public function getIdAcces() {
			return $this->id;
		}
		public function setIdAcces($id) {
			$this->id = $id;
			return $this;
		}
		
		public function getEmailAcces() {
			return $this->email;
		}
		public function setEmailAcces($email) {
			$this->email = $email;
			return $this;
		}
		
		public function getMotDePass() {
			return $this->mdb;
		}
                public function setMotDePass($mdb) {
			$this->mdb = $mdb;
			return $this;
		}
		public function getGrainDeSel() {
			return $this->gds;
		}
                public function setGrainDeSel($gds) {
			$this->gds = $gds;
			return $this;
		}
               
		
		/*function __toString() {
			$rep = "<div class=\"pilote\">$this->numPil $this->nomPil $this->adr $this->sal</div>";
			return $rep;
		}*/

	
	
	}

?>
