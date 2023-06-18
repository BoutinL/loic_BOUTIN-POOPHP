<?php

Class Role{
	
	private string $_nomPersonnage;
	private Acteur $_acteur;
	private Casting $_casting;

	public function __construct(string $nomPersonnage, Acteur $acteur){
		$this->_nomPersonnage = $nomPersonnage;
		$this->_acteur = $acteur;
		$this->_casting->ajouterRoleCasting($this);
	}

	// Getter / Setter

	public function getNomPersonnage(){
		return $this->_nomPersonnage;
	}

	public function setNomPersonnage(string $nomPersonnage){
		$this->_nomPersonnage = $nomPersonnage;
	}

	public function getActeur(){
		return $this->_acteur;
	}

	public function setActeur(string $acteur){
		$this->_acteur = $acteur;
	}

	// toString

}