<?php 
class Personne
{
    private string $prenom;
    private int $age;
    private bool $isEtudiant;

    public function __construct(string $prenom, int $age, bool $isEtudiant)
    {
        $this->prenom = $prenom;
        $this->age = $age;
        $this->isEtudiant = $isEtudiant;
    }

    public function getPrenom(): string 
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): self 
    {
        $this->age = $age;
        return $this;
    }

    public function isEtudiant(): bool
    {
        return $this->isEtudiant;
    }

    public function setIsEtudiant(bool $isEtudiant): self 
    {
        $this->isEtudiant = $isEtudiant;
        return $this;
    }

    // En deuxième temps
    public function afficherStatut(): void
    {
        echo $this->prenom." a ".$this->age." ans\n";
    }
}

$Alex = new Personne('Alex', 15, true);
$John = new Personne('John', 18, true);
$Mike = new Personne('Mike', 32, false);

echo $Alex->getPrenom()." a ".$Alex->getAge()." ans\n";
echo $John->getPrenom()." a ".$John->getAge()." ans\n";
echo $Mike->getPrenom()." a ".$Mike->getAge()." ans\n";

// Créer la fonction afficherStatut
$Alex->afficherStatut();
$John->afficherStatut();
$Mike->afficherStatut();
