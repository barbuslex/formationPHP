<?php 
require('classes/Joueur.php');
require('classes/Equipe.php');

// Exemple d'utilisation
$terroristes = new Equipe("Terroristes");
$contreTerroristes = new Equipe("Contre-Terroristes");

$joueur1 = new Joueur("Alice");
$joueur2 = new Joueur("Bob");
$joueur3 = new Joueur("Charlie");
$joueur4 = new Joueur("David");

$terroristes->ajouterJoueur($joueur1);
$terroristes->ajouterJoueur($joueur2);
$contreTerroristes->ajouterJoueur($joueur3);
$contreTerroristes->ajouterJoueur($joueur4);

$joueur1->marquerPoint();
$joueur3->marquerPoint();
$joueur3->marquerPoint();
$joueur2->tuer();

$terroristes->afficherStatistiquesEquipe();
$contreTerroristes->afficherStatistiquesEquipe();

echo "Total points Terroristes: " . $terroristes->totalPoints() . "\n";
echo "Total points Contre-Terroristes: " . $contreTerroristes->totalPoints() . "\n";