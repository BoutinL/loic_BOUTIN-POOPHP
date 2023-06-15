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
	
}