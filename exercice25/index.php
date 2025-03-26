<?php 
require('classes/ParkingPasteur.php');
require('classes/ParkingMejanes.php');

// Test du programme
$parkingPasteur = new ParkingPasteur();

// Remplir le parking
for ($i = 0; $i < 360; $i++) {
    $parkingPasteur->entrerVoiture();
    echo "[PASTEUR] Nombre de voitures : " . $parkingPasteur->getNombreVoitures() . "\n";
}

// Test du programme
$parkingMejanes = new ParkingMejanes();

// Remplir le parking
for ($i = 0; $i < 500; $i++) {
    $parkingMejanes->entrerVoiture();
    echo "[MEJANES] Nombre de voitures : " . $parkingMejanes->getNombreVoitures() . "\n";
}

$parkingMejanes->entrerVoiture(true);
echo "[MEJANES] Nombre de voitures : " . $parkingMejanes->getNombreVoitures() . "\n";
