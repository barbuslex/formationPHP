<?php 
require('classes/Parking.php');

// Test du programme
$monParking = new Parking();

// Remplir le parking
for ($i = 0; $i < 101; $i++) {
    $monParking->entrerVoiture();
}

echo "Nombre de voitures : " . $monParking->getNombreVoitures() . "\n"; // Devrait afficher 100

$monParking->sortirVoiture();
echo "Nombre de voitures : " . $monParking->getNombreVoitures() . "\n"; // Devrait afficher 99

$monParking->sortirVoiture();
echo "Nombre de voitures : " . $monParking->getNombreVoitures() . "\n"; // Devrait afficher 98
