<?php

// Créer un objet DateTime
$now = new DateTime();
echo $now->format("d/m/Y H:i:s");
echo PHP_EOL;
$date1 = new DateTime("03/23/2020");
echo $date1->format("d/m/Y");
echo PHP_EOL;
$date2 = DateTime::createFromFormat("d/m/Y", "22/03/2020");
echo $date2->format("d/m/Y");