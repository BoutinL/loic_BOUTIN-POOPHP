<?php
Class Realisateur extends Personne{

	private array $_films;

	public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance){

		parent::__construct($nom, $prenom, $sexe, $dateNaissance);
		$this->_films = [];

	}

	// Getter / Setter

	public function getFilms()
	{
		return $this->_films;
	}

	public function setFilms(array $films)
	{
		$this->_films = $films;
	}

	

	// Méthode qui ajoute un film à son réalisateur

	public function ajouterFilm(Film $film){
		array_push($this->_films, $film);
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