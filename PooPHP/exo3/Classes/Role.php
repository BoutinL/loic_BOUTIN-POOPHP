<?php

Class Role{
	
	public string $_nomPersonnage;

	public function __construct(string $nomPersonnage){
		$this->_nomPersonnage = $nomPersonnage;
	}

	// Getter / Setter

	public function getNomPersonnage(){
		return $this->_nomPersonnage;
	}

	public function setNomPersonnage(string $nomPersonnage){
		$this->_nomPersonnage = $nomPersonnage;
	}
	
}