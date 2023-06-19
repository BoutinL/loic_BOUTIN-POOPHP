<h1>Exercice 3 / Films</h1>
<?php 
spl_autoload_register(function ($class_name) {
    include 'Classes/'. $class_name . '.php';
});

// Genres

$genre0 = new Genre("0");
$genre1 = new Genre("Science Fiction");
$genre2 = new Genre("Action");

// Realisateurs

$realisateur0 = new Realisateur("test", "test", "test", "00-00-0000");
$realisateur1 = new Realisateur("Abrams", "Jeffrey Jacob", "Homme", "27-06-1966");
$realisateur2 = new Realisateur("Ridley", "Scott", "Homme", "30-11-1937");
$realisateur3 = new Realisateur("Nolan ", "Christopher", "Homme", "30-07-1970");
$realisateur4 = new Realisateur("James ", "Wan", "Homme", "26-02-1977");
$realisateur5 = new Realisateur("Zack ", "Snyder", "Homme", "01-03-1966");

// Acteur

$acteur0 = new Acteur("test","test","test","00-00-0000",);
$acteur1 = new Acteur("Ridley","Daisy", "Femme", "10-04-1992");
$acteur2 = new Acteur("Boyega","John", "Homme", "17-03-1992");
$acteur3 = new Acteur("Driver","Adam", "Homme", "19-11-1983");

// Role
$role0 = new Role("0");
$role1 = new Role("Rey");
$role2 = new Role("Finn");
$role3 = new Role("Kylo Ren");

// Films

$film0 = new Film("test", "00-00-0000", 0, "teeest", $realisateur0, $genre0);
$film1 = new Film("Star Wars", "19-10-1977", 121, "La guerre civile fait rage entre l'Empire galactique et l'Alliance rebelle. Capturée par les troupes de choc de l'Empereur menées par le sombre et impitoyable Dark Vador, la princesse Leia Organa dissimule les plans de l'Etoile Noire.", $realisateur1, $genre1);

$film2 = new Film("Blade Runner", "15-09-1982", 117, "En l'an 2019, un ex-policier devenu détective privé, Rick Deckard, est rappelé en service pour faire la chasse à des robots d'apparence humaine appelés 'replicants.'", $realisateur2, $genre1);

$film3 = new Film("Interstellar", "05-11-2014", 121, "Dans un proche futur, la Terre est devenue hostile pour l'homme. Les tempêtes de sable sont fréquentes et il n'y a plus que le maïs qui peut être cultivé, en raison d'un sol trop aride. Cooper est un pilote, recyclé en agriculteur, qui vit avec son fils et sa fille dans la ferme familiale. Lorsqu'une force qu'il ne peut expliquer lui indique les coordonnées d'une division secrète de la NASA, il est alors embarqué dans une expédition pour sauver l'humanité.",$realisateur3, $genre1);

$film4 = new Film("Fast & Furious 7", "01-04-2015", 140, "Cette fois la menace prend les traits d'un tueur à gages des opérations spéciales britanniques aussi insaisissable qu'impitoyable, qui n'a d'obsession que la vengeance. Commençant par éliminer Han sans autre forme de procès à Tokyo, puis s'attaquant à Hobbs à Los Angeles, Deckard Shaw ne s'arrêtera que lorsqu'il aura liquidé l'ensemble de l'équipe qui a fait tomber son frère, Owen Shaw, lors de leur dernière mission.",$realisateur4, $genre2);

$film5 = new Film("Sucker Punch", "01-02-2014", 110, "Suite à la mort de sa mère, une jeune fille surnommée Baby Doll est enfermée dans un hôpital psychiatrique où son beau-père prévoit la faire lobotomiser. S'inventant un monde imaginaire, elle élabore un plan afin de s'évader avec d'autres filles, qui travaillent comme escortes pour un patron violent dans un cabaret fantasmé. Dans ce monde imaginaire, Baby Doll affronte des créatures surnaturelles afin d'obtenir cinq objets qui lui permettront de s'échapper.",$realisateur5, $genre2);

$film6 = new Film("300", "21-03-2007", 110, "En 485 avant notre ère, Xerxès succède à Darius Ier sur le trône de l'empire perse. Rapidement, les grandes cités grecques comprennent qu'une nouvelle guerre s'annonce. Athènes, Thèbes, Corinthe et Délos se rallient à Sparte qui dispose de la meilleure armée. En 480, le roi spartiate Léonidas est nommé commandant en chef de cette union militaire de la dernière chance. Lorsque la flotte perse rallie les fantassins de Xerxès, les troupes grecques prennent peur.
",$realisateur5, $genre2);

// Casting

$casting1 = new casting($film1, $acteur1, $role1);
$casting2 = new casting($film1, $acteur2, $role2);
$casting3 = new casting($film1, $acteur3, $role3);

// casting test
$casting4 = new casting($film0, $acteur0, $role0);
$casting5 = new casting($film1, $acteur0, $role1);

// Réponses

echo $genre1."<br/><br/>";

echo $realisateur5."<br/><br/>";

// echo $role1;

// echo $acteur1;

$acteur1->listingFilms();

$film1->listingRole();

$role1->listingActeurRole();