<?php
Class Film{

	private string $_titre;
	private DateTime $_dateSortie;
	private int $_dureeMinutes;
	private string $_resume;
	private Realisateur $_realisateur;
	private Genre $_genre;
	private Casting $_casting;

	public function __construct(string $titre, string $dateSortie, int $dureeMinutes, string $resume, Realisateur $realisateur, Genre $genre){

		$this->_titre = $titre;
		$this->_dateSortie = new DateTime($dateSortie);
		$this->_dureeMinutes = $dureeMinutes;
		$this->_resume = $resume;
		$this->_realisateur = $realisateur;
		$this->_genre = $genre;
		$this->_realisateur->ajouterFilm($this);
		$this->_genre->ajouterFilm($this);
		$this->_casting->ajouterFilmCasting($this);
	}

	// Getter / Setter

	public function getTitre(){
		return $this->_titre;
	}

	public function setTitre($titre){
		$this->_titre = $titre;
	}

	public function getDateSortie(){
		return $this->_dateSortie;
	}

	public function setDateSortie($dateSortie){
		$this->_dateSortie = $dateSortie;
	}

	public function getDureeMinutes(){
		return $this->_dureeMinutes;
	}

	public function setDureeMinutes($dureeMinutes){
		$this->_dureeMinutes = $dureeMinutes;
	}

	public function getResume(){
		return $this->_resume;
	}

	public function setResume($resume){
		$this->_resume = $resume;
	}

	public function getRealisateur(){
		return $this->_realisateur;
	}

	public function setRealisateur($realisateur){
		$this->_realisateur = $realisateur;
	}

	public function getGenre(){
		return $this->_genre;
	}

	public function setGenre($genre){
		$this->_genre = $genre;
	}

	// ToString 

	public function __toString(){
		return $this->_titre." (".$this->getDateSortie()->format("Y").")";
	}
}