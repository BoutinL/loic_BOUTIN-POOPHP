<?php 

Class Personne{

	private string $_nom;
	private string $_prenom;
	private string $_sexe;
	private DateTime $_dateNaissance;

	public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance){

		$this->_nom = $nom;
		$this->_prenom = $prenom;
		$this->_sexe = $sexe;
		$this->_dateNaissance = new DateTime($dateNaissance);

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

	public function getSexe(){
		return $this->_sexe;
	}

	public function setSexe(string $sexe){
		$this->_sexe = $sexe;
	}

	public function getDateNaissance(){
		return $this->_dateNaissance;
	}

	public function setDateNaissance(string $dateNaissance){
		$this->_dateNaissance = $dateNaissance;
	}
	
}