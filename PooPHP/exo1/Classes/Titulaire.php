<?php 
Class Titulaire{

	private string $_nom;
	private string $_prenom;
	private DateTime $_datenaissance;
	private string $_ville;
	private array $_comptes;

	public function __construct(string $nom, string $prenom, string $datenaissance, string $ville){
		$this->_nom = $nom;
		$this->_prenom = $prenom;
		$this->_datenaissance = new DateTime($datenaissance);
		$this->_ville = $ville;
		$this->_comptes = [];
	}

	// Getter / Setter

	public function getNom(){
		return $this->_nom;
	}

	public function setNom(string $nom){
		$this->_nom = $nom;
	}

	public function getPrenom(){
		return $this->_prenom;
	}

	public function setPrenom(string $prenom){
		$this->_prenom = $prenom;
	}

	public function getDatenaissance(){
		return $this->_datenaissance;
	}

	public function setDatenaissance(DateTime $datenaissance){
		$this->_datenaissace = $datenaissance;
	}

	public function getVille(){
		return $this->_ville;
	}

	public function setVille(string $ville){
		$this->_ville = $ville;
	}

	public function getComptes(){
		return $this->_comptes;
	}

	public function setCompte(array $comptes){
		$this->_comptes = $comptes;
	}

	// Méthode pour ajouter un compte au titulaire

	public function ajouterCompte(Compte $compte1){
		array_push($this->_comptes, $compte1);
	}

	// toString

	public function __toString(){
		return "Titulaire: ".$this->getNom()." ".$this->getPrenom()."<br/>Date de naissance: ".$this->getDatenaissance()." à ".$this->getVille()."<br/> Comptes: ".$this->getComptes();
	}
}