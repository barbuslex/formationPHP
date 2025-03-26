<?php 
class Personne
{
    private string $prenom;
    private int $age;
    private bool $isEtudiant;
    
    // MODIF
    private array $notes;
    

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

    public function afficherStatut(): void
    {
        echo $this->prenom." a ".$this->age." ans\n";
    }

    public function isMajeur(): bool
    {
        return $this->getAge() >= 18;
    }

    public function isUniversitaire(): bool 
    {
        return $this->isMajeur() && $this->isEtudiant();
    }

    // MODIF
    public function setNotes(array $notes): void
    {
        $this->notes = $notes;
    }

    public function getNotes(): array
    {
        return $this->notes;
    }

    public function getMoyenne(): float 
    {
        // MODIF
        $notes = 0;
        foreach($this->getNotes() as $note) {
            $notes += $note;
        }
        $moyenne = $notes / count($this->getNotes());
        return round($moyenne, 1);
    }

    public function afficherMajorite(): string
    {
        $majorite = ($this->isMajeur()) ? "Majeur" : "Mineur";
        return $majorite;
    }

    public function estRedoublant(): bool 
    {
        return $this->getMoyenne() < 10;
    }
}

$Alex = new Personne('Alex', 15, true);

// MODIF
$Alex->setNotes([
    'Francais' => 12.5,
    'Math' => 8.0,
    'HistoireGeo' => 14
]);

echo $Alex->getPrenom()." (".$Alex->afficherMajorite().") a ".$Alex->getMoyenne()." de moyenne";
if($Alex->estRedoublant()) {
    echo ", il est REDOUBLANT !";
}
echo "\n";
