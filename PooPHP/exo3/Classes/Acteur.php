<?php
Class Acteur extends Personne{

	private array $_castings;
	
	public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance){

		parent::__construct($nom, $prenom, $sexe, $dateNaissance);
		$this->_castings = [];

	}

	// Getter / Setter

	public function getCastings()
	{
		return $this->_castings;
	}

	public function setCastings($_castings)
	{
		$this->_castings = $_castings;
	}

	// Méthode qui ajoute un casting à un acteur

	public function ajouterActeurCasting(Acteur $acteur){
		array_push($this->_castings, $acteur);
	}

}