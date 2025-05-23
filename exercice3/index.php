<?php 
echo "Personne BAD Method : \n";
class PersonneBad
{
    var string $prenom;
    var int $age;
    var bool $isEtudiant;

    public function __construct(string $prenom, int $age, bool $isEtudiant)
    {
        $this->prenom = $prenom;
        $this->age = $age;
        $this->isEtudiant = $isEtudiant;
    }
}

$Alex = new PersonneBad('Alex', 15, true);
$John = new PersonneBad('John', 18, true);
$Mike = new PersonneBad('Mike', 32, false);

echo $Alex->prenom." a ".$Alex->age." ans\n";
echo $John->prenom." a ".$John->age." ans\n";
echo $Mike->prenom." a ".$Mike->age." ans\n";
echo "\n";

echo "Personne GOOD Method :\n";
class PersonneGood
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

$Alex = new PersonneGood('Alex', 15, true);
$John = new PersonneGood('John', 18, true);
$Mike = new PersonneGood('Mike', 32, false);

echo $Alex->getPrenom()." a ".$Alex->getAge()." ans\n";
echo $John->getPrenom()." a ".$John->getAge()." ans\n";
echo $Mike->getPrenom()." a ".$Mike->getAge()." ans\n";

// Créer la fonction afficherStatut
$Alex->afficherStatut();
$John->afficherStatut();
$Mike->afficherStatut();
