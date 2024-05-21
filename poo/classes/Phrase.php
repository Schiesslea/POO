<?php

class Phrase {

    private string $phrase;

    /**
     * @param string $phrase
     */
    public function __construct(string $phrase)
    {
        $this->phrase = $phrase;
    }

    /**
     * @return string
     */
    public function getPhrase(): string
    {
        return $this->phrase;
    }

    /**
     * @param string $phrase
     */
    public function setPhrase(string $phrase): void
    {
        $this->phrase = $phrase;
    }

    public function CalculerNombreMots(): int {
        $nombre = explode(" ", $this->phrase);
        return count($nombre);
    }

    public function CalculerNombreCaractere(): int {
        $mots = explode(" ", $this->phrase);
        $lettres = implode($mots);
        return strlen($lettres);
    }

    public function getPositionMot(int $position): ?string {
        $mots = explode(" ", $this->phrase);
        if (!isset($mots[$position-1]) ) {
            return null;
        }
        return $mots[$position-1];
    }

    public function getTypePhrase(): string {
        $caractere = str_split($this->phrase);
        if (end($caractere)== "?") {
            return "C'est une phrase interrogative";
        } elseif (end($caractere)=="!") {
            return "C'est une phrase exclamative";
        } else {
            return "C'est une phrase déclarative";
        }
    }

    public function getNombreOccurenceMot(string $mot): int {
        $phrase = trim($this->phrase, "?.!");
        $phrase = explode(" ", $phrase);
        $nombreOccurence = 0;
        foreach ($phrase as $mots) {
            if (strtolower($mots)==strtolower($mot)) {
                $nombreOccurence++;
            }
        }
        return $nombreOccurence;
    }

    public function remplacerOccurence(string $mot, string $nouvMot): string {
        return str_replace($mot, $nouvMot, $this->phrase);
}

    public function  reformaterPhrase(): string {
        $reformater = ucfirst($this->phrase);
        if (substr($reformater, -1) != "."||"!"||"?") {
            $reformater.=".";

        }
        return $reformater;
    }

    public function getNombreVoyelles(): int {
        $nbVoyelles = 0;
        $voyelles = ["a","e","i","o","u","y"];
        $caracteres = str_split(strtolower($this->phrase));
        foreach ($caracteres as $caractere) {
            foreach ($voyelles as $voyelle) {
                if ($caractere==$voyelle) {
                    $nbVoyelles++;
                }
            }

        }
        return $nbVoyelles;
    }


}