<?php
require_once 'Autoloader.php';

use App\Autoloader;
use App\Models\AnnoncesModel;


Autoloader::register();

$annoncesModel = new AnnoncesModel();
$annonces = $annoncesModel->findAll();
var_dump($annonces);

$annonces = $annoncesModel->findBy(['actif' => 1]);
var_dump($annonces);

$annonce = $annoncesModel
    ->setTitre('Titre de l\'annonce')
    ->setDescription('Description de l\'annonce');
$annoncesModel->create($annonce);

$annonces = $annoncesModel->findAll();
var_dump($annonces);

$donnees = [
    'titre' => 'Mon autre titre',
    'description' => 'Ma nouvelle description',
];
$annonce = $annoncesModel->hydrate($donnees);

$annonces = $annoncesModel->findAll();
var_dump($annonces);
