<?php
Class Casting{

    private Film $_film;
    private Acteur $_acteur;
    private Role $_role;
    private array $_casting;

    public function __construct(Film $film, Acteur $acteur, Role $role){
        $this->_film = $film;
        $this->_acteur = $acteur;
        $this->_role = $role;
        $this->_casting = [];
    }

    // Getter / Setter

    public function getFilm(){
        return $this->_film;
    }

    public function SetFilm($film){
        $this->_film = $film;
    }

    public function getActeur(){
        return $this->_acteur;
    }

    public function SetActeur($acteur){
        $this->_acteur = $acteur;
    }

    public function getRole(){
        return $this->_role;
    }

    public function SetRole($role){
        $this->_role = $role;
    }

    // Méthode qui ajoute un film à un casting

	public function ajouterFilmCasting(Film $film){
		array_push($this->_casting, $film);
	}

    // Méthode qui ajoute un role à un casting

	public function ajouterRoleCasting(Role $role){
		array_push($this->_casting, $role);
	}

    // Méthode qui ajoute un acteur à un casting

	public function ajouterActeurCasting(Acteur $acteur){
		array_push($this->_casting, $acteur);
	}


}