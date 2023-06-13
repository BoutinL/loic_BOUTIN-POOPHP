<?php

 
Class Livre{

	private string $_titre;
	private int $_page;
	private int $_parution;
	private float $_prix;
	private Auteur $_auteur;

	public function __construct(string $titre, int $page, int $parution, float $prix, Auteur $auteur){
		$this->_titre = $titre;
		$this->_page = $page;
		$this->_parution = $parution;
		$this->_prix = $prix;
		$this->_auteur = $auteur;
		$this->_auteur->ajouterLivre($this);
	}

	// Getter / Setter

	public function getTitre(){
		return $this->_titre;
	}

	public function setTitre(string $titre){
		$this->_titre = $titre;
	}

	public function getPage(){
		return $this->_page;
	}

	public function setPage(int $page){
		$this->_page = $page;
	}

	public function getParution(){
		return $this->_parution;
	}

	public function setParution(int $parution){
		$this->_parution = $parution;
	}

	public function getPrix(){
		return $this->_prix;
	}

	public function setPrix(float $prix){
		$this->_prix = $prix;
	}

	public function getAuteur(){
		return $this->_auteur;
	}

	public function setAuteur(Auteur $auteur){
		$this->_auteur= $auteur;
	}

	// toString

	public function __toString(){
		return $this->getTitre()." (".$this->getParution().") : ".$this->getPage()." pages / ".$this->getPrix()." €<br/>";
	}
	
}