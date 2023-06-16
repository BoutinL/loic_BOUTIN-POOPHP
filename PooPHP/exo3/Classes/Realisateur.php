<?php

Class Realisateur{

	public string $_nom;
	public string $_prenom;
	public string $_sexe;
	public DateTime $_dateNaissance;
	public array $_films;

	public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance){

		$this->_nom = $nom;
		$this->_prenom = $prenom;
		$this->_sexe = $sexe;
		$this->_dateNaissance = new DateTime($dateNaissance);
		$this->_films = [];

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
		$this->_dateNaissance = $dateNaissane;
	}

	public function getFilms(){
		return $this->_films;
	}

	public function setFilms(array $films){
		$this->_films = $films;
	}

	// Méthode qui ajoute un film à son réalisateur

	public function ajouterFilm(Film $film){
		array_push($this->_films,$film);
	}

	// toString
	public function afficherFilmsRealisateur() : string
	{
		$result = "";
		foreach($this->_films as $film){
			$result .= $film ."<br/>";
		}
		return $result;
	}

	public function __toString(){
		return "Liste de films du Réalisateur: ".$this->getNom()." ".$this->getPrenom()."<br/>".$this->afficherFilmsRealisateur();
	}

} 