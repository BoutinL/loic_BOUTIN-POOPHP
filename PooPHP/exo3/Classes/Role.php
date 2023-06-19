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

	// Méthode qui ajoute un casting à un role

	public function ajouterRoleCasting(Role $role){
		array_push($this->_castings, $role);
	}

	// toString

}