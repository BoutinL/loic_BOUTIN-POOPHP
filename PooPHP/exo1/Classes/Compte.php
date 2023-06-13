<?php

Class Compte{

	private string $_libele;
	private float $_soldeini;
	private string $_devise;
	private Titulaire $_titulaire;

	public function __construct(string $libele, float $soldeini, string $devise, Titulaire $titulaire){
		$this->_libele = $libele;
		$this->_soldeini = $soldeini;
		$this->_devise = $devise;
		$this->_titulaire = $titulaire;
		$this->_titulaire->ajouterCompte($this);
	}

	// Getter / Setter

	public function getLibele(){
		return $this->_libele;
	}

	public function setLibele(string $libele){
		$this->_libele = $libele;
	}

	public function getSoldeini(){
		return $this->_soldeini;
	}

	public function setSoldeini(float $soldeini){
		$this->_soldeini = $soldeini;
	}

	public function getDevise(){
		return $this->_devise;
	}

	public function setDevise(string $devise){
		$this->_devise = $devise;
	}

	public function getTitulaire(){
		return $this->_titulaire;
	}

	public function setTitulaire(array $titulaire){
		$this->_titulaire= $titulaire;
	}

	// Méthode pour créditer un compte

	public function crediterCompte(){
		
	}

	// toString

	// public function __toString(){

	// }

}