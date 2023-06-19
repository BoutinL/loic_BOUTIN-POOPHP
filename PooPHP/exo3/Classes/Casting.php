<?php
Class Casting{

    private Film $_film;
    private Acteur $_acteur;
    private Role $_role;

    public function __construct(Film $film, Acteur $acteur, Role $role){
        $this->_film = $film;
        $this->_acteur = $acteur;
        $this->_role = $role;
        $this->_castings->ajouterFilmCasting($this);
        $this->_casting->ajouterRoleCasting($this);
        $this->_casting->ajouterActeurCasting($this);
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

}