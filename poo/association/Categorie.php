<?php

class Categorie {
    private string $libelle;

    /**
     * @param string $libelle
     */
    public function __construct(string $libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * @return string
     */
    public function getLibelle(): string
    {
        return $this->libelle;
    }

    /**
     * @return string
     */


}

