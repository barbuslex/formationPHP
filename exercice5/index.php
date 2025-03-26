<?php 
class Personne
{
    private string $prenom;
    private int $age;
    private bool $isEtudiant;

    // AJOUT
    private float $noteMath = 0;
    private float $NoteFrancais = 0 ;
    private float $noteHistoireGeo = 0;
    

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

    // AJOUT
    public function isMajeur(): bool
    {
        return $this->getAge() >= 18;
    }

    public function isUniversitaire(): bool 
    {
        return $this->isMajeur() && $this->isEtudiant();
    }

    public function setNoteMath(float $note): void
    {
        $this->noteMath = $note;
    }

    public function getNoteMath(): float
    {
        return $this->noteMath;
    }

    public function setNoteFrancais(float $note): void
    {
        $this->NoteFrancais = $note;
    }

    public function getNoteFrancais(): float 
    {
        return $this->NoteFrancais;
    }

    public function setNoteHistoireGeo(float $note): void 
    {
        $this->noteHistoireGeo = $note;
    }

    public function getNoteHistoireGeo(): float
    {
        return $this->noteHistoireGeo;
    }

    public function getMoyenne(): float 
    {
        $notes = $this->getNoteMath() + $this->getNoteFrancais() + $this->getNoteHistoireGeo();
        $moyenne = $notes / 3;
        return round($moyenne, 1);
    }
}

$Alex = new Personne('Alex', 15, true);

$Alex->setNoteFrancais(12.5);
$Alex->setNoteMath(8);
$Alex->setNoteHistoireGeo(14);

echo $Alex->getPrenom()." a ".$Alex->getMoyenne()." de moyenne.\n";
