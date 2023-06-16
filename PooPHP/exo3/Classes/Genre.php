<?php

Class Genre{

	public string $_type;
	public array $_films;

	public function __construct(string $type){

		$this->_type = $type;
		$this->_films = [];

	}

	// Getter / Setter

	public function getType(){
		return $this->_type;
	}

	public function setType(string $type){
		$this->_type = $type;
	}

	public function getFilms(){
		return $this->_films;
	}

	public function setFilms(array $films){
		$this->_films = $films;
	}

	// Méthode qui ajoute un film à son genre

	public function ajouterFilm(Film $film){
		array_push($this->_films,$film);
	}

	// Méthode pour afficher tout les films d'un même genre

	public function afficherFilmsGenre(){
		foreach($this->_films as $film){
			echo $film;
		}
	}
	
}