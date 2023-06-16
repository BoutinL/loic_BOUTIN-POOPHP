<?php
Class Acteur extends Personne{

	private array $_roles;
	
	public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance){

		parent::__construct($nom, $prenom, $sexe, $dateNaissance);
		$this->_roles = [];

	}

	// Getter / Setter

	public function getRoles()
	{
		return $this->_roles;
	}

	public function setRoles(array $roles)
	{
		$this->_roles = $roles;
	}
}