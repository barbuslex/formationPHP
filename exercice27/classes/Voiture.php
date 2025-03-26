<?php 
namespace App;

class Voiture 
{
    protected string $marque;
    protected string $modele;
    protected string $immatriculation;

    public function __construct(string $marque, string $modele, string $immatriculation)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->immatriculation = $immatriculation;
    }

    public function getMarque(): string
    {
        return $this->marque;
    }

    public function getModele(): string
    {
        return $this->modele;
    }

    public function getImmatriculation(): string
    {
        return $this->immatriculation;
    }
}
