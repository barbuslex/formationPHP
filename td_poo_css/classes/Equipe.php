<?php 

class Equipe {
    public $nom;
    public $joueurs;

    public function __construct($nom) {
        $this->nom = $nom;
        $this->joueurs = [];
    }

    public function ajouterJoueur(Joueur $joueur) {
        $this->joueurs[] = $joueur;
    }

    public function afficherStatistiquesEquipe() {
        echo "Statistiques de l'équipe {$this->nom}:\n";
        foreach ($this->joueurs as $joueur) {
            $joueur->afficherStatistiques();
        }
    }

    public function totalPoints() {
        $total = 0;
        foreach ($this->joueurs as $joueur) {
            $total += $joueur->points;
        }
        return $total;
    }
}
