<?php

Class Role{
	
	private string $_nomPersonnage;
	private Acteur $_acteur;

	public function __construct(string $nomPersonnage){
		$this->_nomPersonnage = $nomPersonnage;
		$this->_acteur = $acteur;
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

	public function setActeur(string $nomActeur){
		$this->_acteur = $acteur;
	}

	// toString
	
}