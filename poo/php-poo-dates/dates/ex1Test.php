<?php

/*
 * Exercice 1 : création d'objets DateTime et formatage de dates
 */

// Créer un objet DateTime représentant la date du jour et l'heure courante
$now = new DateTime();

// Afficher la date au format jj/mm/aaaa hh:mm
echo $now->format("d/m/Y H:i");

echo PHP_EOL;
// Modifier l'heure de l'objet pour qu'il soit à 22h10
$now->setTime("22", "10");

// Afficher la date au format jj/mm/aaaa hh:mm
echo $now->format("d/m/Y H:i");

echo PHP_EOL;
