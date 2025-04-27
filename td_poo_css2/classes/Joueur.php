<?php 

class Joueur {
    public $nom;
    public $points;
    public $pointsDeVie;
    public $headshots;
    public $estVivant;

    public function __construct($nom) {
        $this->nom = $nom;
        $this->points = 0;
        $this->pointsDeVie = 100;
        $this->headshots = 0;
        $this->estVivant = true;
    }

    public function marquerPoint() {
        $this->points++;
    }

    public function faireHeadshot() {
        $this->headshots++;
        $this->marquerPoint();
    }

    public function subirDegats($degats) {
        $this->pointsDeVie -= $degats;
        if ($this->pointsDeVie <= 0) {
            $this->tuer();
        }
    }

    public function tuer() {
        $this->estVivant = false;
        $this->pointsDeVie = 0;
    }

    public function estVivant() {
        return $this->estVivant;
    }

    public function afficherStatistiques() {
        echo "Nom: {$this->nom}, Points: {$this->points}, Points de vie: {$this->pointsDeVie}, Headshots: {$this->headshots}, Vivant: " . ($this->estVivant ? 'Oui' : 'Non') . "\n";
    }
}
