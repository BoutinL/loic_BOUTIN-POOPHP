<h1>Exercice 1</h1>
<p>
	Un compte bancaire est composé des éléments suivants :Un libellé (compte courant, livret A, ...)Un solde initialUne devise monétaireUn titulaire uniqueUn titulaire comporte :UnnomUn prénomUne date de naissanceUne villeL'ensemble de ses comptes bancaires.Sur un compte bancaire, on doit pouvoir :Créditer le compte de X eurosDébiter le compte de X eurosEffectuer un virement d'un compte à l'autre.On doit pouvoir :Affichertoutes  les  informations  d'un(e)  titulaire  (dont  l'âge)  et  l'ensemble  des  comptes appartenant à celui(celle)-ci.Afficher  toutes  les  informations  d'un  compte  bancaire,  notamment  le  nom  /  prénom  du titulaire du compte.
</p>
<h2>Résultat</h2>
<?php
spl_autoload_register(function ($class_name) {
    include 'Classes/'. $class_name . '.php';
});

$titulaire1 = new Titulaire("King", "Stephen", "21-09-1947","Portland");

$compte1 = new Compte("compte courant", 200, "$", $titulaire1);
$compte2 = new Compte("livret A", 100, "$", $titulaire1);

var_dump($titulaire1);