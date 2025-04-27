<?php 
class Joueur {
    public $nom;
    public $points;
    public $estVivant;

    public function __construct($nom) {
        $this->nom = $nom;
        $this->points = 0;
        $this->estVivant = true;
    }

    public function marquerPoint() {
        $this->points++;
    }

    public function tuer() {
        $this->estVivant = false;
    }

    public function afficherStatistiques() {
        echo "Nom: {$this->nom}, Points: {$this->points}, Vivant: " . ($this->estVivant ? 'Oui' : 'Non') . "\n";
    }
}
