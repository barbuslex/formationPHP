<?php 
include('classes/Personne.php');

$Alex = new Personne('Alex', 15, true);
$Alex->setNotes([
    'Francais' => 12.5,
    'Math' => 8.0,
    'HistoireGeo' => 14
]);
$Alex->afficherStatutRedoublant();


$John = new Personne('John', 18, true);
$John->setNotes([
    'Francais' => 4,
    'Math' => 13,
    'HistoireGeo' => 10
]);
$John->afficherStatutRedoublant();

$Mike = new Personne('Mike', 32, false);
$Mike->setNotes([
    'Francais' => 10,
    'Math' => 7,
    'HistoireGeo' => 18
]);
$Mike->afficherStatutRedoublant();
