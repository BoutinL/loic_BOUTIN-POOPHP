<?php
Class Acteur extends Personne{

	private array $_roles;
	
	public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance){

		parent::__construct($nom, $prenom, $sexe, $dateNaissance);
		$this->_nom = $nom;
		$this->_prenom = $prenom;
		$this->_sexe = $sexe;
		$this->_dateNaissance = new DateTime($dateNaissance);
		$this->_roles = [];

	}

	// Getter / Setter

	public function getRoles()
	{
		return $this->_roles;
	}

	public function setRoles(array $roles)
	{
		$this->_roles = $roles;
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