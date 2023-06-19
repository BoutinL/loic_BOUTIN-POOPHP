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

	// Méthode qui ajoute un acteur à un casting

	public function ajouterActeurCasting(Casting $_casting){
		array_push($this->_castings, $_casting);
	}

	// Méthode qui affiche la liste de films d'un acteur (Faire un foreach pour afficher les films)

	public function listingFilms() 
	{
		echo "Liste des films dans lesquels ".$this->getNom()." ".$this->getPrenom()." joue :<br/>";
		foreach($this->_castings as $casting){
			echo $casting->getFilm()->getTitre()."<br/>";
		}
		echo"<br/><br/>";

	} 

	// toString
	
	// public function __toString(){
	// 	return $this->_nom." ".$this->_prenom." ".$this->_sexe." ".$this->_dateNaissance->format("d-m-Y");
	// }

}