<?php 
namespace App;

abstract class Parking 
{
    protected int $nombreVoitures = 0;
    protected int $capaciteMax = 100;
    protected int $placesReservees = 0;

    public function entrerVoiture($estAbonne = false) {
        if ($estAbonne && $this->nombreVoitures < $this->capaciteMax) {
            $this->nombreVoitures++;
        } elseif (!$estAbonne && $this->nombreVoitures < ($this->capaciteMax - $this->placesReservees)) {
            $this->nombreVoitures++;
        } elseif($this->nombreVoitures === $this->capaciteMax) {
            echo "Erreur: Le parking est plein.\n";
        } else {
            echo "Erreur : Le parking est plein pour les non-abonnés.\n";
        }
    }

    public function sortirVoiture() {
        if ($this->nombreVoitures > 0) {
            $this->nombreVoitures--;
        } else {
            echo "Erreur : Aucune voiture à faire sortir.\n";
        }
    }

    public function getNombreVoitures(): int {
        return $this->nombreVoitures;
    }

    public function getCapaciteMax(): int {
        return $this->capaciteMax;
    }
}
