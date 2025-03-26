<?php 
class Parking 
{
    private $nombreVoitures;
    private $capaciteMax;

    public function __construct($capaciteMax = 100) {
        $this->nombreVoitures = 0;
        $this->capaciteMax = $capaciteMax;
    }

    public function entrerVoiture() {
        if ($this->nombreVoitures < $this->capaciteMax) {
            $this->nombreVoitures++;
        } else {
            echo "Erreur : Le parking est plein.\n";
        }
    }

    public function sortirVoiture() {
        if ($this->nombreVoitures > 0) {
            $this->nombreVoitures--;
        } else {
            echo "Erreur : Aucune voiture à faire sortir.\n";
        }
    }

    public function getNombreVoitures() {
        return $this->nombreVoitures;
    }

    public function getCapaciteMax() {
        return $this->capaciteMax;
    }
}
