<?php 
Class Titulaire{

	private string $_nom;
	private string $_prenom;
	private DateTime $_datenaissance;
	private string $_ville;
	private Compte $_compte;

	public function __construct(string $nom, string $prenom, string $datenaissance, string $ville){
		$this->_nom = $nom;
		$this->_prenom = $prenom;
		$this->_datenaissance = new DateTime($datenaissance);
		$this->_ville = $ville;
		$this->_compte = [];
		$this->_compte->ajouterCompte($this);
	}

	// Getter / Setter

	public function getNom(){
		return $this->_nom;
	}

	public function setNom(string $nom){
		$this->_nom = $nom;
	}

	public function getPrenom(string $prenom){
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

	public function getCompte(){
		return $this->_compte;
	}

	public function setCompte(Compte $compte){
		$this->_compte = $compte;
	}

	// Méthode pour ajouter un comtpe au titulaire

	public function ajouterCompte(Compte $compte){
		array_push($this->_compte,$compte);
	}

	// toString

	public function __toString(){

	}
}