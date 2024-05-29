<?php

/*
 * Exercice 4 : création d'objets DateInterval (intervalle de temps, durée) et formatage
 */

// Créer un objet DateInterval représentant un intervalle de 4 mois et 2 jours
$duree = new DateInterval('P4M2D');
// Afficher l'intervalle au format 4m2j
echo $duree->format('%m mois et %d jours');
echo PHP_EOL;
// Créer un objet DateInterval représentant un intervalle de 2 jours, 3 heures et 5 minutes
$duree = new DateInterval('P2DT3H5M');
// Afficher l'intervalle au format 2j03h05mn
echo $duree->format("%dj%Hh%Imn");
echo PHP_EOL;
// Créer un objet DateInterval représentant un intervalle 4 heures, 5 minutes et 6 secondes
$duree = new DateInterval('PT4H5M6S');
// Afficher l'intervalle au format 04h05mn06s
echo $duree->format("%Hh%Imn%Ss");

echo PHP_EOL;
