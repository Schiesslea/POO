<?php

// Définition de la classe
class Rectangle {
    // Attributs
    private int $longueur;
    private int $largeur;
    private string $couleur;

    /**
     * @param int $longueur
     * @param int $largeur
     */
    public function __construct(int $longueur, int $largeur, string $couleur)
    {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
        $this->couleur = $couleur;
    }

    /**
     * @return string
     */
    public function getCouleur(): string
    {
        return $this->couleur;
    }

    /**
     * @param string $couleur
     */
    public function setCouleur(string $couleur): void
    {
        $this->couleur = $couleur;
    }

    /**
     * @return int
     */
    public function getLongueur(): int
    {
        return $this->longueur;
    }

    /**
     * @param int $longueur
     */
    public function setLongueur(int $longueur): void
    {
        $this->longueur = $longueur;
    }

    /**
     * @return int
     */
    public function getLargeur(): int
    {
        return $this->largeur;
    }

    /**
     * @param int $largeur
     */
    public function setLargeur(int $largeur): void
    {
        $this->largeur = $largeur;
    }


    public function calculerSurface() : int {
        return $this->largeur * $this->longueur;
    }

    public function __toString(): string
    {
        return $this->longueur.",".$this->largeur;
    }
    public function calculerPerimetre() : int {
        return ($this->largeur + $this->longueur) * 2;
    }

    public function dessinerRectangle(string $symbole) : string {
        $dessin="";
        for ($i=0; $i<$this->largeur; $i++) {
            for ($j=0; $j<$this->longueur; $j++) {
                $dessin .= $symbole;
            }
            $dessin.=PHP_EOL;
        }
        return $dessin;
    }

    public function dessinerRectangle2(string $symbole) : string {
       $ligne=str_repeat($symbole,$this->longueur).PHP_EOL;
       $rectangle=str_repeat($ligne,$this->largeur).PHP_EOL;
       return $rectangle;
    }



}