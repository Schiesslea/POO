<?php

class Personne {

    private string $nom;
    private array $prenoms = [];
    // $dateNaissance est un référence sur un objet (instance) sur la classe DateTime
    private DateTime $dateNaissance;

    /**
     * @param string $nom
     * @param array $prenoms
     * @param DateTime $dateNaissance
     */
    public function __construct(string $nom, string $prenom, string $dateNaissance)
    {
        $this->nom = strtoupper($nom);
        $this->prenoms[] = ucfirst(strtolower($prenom));
        $this->dateNaissance = DateTime::createFromFormat("d/m/Y", $dateNaissance);
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = strtoupper($nom);
    }

    /**
     * @return array
     */
    public function getPrenoms(): array
    {
        return $this->prenoms;
    }

    /**
     * @param array $prenoms
     */
    public function setPrenoms(array $prenoms): void
    {
        $this->prenoms = $prenoms;
    }

    /**
     * @return DateTime
     */
    public function getDateNaissance(): DateTime
    {
        return $this->dateNaissance;
    }

    /**
     * @param DateTime $dateNaissance
     */
    public function setDateNaissance(DateTime $dateNaissance): void
    {
        $this->dateNaissance = $dateNaissance;
    }

    public function getIdentiteCourante(): string {
        return $this->prenoms[0]." " .$this->nom ;
    }

    public function ajouterPrenom(string $prenom): bool {
        if (count($this->prenoms) === 3) {
            return false;
        }
        $this->prenoms[] = ucfirst(strtolower($prenom));
        return true;
    }

    public function getIdentiteAdministrative(): string {
        $prenoms = implode(" ", $this->prenoms); // Permet de séparer les valeurs
        return $prenoms . " " . $this->nom;
    }

    public function retournerDateNaissance(): string {
        return $this->dateNaissance->format("d/m/Y");
    }

    public function getAge():int  {
        $now = new DateTime();
        $interval = $this->dateNaissance->diff($now);
        return $interval->y;
    }
}