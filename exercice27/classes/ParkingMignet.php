<?php 
namespace App;

use App\Voiture;

class ParkingMignet extends Parking
{
    protected int $capaciteMax = 400;
    protected array $voitures = [];

    public function getVoitures(): array 
    {
        return $this->voitures;
    }

    public function nombreVoiture(): int
    {
        return count($this->voitures);
    }

    public function trouveVoiture(Voiture $voiture): int
    {
        return array_search($voiture, $this->voitures);
    }

    public function entrerVoitureScan(Voiture $voiture)
    {
        if ($this->nombreVoiture() < $this->capaciteMax) {
            $this->voitures[] = $voiture;
        } else {
            echo "Erreur: Le parking est plein.\n";
        }
    }

    public function sortirVoitureScan(Voiture $voiture)
    {
        $voitureId = array_search($voiture, $this->voitures);
        if ($voiture) {
            unset($this->voitures[$voitureId]);
            $this->voitures = array_values($this->voitures);
        } else {
            echo "Erreur : Aucune voiture à faire sortir.\n";
        }
    }
}