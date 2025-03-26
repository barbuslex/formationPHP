<?php
require_once('classes/Autoloader.php');

use App\Autoloader;
use App\ParkingMignet;
use App\Voiture;

Autoloader::register();

$voiture1 = new Voiture('FIAT', '500', 'AB-123-CD');
$voiture2 = new Voiture('SEAT', 'Arona', 'AE-874-ED');
$voiture3 = new Voiture('RENAULT', 'Kadjar', 'YG-872-DC');

$parkingMignet = new ParkingMignet();

$parkingMignet->entrerVoitureScan($voiture1);
$parkingMignet->entrerVoitureScan($voiture2);
$parkingMignet->entrerVoitureScan($voiture3);

$voituresDansLeParking = $parkingMignet->getVoitures();
echo "[MIGNET] Il y a ".$parkingMignet->nombreVoiture()." voitures dans le parking.\n";

$parkingMignet->sortirVoitureScan($voiture3);
echo "[MIGNET] Il y a ".$parkingMignet->nombreVoiture()." voitures dans le parking.\n";

//var_dump($voituresDansLeParking);
