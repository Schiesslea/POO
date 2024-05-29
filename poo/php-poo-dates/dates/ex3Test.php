<?php

/*
 * Exercice 3 : création d'objets DateTime et différence de dates
 */

// Créer 2 objets DateTime :
// - le premier représente la date du jour et l'heure courante
// - le second représente la date du 22/06/2019 à 9h15
$now = new DateTime();
$date = new DateTime("2019-06-22 09:15");
// Calculer la différence entre la date du jour et la date du 22/06/2019 à 9h15
$diff = $now->diff($date);
// Afficher le nombre de jours entre les 2 dates
echo $diff->days;
echo PHP_EOL;
echo $diff->format('%a jours');
echo PHP_EOL;
// Afficher le nombre d'années, mois et jours entre les 2 dates
echo $diff->format('%y années, %m mois et %d jours');
echo PHP_EOL;
echo "$diff->y années $diff->m mois $diff->d jours";
echo PHP_EOL;
// Afficher le nombre de jours, heures, minutes et secondes entre les 2 dates

echo PHP_EOL;
// Afficher le nombre de mois entre les 2 dates
$mois = $diff->y * 12 + $diff->m;
echo $mois;
