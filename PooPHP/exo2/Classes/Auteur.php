<?php


Class Auteur{

	private string $_nom;
	private string $_prenom;
	private array $_livres;

	public function __construct(string $nom, string $prenom){
		$this->_nom = $nom;
		$this->_prenom = $prenom;
		$this->_livres = [];
	}

	// Getter / Setter 

	public function getNom(){
		return $this->_nom;
	}

	public function setNom(string $nom){
		$this->_nom = $nom;
	}

	public function getPrenom(){
		return $this->_prenom;
	}

	public function setPrenom(string $prenom){
		$this->_prenom = $prenom;
	}

	// Méthode qui permet d’afficher la bibliographie complète d’un auteur

	public function afficherBibliographie(){
		
	}

	// Méthode qui ajoute un livre au tableau de son auteur

	public function ajouterLivre(Livre $livre){
		array_push($this->_livres,$livre);
		// $this->_livres[] = $livre;
	}

	// toString

	public function __toString(){
		return $this->getPrenom()." ".$this->getNom();
	}
	
}