<?php

require_once 'fonctions.php';

// Définir un rectangle
$longueur1 = 10;
$largeur1 = 5;
// Périmètre
$perimetre1 = calculerPerimetre($longueur1, $largeur1);
echo $perimetre1 . PHP_EOL;
// Aire
$aire1 = calculerAire($longueur1, $largeur1);
echo $aire1 . PHP_EOL;

// Définir un nouveau rectangle
$longueur2 = 15;
$largeur2 = 7;
echo calculerPerimetre($longueur2, $largeur2) . PHP_EOL;
echo calculerAire($longueur2, $largeur1) . PHP_EOL;