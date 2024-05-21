<?php

function calculerPerimetre(int $longueur, int $largeur) : int {
    return ($longueur+$largeur)*2;
}

function calculerAire(int $longueur, int $largeur) : int {
    return $longueur*$largeur;
}