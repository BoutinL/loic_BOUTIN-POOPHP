<?php

Class Role{
	
	private string $_nomPersonnage;
	private array $_castings;

	public function __construct(string $nomPersonnage){
		$this->_nomPersonnage = $nomPersonnage;
		$this->_castings = [];
	}

	// Getter / Setter

	public function getNomPersonnage()
	{
		return $this->_nomPersonnage;
	}

	public function setNomPersonnage(string $nomPersonnage)
	{
		$this->_nomPersonnage = $nomPersonnage;
	}

	public function getCastings()
	{
		return $this->_castings;
	}

	public function setCastings($_castings)
	{
		$this->_castings = $_castings;
	}

	// Méthode qui ajoute un role à un casting

	public function ajouterRoleCasting(Casting $_casting){
		array_push($this->_castings, $_casting);
	}

	// Méthode qui affiche la liste des acteurs ayant joué un role précis

	public function listingActeurRole() 
	{

		echo "Les acteurs ayant incarné ".$this->getNomPersonnage()." sont:<br/>";
		foreach($this->_castings as $casting){
			echo $casting->getActeur()->getNom()." ".$casting->getActeur()->getPrenom()."<br/>";
		}
		echo"<br/><br/>";

	} 

	// ToString 

	// public function __toString(){
	// 	return $this->_nomPersonnage;
	// }

}